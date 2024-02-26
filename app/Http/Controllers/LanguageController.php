<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
	public function setLocale(string $locale)
	{
        App::setLocale($locale);

        Session::put('locale', $locale);
        
		return redirect()->back();
	}
}
