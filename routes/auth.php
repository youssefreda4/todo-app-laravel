<?php

use App\Http\Controllers\Auth\AuthLoginController;
use App\Http\Controllers\Auth\RegistrationController;

Route::get('login', [AuthLoginController::class, 'login'])->name('auth.login');
Route::post('login', [AuthLoginController::class, 'store'])->name('auth.login');
Route::get('register', [RegistrationController::class, 'index'])->name('auth.register');
Route::post('register', [RegistrationController::class, 'store'])->name('auth.store');
Route::post('logout', [AuthLoginController::class, 'logout'])->name('auth.logout');
