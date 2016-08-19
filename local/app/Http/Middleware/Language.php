<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Session;
use Cookie;

class Language
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
        $ln = Cookie::get('ln');       

        App::setLocale($ln);
        return $next($request);
    }
}
