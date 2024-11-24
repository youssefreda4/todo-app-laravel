<?php

use App\Http\Controllers\Auth\RegistrationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home\HomeController;
use App\Http\Controllers\tasks\TaskController;

Route::get('/',[HomeController::class, 'index'])->name('home');

Route::get('/tasks',[TaskController::class, 'index'])->name('tasks.view');


require_once (__DIR__.'/auth.php');
require_once (__DIR__.'/admin.php');
