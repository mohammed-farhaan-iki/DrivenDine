@extends('layouts.admin')

@section('title')
    Participants
@endsection

@section('css')
@endsection
@section('content')
<div class="container mt-5">
    <h1>Edit Staff</h1>

    <!-- Form to Edit Staff -->
    <form action="{{ route('staff.update', $staff->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $staff->name) }}" required>
        </div>

        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" name="position" id="position" class="form-control" value="{{ old('position', $staff->position) }}" required>
        </div>


        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" id="age" class="form-control" value="{{ old('age', $staff->age) }}" required>
        </div>

        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="date" name="start_date" id="start_date" class="form-control" value="{{ old('start_date', $staff->start_date) }}" required>
        </div>

        <div class="form-group">
            <label for="salary">Salary</label>
            <input type="text" name="salary" id="salary" class="form-control" value="{{ old('salary', $staff->salary) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Staff</button>
    </form>
</div>
@endsection

@section('js')
@endsection