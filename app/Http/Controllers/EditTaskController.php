<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class EditTaskController extends Controller
{
	public function edit(Task $task): View
	{
		return view('edit-task', [
			'task' => $task,
		]);
	}

	public function update(UpdateTaskRequest $request, Task $task): RedirectResponse
	{
		$attributes = $request->only('user_id', 'name', 'description', 'due_date');

		$task->update($attributes);

		return redirect()->route('tasks.index');
	}
}
