<?php

namespace App\Http\Middleware;

use Closure;

class MustBeAnAdmin
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
        //Auth::user()
        //登录用户&&是管理员
        if($request->user() && $request->user()->isAdmin()){

            return $next($request);
        }

        return redirect('/');
    }
}
