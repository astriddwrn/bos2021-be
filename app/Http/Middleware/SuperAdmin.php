<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SuperAdmin
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
        if($request->user()->role != 2
            && $request->user()->role != 3
            && $request->user()->role != 4
            && $request->user()->role != 5) {

            return back()->with('alert', 'You are not an admin!');
        }
        return $next($request);
    }
}
