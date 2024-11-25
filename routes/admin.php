<?php

use App\Http\Controllers\Admin\AdminHomeController;


Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('dashboard.home');
Route::get('/admin/task/add', [AdminHomeController::class, 'create'])->name('dashboard.create');
Route::post('/admin', [AdminHomeController::class, 'store'])->name('dashboard.store');
Route::delete('/admin/{task}', [AdminHomeController::class, 'delete'])->name('dashboard.delete');