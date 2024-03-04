<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
	public function update(UpdateProfileRequest $request): RedirectResponse
	{
		$path = $request->file('profile_picture')->store('profiles');

		// dd($request->file('profile_picture'));
		$auth = Auth::user();

		if ($request->filled('current_password') && !Hash::check($request->current_password, $auth->password)) {
			return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.']);
		}

		if ($request->filled('password')) {
			$user = User::find($auth->id);
			$user->password = Hash::make($request->password);
			$user->save();
		}

		$user = User::find($auth->id);
		$user->picture = $path;
		$user->save();

		return redirect()->route('tasks.index');
	}

	public function destory()
	{
		$auth = Auth::user();

		$user = User::find($auth->id);
		Storage::delete($user->picture);

		$user->update(['picture' => 'images/avatar.png']);

		return redirect()->back();
	}
}
