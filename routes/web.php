<?php

use App\Http\Controllers\Auth\RegistrationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\home\HomeController;
use App\Http\Controllers\Front\tasks\TaskController;

Route::get('/',[HomeController::class, 'index'])->name('home');

Route::get('/tasks',[TaskController::class, 'index'])->name('tasks.view');
Route::put('/tasks/{task}',[TaskController::class, 'update'])->name('tasks.update');


require_once (__DIR__.'/auth.php');
require_once (__DIR__.'/admin.php');
