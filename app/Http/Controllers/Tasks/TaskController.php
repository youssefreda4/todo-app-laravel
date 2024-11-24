<?php

namespace App\Http\Controllers\tasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('front.pages.tasks.index');
    }
}
