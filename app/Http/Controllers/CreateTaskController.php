<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Models\Task;
use Illuminate\Http\RedirectResponse;

class CreateTaskController extends Controller
{
	public function store(StoreTaskRequest $request): RedirectResponse
	{
		$validated = $request->validated();

		Task::create([
			'name' => [
				'en' => $validated['name_en'],
				'ka' => $validated['name_ka'],
			],
			'description' => [
				'en' => $validated['description_en'],
				'ka' => $validated['description_ka'],
			],
			'due_date' => $validated['due_date'],
		]);

		return redirect()->route('tasks.index');
	}
}
