<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Models\Task;
use Illuminate\Http\RedirectResponse;

class CreateTaskController extends Controller
{
	public function store(StoreTaskRequest $request): RedirectResponse
	{
		$validated = $request->validated();

		Task::create($validated);

		return redirect()->route('admin_panel');
	}
}
