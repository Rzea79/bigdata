<?php

namespace App\Http\Middleware;

use Closure;

class CheckRode
{
    public function handle($request, Closure $next, $role)
    {
        if(! $request->user()->hasRole($role)){
            return redirect('/cliente/home');
        }
 
        return $next($request);
    }

}
