<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
     public function handle($request, Closure $next, $guard = null)
     {
         if(Auth::guard($guard)->guest()){
            return redirect('noaccept');
         }
         return $next($request);
     }
}
