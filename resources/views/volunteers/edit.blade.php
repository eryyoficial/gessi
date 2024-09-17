@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Volunteer</h1>
        <form action="{{ route('volunteers.update', $volunteer->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $volunteer->name }}" required>
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <input type="text" name="role" id="role" class="form-control" value="{{ $volunteer->role }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('volunteers.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
