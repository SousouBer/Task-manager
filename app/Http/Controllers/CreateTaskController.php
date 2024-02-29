<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Task;
use App\Rules\GeorgianLetters;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CreateTaskController extends Controller
{
	public function index(): View
	{
		return view('create-task');
	}

	public function store(StorePostRequest $request): RedirectResponse
	{		
		$validated = $request->validated();

		Task::create($validated);

		return redirect()->route('admin_panel');
	}
}
