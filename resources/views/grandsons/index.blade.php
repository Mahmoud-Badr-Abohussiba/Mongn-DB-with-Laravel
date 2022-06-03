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

            <div class="table-responsive">
                <table class="table">

                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Birth Date</th>
                    </tr>
                    </thead>
                    <tbody>

                    @forelse($grandsons as $grandson)
                        <tr>
                            <td>{{$grandson->id}}</td>
                            <td>{{$grandson->name}}</td>
                            <td>{{$grandson->birth_date}}</td>
                        </tr>

                    @empty

                        <tr>
                            <td colspan="4">No $grandson Found</td>
                        </tr>
                    @endforelse
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="4">
                            {!! $grandsons->links() !!}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            {{'footer'}}
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

@endsection
