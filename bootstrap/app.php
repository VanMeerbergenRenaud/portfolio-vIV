<?php

use App\Http\Middleware\NoStoreForLivewirePages;
use App\Http\Middleware\RequireLivewireSnapshot;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Livewire\Mechanisms\HandleComponents\CorruptComponentPayloadException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web(append: [
            RequireLivewireSnapshot::class,
            NoStoreForLivewirePages::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->dontReport([
            CorruptComponentPayloadException::class,
        ]);

        $exceptions->render(function (CorruptComponentPayloadException $e) {
            return response()->json(['message' => 'Invalid component payload.'], 400);
        });
    })->create();
