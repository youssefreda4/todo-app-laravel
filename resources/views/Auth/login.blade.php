@extends('front.layouts.master')
@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                <x-error></x-error>
                <x-success></x-success>
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="text-center mb-4">Login to Your Account</h4>
                        <form action="{{ route('auth.login') }}" method="POST" novalidate>

                            @csrf

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


                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary w-100 py-2">
                                Login
                            </button>

                        </form>
                        <!-- Signup Link -->
                        <div class="text-center mt-3">
                            <small>Don't have an account? <a href="{{ route('auth.register') }}">Sign up</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
