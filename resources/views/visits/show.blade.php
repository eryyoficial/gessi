@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Visit Details</h1>
        <p><strong>Visitor:</strong> {{ $visit->visitor_name }}</p>
        <p><strong>Date:</strong> {{ $visit->visit_date->format('d/m/Y') }}</p>
        <p><strong>Time:</strong> {{ $visit->visit_time->format('H:i') }}</p>
        <a href="{{ route('visits.edit', $visit->id) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('visits.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
