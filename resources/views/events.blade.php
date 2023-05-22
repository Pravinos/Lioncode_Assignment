@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My Account') }}</div>
                <br>
                <h1>Events :</h1>
                <br>
                @auth
                <table>
                    <thead>
                        <tr>
                            <th>ID:</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $event)
                        <tr>
                            <td>{{ $event->id }}</td>
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
