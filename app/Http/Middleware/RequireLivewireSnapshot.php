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
            // Reject missing/non-string snapshots before Livewire tries to hydrate.
            $payload = $request->json()->all();
            $snapshot = data_get($payload, 'components.0.snapshot')
                        ?? data_get($payload, 'snapshot')
                        ?? data_get($payload, 'fingerprint');

            if (! is_string($snapshot) || $snapshot === '') {
                return response()->json(['message' => 'Invalid Livewire snapshot.'], 400);
            }

            // Optional: reject obviously truncated payloads to reduce corrupt hydration attempts.
            if (strlen($snapshot) < 50) {
                return response()->json(['message' => 'Truncated Livewire snapshot.'], 400);
            }

            // Apply rate limiting specifically for livewire updates: 60 requests per minute per IP.
            $ip = $request->ip();
            $limiterKey = 'livewire-update:'.($ip ?? 'unknown');

            if (RateLimiter::tooManyAttempts($limiterKey, 60)) {
                $seconds = RateLimiter::availableIn($limiterKey);

                return response()->json([
                    'message' => 'Too many requests.',
                    'retry_after' => $seconds,
                ], 429, [
                    'Retry-After' => $seconds,
                ]);
            }

            RateLimiter::hit($limiterKey, 60);
        }

        return $next($request);
    }
}
