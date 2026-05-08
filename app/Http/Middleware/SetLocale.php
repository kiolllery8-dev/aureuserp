<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    /**
     * Supported locales for the public-facing site.
     * Keep this list in sync with resources/views/filament/components/language-switcher.blade.php
     */
    private const SUPPORTED_LOCALES = ['zh_TW', 'en', 'ar'];

    public function handle(Request $request, Closure $next): Response
    {
        // Check for language parameter in URL
        if ($request->has('lang')) {
            $locale = $request->get('lang');
            if (in_array($locale, self::SUPPORTED_LOCALES, true)) {
                Session::put('locale', $locale);
                App::setLocale($locale);
            }
        } elseif (Session::has('locale')) {
            $sessionLocale = Session::get('locale');
            if (in_array($sessionLocale, self::SUPPORTED_LOCALES, true)) {
                App::setLocale($sessionLocale);
            }
        }
        // If no explicit choice, fall through and let config('app.locale') (zh_TW) win.

        return $next($request);
    }
}
