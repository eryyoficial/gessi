@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Visit</h1>
        <form action="{{ route('visits.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="visitor_name">Visitor Name</label>
                <input type="text" name="visitor_name" id="visitor_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="visit_date">Date</label>
                <input type="date" name="visit_date" id="visit_date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="visit_time">Time</label>
                <input type="time" name="visit_time" id="visit_time" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('visits.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
