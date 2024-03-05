<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
	public function update(UpdateProfileRequest $request): RedirectResponse
	{
		$auth = Auth::user();
		$user = User::find($auth->id);

		if ($request->filled('current_password') && !Hash::check($request->current_password, $auth->password)) {
			return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.']);
		}

		if ($request->filled('password')) {
			$user->password = Hash::make($request->password);
			$user->save();
		}

		if ($request->hasFile('profile_picture')) {
			$path = $request->file('profile_picture')?->store('profiles');
			$user->picture = $path;
			$user->save();
		}

		if ($request->hasFile('cover_picture')) {
			$request->file('cover_picture')->getClientOriginalName();
			$request->file('cover_picture')->storeAs('images', 'cover.png');
		}

		return redirect()->route('tasks.index');
	}

	public function destroy(string $pictureType) : RedirectResponse
	{
		if ($pictureType === 'profile') {
			$auth = Auth::user();
			$user = User::find($auth->id);

			$user->picture = 'images/avatar.png';
			$user->save();
		} else {
			$defaultCover = 'images/cover.png';
			$path = 'storage/images/cover.png';

			File::copy($defaultCover, $path);
		}

		return redirect()->back();
	}
}
