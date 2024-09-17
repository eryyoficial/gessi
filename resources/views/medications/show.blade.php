@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Medication Details</h1>
        <p><strong>Name:</strong> {{ $medication->name }}</p>
        <p><strong>Dosage:</strong> {{ $medication->dosage }}</p>
        <p><strong>Schedule:</strong> {{ $medication->schedule }}</p>
        <a href="{{ route('medications.edit', $medication->id) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('medications.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
