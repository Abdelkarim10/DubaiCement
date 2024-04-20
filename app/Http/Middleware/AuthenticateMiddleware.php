<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AuthenticateMiddleware
{
    public function handle($request, Closure $next)
    {   
        
        if (Auth::check()) {
           
            return $next($request);
        }
    
        // Redirect or handle unauthorized access
        return redirect()->route('login');
    }
}