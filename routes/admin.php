<?php

use App\Http\Controllers\Admin\AdminHomeController;


Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('dashboard.home');