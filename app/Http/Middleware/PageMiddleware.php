<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class PageMiddleware
{
    public function handle($request, Closure $next)
    {

        if (Auth::check()) {
            return $next($request);
        } else {
            return redirect()->route('login'); 
        }
    }
}
