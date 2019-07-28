<?php

namespace App\Http\Middleware;

use Closure;

class IsActiveAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next ,$guard = 'admin')
    {

        if(auth($guard)->check() && (auth($guard)->user()->status ==0)){
            auth($guard)->logout();
                return redirect("admin/login")->with("fail" , "Your Account is disabled");
        }

        return $next($request);
    }
}
