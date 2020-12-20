<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if(in_array($request->user()->role, $roles)){
            //Request boleh di lanjutkan
            return $next($request);
        }else{
            //Jika role tidak sesuai, redirect ke route reject role
            return redirect('/rejectrole');
        }
    }
}
