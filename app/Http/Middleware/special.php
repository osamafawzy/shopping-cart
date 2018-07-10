<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;

class special
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
        if (!Auth::check()) {
            return redirect()->guest('user.signin');
            Session::put('oldurl', $request->url());
        }

        return $next($request);
    }
}
