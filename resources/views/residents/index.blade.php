@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Residents</h1>
        <a href="{{ route('residents.create') }}" class="btn btn-primary mb-3">Add New Resident</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Date of Birth</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($residents as $resident)
                    <tr>
                        <td>{{ $resident->name }}</td>
                        <td>{{ $resident->dob->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('residents.show', $resident->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('residents.edit', $resident->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('residents.destroy', $resident->id) }}" method="POST" style="display:inline;">
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
