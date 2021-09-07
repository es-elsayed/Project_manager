<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        Project::where(['user_id' => Auth::id()])->findOrFail($request->pid);
        $cards = Card::where(['project_id' => $request->pid])->get();
        $tasks = Task::where(['project_id' => $request->pid])->get();
        return view('front.Projects.Tasks.tasks', ['tasks' => $tasks, 'pid' => $request->pid, 'cards' => $cards]);
    }
    public function store(Request $request)
    {
        $task = Task::create([
            'title' => $request->task_title,
            'project_id' => $request->pid,
            'user_id' => Auth::id(),
        ]);
        return redirect()->back();
    }
}
