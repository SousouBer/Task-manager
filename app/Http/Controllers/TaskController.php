<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Contracts\View\View;

class TaskController extends Controller
{
	public function index($dueTasks = null): View
	{
		$task = Task::latest();

		if ($dueTasks === null) {
			$task = Task::latest()->paginate(5);
		} else {
			$task = Task::latest()->filter()->paginate(5);
		}

		return view('admin.admin-panel', [
			'tasks' => $task,
		]);
	}
}
