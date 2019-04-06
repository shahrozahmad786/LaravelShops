<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    { 

        // Check redirection if admin is login
        if (Auth::guard($guard)->check()) {

            if(Auth::user()->hasRole('admin')){
                return redirect('/panel-admin');
            }else{
                return redirect('/home');
            }
        }

        return $next($request);
    }
}
