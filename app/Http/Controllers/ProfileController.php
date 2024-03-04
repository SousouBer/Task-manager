<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
	public function update(UpdateProfileRequest $request): RedirectResponse
	{
		$auth = Auth::user();

		if ($request->filled('current_password') && !Hash::check($request->current_password, $auth->password)) {
			return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.']);
		}

		if ($request->filled('password')) {
			$user = User::find($auth->id);
			$user->password = Hash::make($request->password);
			$user->save();
		}

		return redirect()->route('tasks.index');
	}
}
