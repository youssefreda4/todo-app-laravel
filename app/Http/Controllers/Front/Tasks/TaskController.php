<?php

namespace App\Http\Controllers\Front\Tasks;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $tasks = Task::where('user_id', $user_id)->limit(10)->get();

        return view('front.pages.tasks.index', compact('tasks'));
    }

    public function update(Task $task)
    {
        Request()->validate([
            'status' => 'required|string',
        ]);

        $task->update([
            'status' => request()->status
        ]);
        return redirect()->route('tasks.view')->with('success', 'data updated successfully');
    }
}
