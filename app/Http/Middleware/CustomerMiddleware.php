<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CustomerMiddleware
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
        if(Auth::user()->user_type == 3)
        {
            return $next($request);
        }
        else
        {
//            return redirect('/home')->with('status', 'You are not allow to the Admin Dashboard');
            return redirect()->back();
        }
    }
}
