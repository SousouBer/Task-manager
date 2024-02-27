<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $task = Task::paginate(5);
        
        return view('admin.admin-panel', [
            'tasks' => $task,
        ]);
    }
}
