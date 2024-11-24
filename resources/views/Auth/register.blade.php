@extends('front.layouts.master')
@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="text-center mb-4">Create an Account</h4>
                        <x-error></x-error>
                        <x-success></x-success>
                        <form action="{{ route('auth.store') }}" method="POST" novalidate >

                            @csrf
                            @method('post')

                            <!-- Full Name -->
                            <div class="form-floating mb-3">
                                <label for="fullName">Full Name</label>
                                <input type="text" class="form-control" id="fullName" name="name"
                                    placeholder="Full Name" required>
                            </div>

                            <!-- Email Address -->
                            <div class="form-floating mb-3">
                                <label for="emailAddress">Email Address</label>
                                <input type="email" class="form-control" id="emailAddress" name="email"
                                    placeholder="Email Address" required>
                            </div>

                            <!-- Password -->
                            <div class="form-floating mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password" required>
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-floating mb-3">
                                <label for="confirmPassword">Confirm Password</label>
                                <input type="password" class="form-control" id="confirmPassword" name="password_confirmation"
                                    placeholder="Confirm Password" required>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary w-100 py-2">
                                Sign Up
                            </button>

                        </form>
                        <!-- Signup Link -->
                        <div class="text-center mt-3">
                            <small>Have an account? <a href="{{ route('auth.login') }}">Login</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
