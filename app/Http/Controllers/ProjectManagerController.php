<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectManagerController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('front.Projects.project', ['projects' => $projects]);
    }
    public function create()
    {
        return view('front.Projects.create');
    }
}
