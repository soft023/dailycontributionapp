<?php

namespace App\Http\Middleware;

use Auth;
use Closure;



class Manager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $role  = Auth()->user()->role;

        if($role == "Manager"){

             return $next($request);
        }

        return redirect('/logout');
       
    }
}
