<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    // public function store(Request $request)
    // {
    //     $task = Task::create([
    //         'title' => $request->task_title,
    //         'project_id' => 2,
    //         'user_id' => Auth::id(),
    //     ]);
    //     return $task;
    // }
}
