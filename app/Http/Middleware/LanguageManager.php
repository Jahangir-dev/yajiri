<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LanguageManager
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

       if (session()->has('locale')) {
            \App::setLocale(session()->get('locale'));
        }else{
            \App::setLocale('en');            
        }
          
        return $next($request);
    }
}
