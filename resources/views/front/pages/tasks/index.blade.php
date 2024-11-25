@extends('front.layouts.master')
@section('content')
    <div class="bg-dark text-white  mt-2 p-4">
        <h2 class="text-center mb-3 fw-bold">All Tasks</h2>
    </div>
    <!-- Task Table -->
    <div class="col-12 mt-5">
        <x-error></x-error>
        <x-success></x-success>
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
                @php
                    $i = 1;
                @endphp
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $task->title }}</td>
                        <td style="width: 350px;">{{ $task->description }}</td>

                        <td class="text-center">
                            <span
                                class="badge bg-{{ $task->status === 'completed' ? 'success' : ($task->status === 'pending' ? 'danger' : 'warning') }} p-3 fs-5  w-100">
                                {{ $task->status }}
                            </span>
                        </td>
                        <td>{{ $task->created_at }}</td>
                        <td>
                            <form action="{{ route('tasks.update', ['task' => $task->id]) }}" method="POST"
                                class="d-flex align-items-center justify-content-between p-2 border rounded bg-light shadow-sm">
                                @csrf
                                @method('PUT')
                                <!-- Select Status -->
                                <div class="form-group mt-3" style="flex-grow: 1;">
                                    <select name="status" class="form-select form-select-sm">
                                        <option value="completed" {{ $task->status == 'completed' ? 'selected' : '' }}>✅
                                            Completed</option>
                                        <option value="in progress" {{ $task->status == 'in progress' ? 'selected' : '' }}>
                                            🔄 In Progress</option>
                                        <option value="pending" {{ $task->status === 'pending' ? 'selected' : '' }}>⏳
                                            Pending</option>
                                    </select>

                                </div>

                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-success  align-items-center">
                                    Save
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <!-- Additional tasks can go here -->
            </tbody>
        </table>
    </div>
@endsection
