<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\SharedProject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SharedProjectController extends Controller
{
    public function store(Request $request)
    {
        $user = User::where('name', $request->user_name)->first();
        // dd($request->pid);
        // dd(Auth::id());
        SharedProject::create([
            'project_id' => $request->pid,
            'creator_id' => Auth::id(),
            'shared_users' => $user->id,
            'status' => '1',
        ]);
    }
}
