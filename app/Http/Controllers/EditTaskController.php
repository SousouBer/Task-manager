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
		$attributes = $request->validated();

		$task->update([
			'name' => [
				'en' => $attributes['name_en'],
				'ka' => $attributes['name_ka'],
			],
			'description' => [
				'en' => $attributes['description_en'],
				'ka' => $attributes['description_ka'],
			],
			'due_date' => $attributes['due_date'],
		]);

		return redirect()->route('tasks.index');
	}
}
