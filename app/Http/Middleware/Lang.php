<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Lang
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
        if (auth()->user()){
            app()->setLocale(auth()->user()->language);
        }else{
            app()->setLocale(app('lang'));
        }
        return $next($request);
    }
}
