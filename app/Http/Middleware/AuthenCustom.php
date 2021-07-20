<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthenCustom
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(backpack_auth()->check()){
            return $next($request);
        }else{
            return redirect("admin/login");
        }
    }
}
