@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header d-flex">
            {{ __('Dashboard') }}
            <div class="mx-xl-auto">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('sons') }}">Sons</a>
                <a href="{{ route('grandsons') }}">GrandSons</a>
            </div>
        </div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            {{ __('You are logged in!') }}
        </div>
    </div>

@endsection
