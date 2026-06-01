<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web(append: [
            \App\Http\Middleware\RequireLivewireSnapshot::class,
            \App\Http\Middleware\NoStoreForLivewirePages::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (\Livewire\Mechanisms\HandleComponents\CorruptComponentPayloadException $e) {
            return response()->json(['message' => 'Invalid component payload.'], 400);
        });
    })->create();
