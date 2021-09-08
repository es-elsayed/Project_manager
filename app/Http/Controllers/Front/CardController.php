<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CardController extends Controller
{
    public function store(Request $request)
    {
        $task = Card::create([
            'title' => $request->card_title,
            'task_id' => $request->tid,
            'priority' => $request->priority,
            'project_id' => $request->pid,
            'user_id' => Auth::id(),
        ]);
        return redirect()->back();
    }
}
