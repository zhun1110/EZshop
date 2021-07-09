<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     * 
     */
    public function handle(Request $request, Closure $next ,$guard = 'admin')
    {
        if (Auth::guard($guard)->check()) {
            
        }else{
            return redirect()->route('AdminLoginView');
        }
        return $next($request);
    }
}
