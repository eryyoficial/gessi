@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Activity</h1>
        <form action="{{ route('activities.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="scheduled_time">Scheduled Time</label>
                <input type="datetime-local" name="scheduled_time" id="scheduled_time" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('activities.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
