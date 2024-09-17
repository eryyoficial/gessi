@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Visits</h1>
        <a href="{{ route('visits.create') }}" class="btn btn-primary mb-3">Add New Visit</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Visitor</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($visits as $visit)
                    <tr>
                        <td>{{ $visit->visitor_name }}</td>
                        <td>{{ $visit->visit_date->format('d/m/Y') }}</td>
                        <td>{{ $visit->visit_time->format('H:i') }}</td>
                        <td>
                            <a href="{{ route('visits.show', $visit->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('visits.edit', $visit->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('visits.destroy', $visit->id) }}" method="POST" style="display:inline;">
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
