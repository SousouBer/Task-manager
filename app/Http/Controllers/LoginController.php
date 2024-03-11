<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
	public function login(LoginRequest $request): RedirectResponse
	{
		$email = $request->email;
		$password = $request->password;

		$user = User::where('email', $email)->first();

		if ($user && Hash::check($password, $user->password)) {
			auth()->login($user);

			return redirect()->route('tasks.index');
		}

		return back()->withErrors(['invalidInputs' => __('validation.invalid_credentials')]);
	}

	public function logout(): RedirectResponse
	{
		auth()->logout();

		return redirect()->route('login');
	}
}
