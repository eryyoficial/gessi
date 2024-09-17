@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Resident Details</h1>
        <p><strong>Name:</strong> {{ $resident->name }}</p>
        <p><strong>Date of Birth:</strong> {{ $resident->dob->format('d/m/Y') }}</p>
        <p><strong>Medical Conditions:</strong> {{ $resident->medical_conditions }}</p>
        <a href="{{ route('residents.edit', $resident->id) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('residents.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
