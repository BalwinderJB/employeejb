<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if(Auth::user()->user_type == 1)
        {
            return $next($request);
        }
        else
        {
            return redirect('/home')->with('status', 'You are not allow to the Admin Dashboard');
            return redirect('/home')->with("<script>alert('You are not allow to the Admin Dashboard')</script>");
//            return redirect()->back();
        }
    }
}
