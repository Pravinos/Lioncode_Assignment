@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My Account') }}</div>
                <br>
                <h1>Welcome to My Account</h1>
                <p>Your unique token: {{ $token }}</p>
                <a href="{{ url('viewcompanies') }}" class="btn btn-primary mx-2 rounded-full shadow-md px-4 py-2 text-4xl">View Companies</a>
            </div>
        </div>
    </div>
</div>
@endsection
