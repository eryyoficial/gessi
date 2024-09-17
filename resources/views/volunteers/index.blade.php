@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Volunteers</h1>
        <a href="{{ route('volunteers.create') }}" class="btn btn-primary mb-3">Add New Volunteer</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($volunteers as $volunteer)
                    <tr>
                        <td>{{ $volunteer->name }}</td>
                        <td>{{ $volunteer->role }}</td>
                        <td>
                            <a href="{{ route('volunteers.show', $volunteer->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('volunteers.edit', $volunteer->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('volunteers.destroy', $volunteer->id) }}" method="POST" style="display:inline;">
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
