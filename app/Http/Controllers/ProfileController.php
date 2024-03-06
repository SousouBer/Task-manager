<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
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
			$auth->password = Hash::make($request->password);
			$auth->save();
		}

		if ($request->hasFile('profile_picture')) {
			$path = $request->file('profile_picture')?->store('profiles');
			$auth->picture = $path;
			$auth->save();
		}

		if ($request->hasFile('cover_picture')) {
			$request->file('cover_picture')->getClientOriginalName();
			$request->file('cover_picture')->storeAs('images', 'cover.png');
		}

		return redirect()->route('tasks.index');
	}
}
