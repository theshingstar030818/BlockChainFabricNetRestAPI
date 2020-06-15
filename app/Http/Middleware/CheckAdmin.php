<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;

use Closure;

class CheckAdmin
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
        // print_r($request->user()->is_admin);exit;
        if (! $request->user()->is_admin == 1) {
            // Redirect...
            return redirect(RouteServiceProvider::HOME);
            // return back();
        }
        return $next($request);
    }
}
