@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Donation</h1>
        <form action="{{ route('donations.update', $donation->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="donor_name">Donor Name</label>
                <input type="text" name="donor_name" id="donor_name" class="form-control" value="{{ $donation->donor_name }}" required>
            </div>
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" name="amount" id="amount" class="form-control" value="{{ $donation->amount }}" required>
            </div>
            <div class="form-group">
                <label for="donation_date">Date</label>
                <input type="date" name="donation_date" id="donation_date" class="form-control" value="{{ $donation->donation_date->format('Y-m-d') }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('donations.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
