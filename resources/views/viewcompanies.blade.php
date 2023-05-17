@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My Account') }}</div>
                <br>
                <h1>Companies :</h1>
                <br>
                @auth
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($companies as $company)
                        <tr>
                            <td>{{ $company->name }}</td>
                            <td>{{ $company->address }}</td>
                            <td>{{ $company->phone }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <p>Please log in to view the companies.</p>
                @endauth
                <br>
                <a href="{{ url('myaccount') }}" class="btn btn-primary mx-2 rounded-full shadow-md px-4 py-2 text-4xl">Return to My Account</a>
            </div>
        </div>
    </div>
</div>
@endsection
