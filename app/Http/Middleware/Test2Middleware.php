<?php

namespace App\Http\Middleware;

class Test2Middleware
{
    public function handle($request, \Closure $next)
    {
        echo 2;
        return $next($request);
    }
}