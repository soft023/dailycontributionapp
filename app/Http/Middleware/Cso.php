<?php

namespace App\Http\Middleware;

use Auth;
use Closure;



class Cso
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

        if($role == "Cso"){

             return $next($request);
        }

        return redirect('/logout');
       
    }
}
