<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EditTaskController extends Controller
{
    public function index() : View
    {
        return view('edit-task');
    }

    public function edit(StoreTaskRequest $request): RedirectResponse
	{
		$validated = $request->validated();

		return redirect()->route('admin_panel');
	}
}
