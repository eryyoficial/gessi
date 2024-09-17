@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Donation Details</h1>
        <p><strong>Donor:</strong> {{ $donation->donor_name }}</p>
        <p><strong>Amount:</strong> {{ $donation->amount }}</p>
        <p><strong>Date:</strong> {{ $donation->donation_date->format('d/m/Y') }}</p>
        <a href="{{ route('donations.edit', $donation->id) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('donations.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
