<?php

namespace App\Http;


use Illuminate\Foundation\Http\Kernel as HttpKernel;


class Kernel extends HttpKernel
{

    protected $routeMiddleware = [
        'auth' => \Illuminate\Auth\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,

        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,

        'cors' => \App\Http\Middleware\Cors::class,
    ];
}
