<?php 

/* Middleware in Laravel is a way to filter HTTP requests before they reach your application's routes.
Middleware can be used to perform tasks such as authentication, logging, or modifying the request or response.
Middleware operates on the request and response objects, and can modify them before passing them on to the next 
middleware or to the route handler. */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class LogRequests
{
    public function handle($request, Closure $next)
    {
        Log::info('Received request: ' . $request->fullUrl());

        return $next($request);
    }
}

/* This middleware logs the full URL of every request using Laravel's Log facade,
and then passes the request on to the next middleware or route handler using the $next closure. */