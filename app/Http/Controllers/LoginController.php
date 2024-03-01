<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
	public function index() : View
	{
		return view('login.index');
	}

	public function login() : RedirectResponse
	{
		$attributes = request()->validate([
			'email'    => 'required|email',
			'password' => 'required|min:4',
		]);

		$user = User::where('email', $attributes['email'])->first();

		if (!$user || !Hash::check($attributes['password'], $user->password)) {
			return back()->withErrors(['email' => 'Email or password is invalid. Try again.']);
		}

		auth()->login($user);

		return redirect('/admin/panel');
	}
}
