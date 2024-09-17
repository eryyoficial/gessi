@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dashboard</h1>
        <!-- Add widgets and charts here -->
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Residents</h5>
                        <p class="card-text">{{ $totalResidents }}</p>
                    </div>
                </div>
            </div>
            <!-- Add more cards for different stats -->
        </div>
    </div>
@endsection
