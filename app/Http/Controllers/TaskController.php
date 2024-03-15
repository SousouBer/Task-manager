<?php

namespace App\Http\Controllers;

use App\Http\Requests\QueryParameterRequest;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class TaskController extends Controller
{
	public function index(QueryParameterRequest $request): View
	{
		$tasks = auth()->user()->tasks();

		$dueTasks = $request->input('dueTasks');
		$sortBy = $request->input('sortBy', 'created_at');
		$sortDirection = $request->input('sortDirection', 'desc');

		if ($dueTasks) {
			$tasks->filter()->paginate(8);
		}

		$tasks->sort($sortBy, $sortDirection);

		$tasks = $tasks->paginate(8)->appends(['sortBy' => $sortBy, 'sortDirection' => $sortDirection]);

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

	public function edit(Task $task): View
	{
		return view('edit-task', [
			'task' => $task,
		]);
	}

	public function store(StoreTaskRequest $request): RedirectResponse
	{
		Task::create($request->validated());

		return redirect()->route('tasks.index');
	}

	public function update(UpdateTaskRequest $request, Task $task): RedirectResponse
	{
		$task->update($request->validated());

		return redirect()->route('tasks.index');
	}

	public function destroy(Task $task): RedirectResponse
	{
		$task->delete();

		return redirect()->route('tasks.index');
	}

	public function destroyOldTasks(): RedirectResponse
	{
		Task::OldTasks()->delete();

		return redirect()->back();
	}
}
