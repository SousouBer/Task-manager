<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
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

	public function login(LoginRequest $request) : RedirectResponse
	{
		$validated = $request->validated();

		$user = User::where('email', $validated['email'])->first();

		if (!$user || !Hash::check($validated['password'], $user->password)) {
			return back()->withErrors(['invalidInputs' => 'Email or password is invalid. Try again.']);
		}

		auth()->login($user);

		return redirect()->route('admin_panel');
	}
}
