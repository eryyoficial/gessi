@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Resident</h1>
        <form action="{{ route('residents.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" name="dob" id="dob" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="medical_conditions">Medical Conditions</label>
                <textarea name="medical_conditions" id="medical_conditions" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('residents.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
