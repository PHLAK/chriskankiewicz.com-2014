@extends('layouts.no-header')

@section('content')

    <div class="container">

        <div class="card error-card">
            <div class="card-body">

                <div class="error-hero text-center">
                    <div class="error-number">404</div>
                    <div class="error-text">Page Not Found</div>
                </div>

                <div class="text-center">
                    <a href="{{ route('root') }}" class="btn btn-success btn-lg">Return to Homepage</a>
                </div>

            </div>
        </div>

    </div>

@endsection
