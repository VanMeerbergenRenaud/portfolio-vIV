<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Symfony\Component\HttpFoundation\Response;

class RequireLivewireSnapshot
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->routeIs('livewire.update') || $request->is('livewire/update')) {
            // Livewire update requests should include component snapshot data.
            // If missing, this is not a valid Livewire interaction and should not reach Livewire internals.
            $hasSnapshot = $request->has('components') ||
                           $request->has('snapshot') ||
                           $request->has('fingerprint');

            if (! $hasSnapshot) {
                return response()->json(['message' => 'Invalid Livewire request.'], 400);
            }

            // Apply rate limiting specifically for livewire updates: 60 requests per minute per IP.
            $ip = $request->ip();
            $limiterKey = 'livewire-update:' . ($ip ?? 'unknown');

            if (RateLimiter::tooManyAttempts($limiterKey, 60)) {
                $seconds = RateLimiter::availableIn($limiterKey);
                return response()->json([
                    'message' => 'Too many requests.',
                    'retry_after' => $seconds
                ], 429, [
                    'Retry-After' => $seconds
                ]);
            }

            RateLimiter::hit($limiterKey, 60);
        }

        return $next($request);
    }
}
