<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$type)
    {
        // if (auth()->user()->type == $userType) {
        //     return $next($request);
        // }
        if (in_array($request->user()->type,  $type)) {
            return $next($request);
        }
        return redirect('/');
        /* return response()->view('errors.check-permission'); */
    }
}
