<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!session()->exists('lang')){
            $lang = substr(request()->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);
            session()->put('lang', $lang);
        }
        App::setLocale(session('lang'));
        return $next($request);
    }
}
