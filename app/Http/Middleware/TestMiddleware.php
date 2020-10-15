<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Log;

class TestMiddleware
{
    public function handle($request, \Closure $next)
    {
        echo 1;
        return $next($request);
    }

    public function terminate($request, $response)
    {
        sleep(10);
        Log::info(json_encode($request));
    }
}