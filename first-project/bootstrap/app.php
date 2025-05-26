<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // $middleware->append(AgeCheck::class); // append method will apply Middleware on all routes as GLOBAL middleware.

        $middleware->appendToGroup('mgroup', [
            AgeCheck::class,
            CountryCheck::class,
        ]);

        // We don't have to register the middlewares assigned to routes as they can directly used with routes.
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
