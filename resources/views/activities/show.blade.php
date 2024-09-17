@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Activity Details</h1>
        <p><strong>Name:</strong> {{ $activity->name }}</p>
        <p><strong>Scheduled Time:</strong> {{ $activity->scheduled_time->format('d/m/Y H:i') }}</p>
        <p><strong>Description:</strong> {{ $activity->description }}</p>
        <a href="{{ route('activities.edit', $activity->id) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('activities.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
