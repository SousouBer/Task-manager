<?php

namespace App\Http\Controllers;

use App\Http\Requests\QueryParameterRequest;
use App\Models\Task;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class TaskController extends Controller
{
	public function index(QueryParameterRequest $request): View
	{
		$dueTasks = $request->input('dueTasks');

		$sortBy = $request->input('sortBy', 'created_at');
		$sortDirection = $request->input('sortDirection', 'desc');

		$tasks = Task::query();

		if ($dueTasks) {
			$tasks->filter()->paginate(5);
		}

		$tasks->sort($sortBy, $sortDirection);

		$tasks = $tasks->paginate(5)->appends(['sortBy' => $sortBy, 'sortDirection' => $sortDirection]);

		return view('admin.admin-panel', [
			'tasks' => $tasks,
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
