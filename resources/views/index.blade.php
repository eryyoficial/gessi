@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Visits</h1>
    <a href="{{ route('visits.create') }}" class="btn btn-primary">Schedule New Visit</a>

    <table class="table">
        <thead>
            <tr>
                <th>Visitor Name</th>
                <th>Resident</th>
                <th>Scheduled Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($visits as $visit)
                <tr>
                    <td>{{ $visit->visitor_name }}</td>
                    <td>{{ $visit->resident->name }}</td>
                    <td>{{ $visit->scheduled_date }}</td>
                    <td>
                        <a href="{{ route('visits.edit', $visit->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('visits.destroy', $visit->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
