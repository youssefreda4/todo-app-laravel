@extends('admin.layouts.master')

@section('content')
    <!-- Main Content -->
    <div class="content" style="margin-left: auto; margin-right: 120px; ">
        <div class="container py-5">
            <x-error></x-error>
            <x-success></x-success>
            <!-- Task Table -->
            <div class="card shadow border-0">
                <div class="card-header bg-secondary text-white text-center">
                    <h4>Task List</h4>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped  text-center mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>User</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    <td>{{ $task->id }}</td>
                                    <td>{{ $task->title }}</td>
                                    <td style="width: 350px;">{{ $task->description }}</td>
                                    <td class="text-center">
                                        <span
                                            class="badge bg-{{ $task->status === 'completed' ? 'success' : ($task->status === 'pending' ? 'danger' : 'warning') }} p-3 fs-5  w-100">
                                            {{ $task->status }}
                                        </span>
                                    </td>
                                    <td>{{ $task->user->name }}</td>
                                    <td>{{ $task->created_at->format('d M, Y') }}</td>
                                    <td>
                                        <form action="{{ route('dashboard.delete', ['task'=>$task->id]) }}" method="POST" class="d-block mb-2">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger w-100">
                                                <i class="fa-solid fa-trash-can"></i> Delete
                                            </button>
                                        </form>
                                        
                                    <a href="#" class="btn btn-info d-block">
                                        <i class="fa-solid fa-edit"></i> Edit
                                    </a>
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer d-flex justify-content-center">
                    {{ $tasks->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
