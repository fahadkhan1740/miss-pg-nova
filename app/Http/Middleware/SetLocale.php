<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $locales = ['en', 'ar'];

        if (in_array($request->get('locale'), $locales, true)) {
            app()->setLocale($request->get('locale'));
        }

        return $next($request);
    }
}
