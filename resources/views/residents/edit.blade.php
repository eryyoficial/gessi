@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Resident</h1>
        <form action="{{ route('residents.update', $resident->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $resident->name }}" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" name="dob" id="dob" class="form-control" value="{{ $resident->dob->format('Y-m-d') }}" required>
            </div>
            <div class="form-group">
                <label for="medical_conditions">Medical Conditions</label>
                <textarea name="medical_conditions" id="medical_conditions" class="form-control">{{ $resident->medical_conditions }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('residents.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
