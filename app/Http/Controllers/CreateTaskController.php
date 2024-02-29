<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Rules\GeorgianLetters;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CreateTaskController extends Controller
{
	public function index()
	{
		return view('create-task');
	}

	public function store() : RedirectResponse
	{
		$attributes = request()->validate([
		    'name-en' => 'required|min:3|alpha',
		    'name-ka' => ['required', 'min:3', new GeorgianLetters],
		    'description-en' => 'required|min:3|alpha',
		    'description-ka' => ['required', 'min:3', new GeorgianLetters],
		    'due_date' => 'required',
		]);

		Task::create($attributes);

		return redirect('/admin/panel');
	}
}
