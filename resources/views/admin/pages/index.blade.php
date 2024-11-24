@extends('admin.layouts.master')

@section('content')
    <!-- Main Content -->
    <div class="content col-8" style="margin-left: 380px; height: 100vh;">
        <div class="container my-5">
            <!-- To-Do Form -->
            <div class="col-12 mx-auto">
                <x-error></x-error>
                <x-success></x-success>
                <form action="#" method="POST" class="form border rounded p-4 shadow" novalidate>
                    <h4 class="text-center mb-4">Add a New Task</h4>
                    
                    <!-- Task Title -->
                    <input type="text" name="title" class="form-control my-3 border " 
                           placeholder="Task Title" required>
                    
                    <!-- Select User -->
                    <select name="user" class="form-control my-3 border" required>
                        <option value="" disabled selected>Assign to User</option>
                        <option value="1">John Doe</option>
                        <option value="2">Jane Smith</option>
                        <option value="3">Mark Johnson</option>
                        <option value="4">Emily Davis</option>
                    </select>
                    
                    <!-- Task Description -->
                    <textarea name="description" class="form-control my-3 border" 
                              placeholder="Task Description" rows="2" required></textarea>
                    
                    <!-- Submit Button -->
                    <input type="submit" class="btn btn-primary w-100" value="Add Task">
                </form>
                
            </div>

            <!-- Task Table -->
            <div class="col-12 mt-5">
                <table class="table table-bordered text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Created_at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>New Task</td>
                            <td>New Task</td>
                            <td>New Task</td>
                            <td>New Task</td>
                            <td>
                                <a href="#" class="btn btn-danger d-block mb-2">
                                    <i class="fa-solid fa-trash-can"></i> Delete
                                </a>
                                <a href="#" class="btn btn-info d-block">
                                    <i class="fa-solid fa-edit"></i> Edit
                                </a>
                            </td>

                        </tr>
                        <!-- Additional tasks can go here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
