@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Activity</h1>
        <form action="{{ route('activities.update', $activity->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $activity->name }}" required>
            </div>
            <div class="form-group">
                <label for="scheduled_time">Scheduled Time</label>
                <input type="datetime-local" name="scheduled_time" id="scheduled_time" class="form-control" value="{{ $activity->scheduled_time->format('Y-m-d\TH:i') }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control">{{ $activity->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('activities.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
