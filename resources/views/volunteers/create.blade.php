@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Volunteer</h1>
        <form action="{{ route('volunteers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <input type="text" name="role" id="role" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('volunteers.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
