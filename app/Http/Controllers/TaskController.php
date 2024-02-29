<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() : View
    {
        $task = Task::paginate(5);
        
        return view('admin.admin-panel', [
            'tasks' => $task,
        ]);
    }

    public function task(Task $task) : View
    {
        return view('admin.task-details', [
            'task' => $task
        ]);
    }
}
