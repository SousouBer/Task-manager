<?php

namespace App\Http\Controllers;

use App\Http\Requests\DueTasksRequest;
use App\Models\Task;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class TaskController extends Controller
{
	public function index(DueTasksRequest $request): View
	{
		$dueTasks = $request->input('dueTasks');

		$task = Task::latest();

		if (!$dueTasks) {
			$task = Task::latest()->paginate(5);
		} else {
			$task = Task::latest()->filter()->paginate(5);
		}

		return view('admin.admin-panel', [
			'tasks' => $task,
		]);
	}

	public function show(Task $task): View
	{
		return view('admin.task-details', [
			'task' => $task,
		]);
	}

	public function destroy(Task $task): RedirectResponse
	{
		$task->delete();

		return redirect()->route('tasks.index');
	}
}
