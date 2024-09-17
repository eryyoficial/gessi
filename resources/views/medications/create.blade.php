@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Medication</h1>
        <form action="{{ route('medications.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="dosage">Dosage</label>
                <input type="text" name="dosage" id="dosage" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="schedule">Schedule</label>
                <input type="text" name="schedule" id="schedule" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('medications.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
