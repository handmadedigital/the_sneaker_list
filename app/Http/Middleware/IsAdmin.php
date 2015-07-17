<?php

namespace HMD\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;

class IsAdmin
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
        if(Auth::user()->is_admin == false)
        {
            Auth::logout();
            Flash::message('You are not allowed here!');

            return redirect()->to('/auth/log-in');
        }

        return $next($request);
    }
}
