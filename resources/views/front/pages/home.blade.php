@extends('front.layouts.master')
@section('content')
    <div class="container my-5">
        <div class="row">
            <!-- Users Section -->
            <div class="col-12 mb-4">
                <h1 class="mb-4">Users</h1>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        John Doe
                        <span class="badge bg-success rounded-pill">5 Tasks</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Jane Smith
                        <span class="badge bg-success rounded-pill">3 Tasks</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Mark Johnson
                        <span class="badge bg-success rounded-pill">8 Tasks</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Emily Davis
                        <span class="badge bg-success rounded-pill">4 Tasks</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Michael Brown
                        <span class="badge bg-success rounded-pill">6 Tasks</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Sarah Wilson
                        <span class="badge bg-success rounded-pill">2 Tasks</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        David Lee
                        <span class="badge bg-success rounded-pill">7 Tasks</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Alice Clark
                        <span class="badge bg-success rounded-pill">5 Tasks</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        James Martin
                        <span class="badge bg-success rounded-pill">9 Tasks</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Emma Walker
                        <span class="badge bg-success rounded-pill">1 Task</span>
                    </li>
                </ul>
            </div>

            <!-- Tasks Section -->
            <div class="col-12">
                <h1 class="mb-4">Recent Tasks</h1>
                <table class="table border rounded">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Task</th>
                            <th>User</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Design Homepage</td>
                            <td>John Doe</td>
                            <td><span class="badge bg-warning">In Progress</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Write Blog Post</td>
                            <td>Jane Smith</td>
                            <td><span class="badge bg-success">Completed</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Fix Login Bug</td>
                            <td>Mark Johnson</td>
                            <td><span class="badge bg-danger">Pending</span></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Update Contact Form</td>
                            <td>John Doe</td>
                            <td><span class="badge bg-warning">In Progress</span></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Optimize SEO</td>
                            <td>Jane Smith</td>
                            <td><span class="badge bg-success">Completed</span></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Integrate Payment Gateway</td>
                            <td>Mark Johnson</td>
                            <td><span class="badge bg-danger">Pending</span></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Create User Profile Page</td>
                            <td>John Doe</td>
                            <td><span class="badge bg-warning">In Progress</span></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Design Dashboard UI</td>
                            <td>Jane Smith</td>
                            <td><span class="badge bg-success">Completed</span></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Fix Signup Form Bug</td>
                            <td>Mark Johnson</td>
                            <td><span class="badge bg-danger">Pending</span></td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Improve Mobile Responsiveness</td>
                            <td>John Doe</td>
                            <td><span class="badge bg-warning">In Progress</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
