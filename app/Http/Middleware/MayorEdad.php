<?php

namespace App\Http\Middleware;

use Closure;

//tamara

class MayorEdad
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
        if($request->edad>18){
            return $next($request);
        }else{
            return redirect('/menor');
        }

    }
}
