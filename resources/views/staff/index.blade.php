@extends('layouts.admin')

@section('title')
    Staff List
@endsection

@section('content')
    <div class="container">
        <h2>Staff List</h2>

        <!-- Add Staff Button -->
        <a href="{{ route('staff.create') }}" class="btn btn-success mb-3">Add Staff</a>

        <!-- Display success flash message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <!-- Display error flash message -->
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Table to list staff members -->
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Age</th>
                    <th>Start Date</th>
                    <th>Salary</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($staffMembers as $staff)
                    <tr>
                        <td>{{ $staff->name }}</td>
                        <td>{{ $staff->position }}</td>
                        <td>{{ $staff->age }}</td>
                        <td>{{ $staff->start_date }}</td>
                        <td>₹ {{ number_format($staff->salary, 2) }}</td>
                        <td>
                            <a href="{{ route('staff.edit', $staff->id) }}" class="btn btn-primary">Edit</a>

                            <!-- Delete Button with data-id for direct deletion -->
                            <form action="{{ route('staff.destroy', $staff->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this staff?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
