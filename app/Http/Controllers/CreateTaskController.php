<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Models\Task;
use Illuminate\Http\RedirectResponse;

class CreateTaskController extends Controller
{
	public function store(StoreTaskRequest $request): RedirectResponse
	{
		$attributes = $request->only('name', 'description', 'due_date');

		Task::create($attributes);

		return redirect()->route('tasks.index');
	}
}
