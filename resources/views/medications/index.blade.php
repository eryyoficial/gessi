@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Medications</h1>
        <a href="{{ route('medications.create') }}" class="btn btn-primary mb-3">Add New Medication</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Dosage</th>
                    <th>Schedule</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($medications as $medication)
                    <tr>
                        <td>{{ $medication->name }}</td>
                        <td>{{ $medication->dosage }}</td>
                        <td>{{ $medication->schedule }}</td>
                        <td>
                            <a href="{{ route('medications.show', $medication->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('medications.edit', $medication->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('medications.destroy', $medication->id) }}" method="POST" style="display:inline;">
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
