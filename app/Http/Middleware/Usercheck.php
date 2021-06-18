<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Usercheck
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
        if($request->balance>1000){
            return redirect('global');    
        }
        return $next($request);    
    }
    
}
