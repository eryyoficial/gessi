@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Medication</h1>
        <form action="{{ route('medications.update', $medication->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $medication->name }}" required>
            </div>
            <div class="form-group">
                <label for="dosage">Dosage</label>
                <input type="text" name="dosage" id="dosage" class="form-control" value="{{ $medication->dosage }}" required>
            </div>
            <div class="form-group">
                <label for="schedule">Schedule</label>
                <input type="text" name="schedule" id="schedule" class="form-control" value="{{ $medication->schedule }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('medications.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
