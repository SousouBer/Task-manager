<?php

namespace App\Http\Controllers;

use App\Http\Requests\DueTasksRequest;
use App\Models\Task;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

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
}
