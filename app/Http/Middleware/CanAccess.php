<?php

namespace App\Http\Middleware;

use Closure;

class CanAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $param)
    {   
        if (!auth()->user()->hasAccess($param)) {
            return abort(403);
        }
        
        return $next($request);
    }
}
