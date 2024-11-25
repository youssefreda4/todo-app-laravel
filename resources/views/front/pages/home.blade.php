@extends('front.layouts.master')
@section('content')
    <div class="container my-5">
        <div class="row">
            <!-- Users Section -->
            <div class="col-12 mb-4">
                <h1 class="mb-4">Users</h1>
                <ul class="list-group">
                    @foreach ($users as $user)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $user->name }}
                            <span class="badge bg-success rounded-pill p-3 fs-5" style="width: 220px;">5 Tasks</span>


                        </li>
                    @endforeach

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
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($tasks as $task)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $task->title }}</td>
                                <td>{{ $task->user->name }}</td>
                                <td class="text-center">
                                    <span
                                        class="badge bg-{{ $task->status === 'completed' ? 'success' : ($task->status === 'pending' ? 'danger' : 'warning') }} p-3 fs-5  w-100">
                                        {{ $task->status }}
                                    </span>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
