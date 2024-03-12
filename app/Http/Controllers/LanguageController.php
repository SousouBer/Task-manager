<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
	public function setLocale(string $locale): RedirectResponse
	{
		$availableLanguages = Config::get('app.available_languages');

		if (!in_array($locale, $availableLanguages)) {
			abort(400);
		}

		App::setLocale($locale);

		Session::put('locale', $locale);

		return redirect()->back();
	}
}
