<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditTaskRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class EditTaskController extends Controller
{
	public function index(): View
	{
		return view('edit-task');
	}

	public function edit(EditTaskRequest $request): RedirectResponse
	{
		$validated = $request->validated();

		return redirect()->route('admin_panel');
	}
}
