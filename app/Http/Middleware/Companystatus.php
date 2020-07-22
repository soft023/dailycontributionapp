<?php

namespace App\Http\Middleware;

use Auth;
use App\Company;
use Closure;



class Companystatus
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

             $code = Auth::user()->code;
             $comp = Company::all()->where('code',$code);
             foreach ($comp as $key) {
             $status = $key->status;
            }

     

        if( $status == "Active" ){

             return $next($request);

        }

        return redirect('/logout');
       
    }
}
