<?php

namespace App\Http\Middleware;

use App;
use Carbon\Carbon;
use Closure;
use Illuminate\Support\Collection;
use Inertia\Inertia;
use Session;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $locale = mb_substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);

        $user = $request->user();
        if ($user) {
            $locale = $user?->locale ?? $locale;
        } elseif (Session::has('locale')) {
            $locale = Session::get('locale');
        }

        $language = $this->getLanguages()->firstWhere('carbon_locale_code', $locale);

        if ($language) {
            $this->setLanguage($language);
        }

        return $next($request);
    }

    /**
     * Set applications language.
     */
    protected function setLanguage($language): void
    {
        /**
         * Set the Laravel locale.
         */
        App::setLocale($language->carbon_locale_code);

        /**
         * setLocale for php. Enables ->formatLocalized() with localized values for dates.
         */
        setlocale(\LC_TIME, $language->php_locale_code);
        setlocale(\LC_MONETARY, $language->php_locale_code);

        /**
         * setLocale to use Carbon source locales. Enables diffForHumans() localized.
         */
        Carbon::setLocale($language->carbon_locale_code);

        /**
         * Update global variable.
         */
        Inertia::share('locale', $language->carbon_locale_code);
    }

    private function getLanguages(): Collection
    {
        return collect([
            (object) [
                'name' => 'Spanish, Mexico',
                'php_locale_code' => 'es_MX',
                'carbon_locale_code' => 'es',
                'description' => [
                    'en' => 'Spanish',
                    'es' => 'Español',
                ],
                'rtl' => false,
                'flag' => '',
                'currency' => 'MXN',
            ],
            (object) [
                'name' => 'English, U.S.A.',
                'php_locale_code' => 'en_US',
                'carbon_locale_code' => 'en',
                'description' => [
                    'en' => 'English',
                    'es' => 'Spanish',
                ],
                'rtl' => false,
                'flag' => '',
                'currency' => 'USD',
            ],
        ]);
    }
}
