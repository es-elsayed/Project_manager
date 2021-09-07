<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectManagerController extends Controller
{
    public function index()
    {
        $projects = Project::where(["user_id" => Auth::id()])->get();
        return view('front.Projects.project', ['projects' => $projects]);
    }
    public function create()
    {
        $tasks = Task::all();
        return view('front.Projects.create', ['tasks' => $tasks]);
    }
    public function store(Request $request)
    {
        $project = Project::create([
            'title' => $request->project_title,
            'user_id' => Auth::id(),
        ]);
        return redirect()->route('projects.index');
    }
    public function destroy(Request $request)
    {
        Task::where('project_id', $request->id)->delete();
        Project::destroy($request->id);
        return redirect()->back()->with(['success' => 'The Project delete Successfuly']);
    }
}
