<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddTaskRequest;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index(){
        $tasks = Task::with('user')->paginate(10);
        return view('admin.pages.index',compact('tasks'));
    }

    public function create(){
        $users = User::all();
        return view('admin.pages.add',compact('users'));
    }

    public function store(AddTaskRequest $request){
        
        Task::create([
            'title'=>request()->title,
            'description'=>request()->description,
            'user_id'=>request()->user
        ]);
        
        return redirect()->route('dashboard.create')->with("success", "task created successfully");
    }

    public function update(){

    }

    public function delete(Task $task){
        $task->delete();
        return back()->with('success', 'Task deleted successfully');
    }
}
