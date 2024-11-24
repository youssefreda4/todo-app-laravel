@extends('front.layouts.master')
@section('content')
<div class="bg-dark text-white  mt-2 p-4">
    <h2 class="text-center mb-3 fw-bold">All Tasks</h2>
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
                        <form action="#" method="POST"
                            class="d-flex align-items-center justify-content-between p-2 border rounded bg-light shadow-sm">
                            <!-- Select Status -->
                            <div class="form-group mt-3" style="flex-grow: 1;">
                                <select name="status" class="form-select form-select-sm">
                                    <option value="completed">✅ Completed</option>
                                    <option value="in progress">🔄 In Progress</option>
                                    <option value="pending">⏳ Pending</option>
                                </select>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-success  align-items-center">
                                Save
                            </button>
                        </form>
                    </td>

                </tr>
                <!-- Additional tasks can go here -->
            </tbody>
        </table>
    </div>
@endsection
