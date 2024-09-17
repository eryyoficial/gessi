@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Volunteer Details</h1>
        <p><strong>Name:</strong> {{ $volunteer->name }}</p>
        <p><strong>Role:</strong> {{ $volunteer->role }}</p>
        <a href="{{ route('volunteers.edit', $volunteer->id) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('volunteers.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
