
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <!-- Welcome -->
    <div class="mb-4">
        <h3>👋 Welcome, {{ Auth::user()->name }}!</h3>
        <p class="text-muted">Here is an overview of your rental management system.</p>
    </div>

    <!-- Summary Cards -->
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Rent This Month</h5>
                    <p class="card-text">৳ {{ $totalRent ?? '0' }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-info mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Tenants</h5>
                    <p class="card-text">{{ $totalTenants ?? '0' }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Flats</h5>
                    <p class="card-text">{{ $totalFlats ?? '0' }}</p>
                </div>
            </div>
        </div>
    </div>

    
</div>
@endsection
