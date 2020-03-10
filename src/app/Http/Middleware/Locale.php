<?php

namespace App\Http\Middleware;

use Closure;

class Locale
{
    protected $languages = ['fr', 'en'];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->getSession()->has('locale') === null)
        {
            session()->put('locale', $request->getPreferredLanguage($this->languages));
        }

        app()->setLocale(session('locale'));

        return $next($request);
    }
}
