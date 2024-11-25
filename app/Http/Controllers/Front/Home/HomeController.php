<?php

namespace App\Http\Controllers\Front\home;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Task;

class HomeController extends Controller
{

    public function index()
    {
        $users = User::limit(10)->get();
        $tasks = Task::with('user')->limit(10)->get();
        return view('front.pages.home',compact('users','tasks'));
    }
}
