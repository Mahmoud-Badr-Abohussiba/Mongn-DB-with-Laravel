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

                <div class="text-right">
                    <a href="{{ route('grandsons.create') }}">Create Grandson</a>
                </div>

            <div class="table-responsive">
                <table class="table">

                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Father Name</th>
                        <th>Birth Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>

                    @forelse($grandsons as $grandson)
                        <tr>
                            <td>{{$grandson->id}}</td>
                            <td>{{$grandson->name}}</td>
                            <td>{{$grandson->son->name}}</td>
                            <td>{{$grandson->birth_date}}</td>
                            <td> <a href="{{route('grandsons.edit', $grandson->id)}}" class="btn btn-primary btn-sm">Edit</a> </td>
                            <td>
                                <form action="{{url('grandsons',$grandson->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="delete" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                        </tr>

                    @empty

                        <tr>
                            <td colspan="4">No $grandson Found</td>
                        </tr>
                    @endforelse
                    </tbody>
                    <tfoot>
{{--                     have a problem--}}
                    <tr>
                        <td colspan="4">
                            {!! $grandsons->links() !!}
                        </td>
                    </tr>

                    </tfoot>
                </table>
            </div>
        </div>
    </div>

@endsection
