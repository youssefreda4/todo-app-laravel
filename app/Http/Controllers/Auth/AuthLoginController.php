<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthLoginController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }

    public function store(LoginRequest $request)
    {

        $data = $request->validated();

        if (Auth::guard('admin')->attempt($data)) {
            return to_route('dashboard.home');
        }
        if (Auth::guard('web')->attempt($data)) {
            return to_route('home');
        }

        return back()->withErrors(['error' => 'Incorrect email or password']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
