@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Donation</h1>
        <form action="{{ route('donations.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="donor_name">Donor Name</label>
                <input type="text" name="donor_name" id="donor_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" name="amount" id="amount" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="donation_date">Date</label>
                <input type="date" name="donation_date" id="donation_date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('donations.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
