<?php

namespace App\Http\Controllers;

class LocaleController extends Controller
{
    /**
     * Update the application language.
     */
    public function update(string $locale = 'es')
    {
        session()->put('locale', $locale);

        return redirect()->back();
    }
}
