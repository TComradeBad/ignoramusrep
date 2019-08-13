<?php

namespace App\Http\Middleware;

use Closure;

class IsAuth
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
        if(!\Auth::user()){
            return abort(404);
        }
        return $next($request);
    }
}
