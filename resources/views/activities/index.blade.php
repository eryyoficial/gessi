@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Activities</h1>
        <a href="{{ route('activities.create') }}" class="btn btn-primary mb-3">Add New Activity</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Scheduled Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($activities as $activity)
                    <tr>
                        <td>{{ $activity->name }}</td>
                        <td>{{ $activity->scheduled_time->format('d/m/Y H:i') }}</td>
                        <td>
                            <a href="{{ route('activities.show', $activity->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('activities.edit', $activity->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('activities.destroy', $activity->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
