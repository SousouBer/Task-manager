<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
	public function index()
	{
		return view('login.index');
	}

	public function login()
	{
		$attributes = request()->validate([
			'email'    => 'required|email',
			'password' => 'required|min:4',
		]);

		$user = User::where('email', $attributes['email'])->first();

		if (!$user || !Hash::check($attributes['password'], $user->password)) {
			return back()->withErrors(['email' => 'The email field is required and must be a valid email address.']);
		}

		auth()->login($user);

		return redirect('/admin/panel');
	}
}
