@extends('layouts.admin')

@section('title')
    Participants
@endsection

@section('css')
@endsection
@section('content')
<div class="container mt-5">
    <h1>Add New Staff</h1>

    <!-- Form to Add Staff -->
    <form action="{{ route('staff.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" name="position" id="position" class="form-control" required>
        </div>


        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" id="age" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="date" name="start_date" id="start_date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="salary">Salary</label>
            <input type="text" name="salary" id="salary" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Save Staff</button>
    </form>
</div>
@endsection

@section('js')
@endsection