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
		$validated = $request->validated();

		$user = User::where('email', $validated['email'])->first();

		if (!$user || !Hash::check($validated['password'], $user->password)) {
			return back()->withErrors(['invalidInputs' => __('validation.invalid_credentials')]);
		}

		auth()->login($user);

		return redirect()->route('tasks.index');
	}

	public function logout(): RedirectResponse
	{
		auth()->logout();

		return redirect()->route('login');
	}
}
