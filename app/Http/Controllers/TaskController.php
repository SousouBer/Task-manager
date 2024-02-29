<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Contracts\View\View;

class TaskController extends Controller
{
	public function index(): View
	{
		$task = Task::latest()->paginate(5);

		return view('admin.admin-panel', [
			'tasks' => $task,
		]);
	}

	public function indexDueTasks() : View
	{
		return view('admin.due-tasks', [
			'tasks' => Task::latest()->filter()->paginate(5),
		]);
	}
}
