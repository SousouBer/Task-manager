<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TaskController extends Controller
{
	public function index(Request $request): View
	{
		$dueTasks = $request->query('dueTasks');

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
