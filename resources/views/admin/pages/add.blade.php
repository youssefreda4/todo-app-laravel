@extends('admin.layouts.master')

@section('content')
    <!-- Main Content -->
    <div class="content" style="margin: auto; margin-top: 120px;px">
        <div class="container py-5">
            <!-- To-Do Form -->
            <div class="col-12 card shadow border-5">
               
                <div class="card-body">
                    <x-error></x-error>
                    <x-success></x-success>
                    <form action="{{ route('dashboard.store') }}" method="POST"  novalidate>
                        @csrf
    
                        <!-- Task Title -->
                        <input type="text" name="title" class="form-control my-3 border " placeholder="Task Title" required>
    
                        <!-- Select User -->
                        <select name="user" class="form-control my-3 border" required>
                            <option value="" selected disabled>Assign to User</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
    
                        <!-- Task Description -->
                        <textarea name="description" class="form-control my-3 border" placeholder="Task Description" rows="2" required></textarea>
    
                        <!-- Submit Button -->
                        <input type="submit" class="btn btn-primary w-100" value="Add Task">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
