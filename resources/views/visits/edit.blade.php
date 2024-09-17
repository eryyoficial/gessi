@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Donations</h1>
        <a href="{{ route('donations.create') }}" class="btn btn-primary mb-3">Add New Donation</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Donor</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($donations as $donation)
                    <tr>
                        <td>{{ $donation->donor_name }}</td>
                        <td>{{ $donation->amount }}</td>
                        <td>{{ $donation->donation_date->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('donations.show', $donation->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('donations.edit', $donation->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('donations.destroy', $donation->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
