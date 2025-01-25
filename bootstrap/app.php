<?php

use App\Http\Middleware\CheckUserRole;
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
        $middleware->alias([
            'role.check' => CheckUserRole::class,
        ]);
        //'role.check' => \App\Http\Middleware\CheckUserRole::class, // Enregistrement du middleware personnalisé

               

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
