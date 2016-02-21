@extends('layouts.error')

@section('content')

    <div class="container">

        <div class="card">
            <div class="error-card card-body">

                <div class="error-hero text-center">
                    <div class="error-number">503</div>
                    <div class="error-text">Service Unavailable</div>
                </div>

                <div class="text-center">
                    <a href="{{ route('root') }}" class="btn btn-success btn-lg">Back to Homepage</a>
                </div>

            </div>
        </div>

    </div>

@endsection
