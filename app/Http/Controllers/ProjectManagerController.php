<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectManagerController extends Controller
{
    public function index()
    {
        return view('front.Tasks.tasks');
    }
}
