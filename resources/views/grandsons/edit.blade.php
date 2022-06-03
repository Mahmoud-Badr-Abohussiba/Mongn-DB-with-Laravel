@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header d-flex">
            {{ __('Create Grandson') }}
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

            <form action="{{route('grandsons.store')}}" method="post">
                @csrf

                <div class="form-group">
                    <label for="son_id">Father</label>
                    <select name="son_id" class="form-control">
                        <option>Select Father</option>
                        @forelse($sons as $son)
                            <option value="{{$son->id}}"> {{$son->name}} </option>
                        @empty

                        @endforelse

                    </select>

                    {{--                 @error('son_id') <span class="text-danger">{{$message}}</span>--}}
                </div>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control">
                    {{--                 @error('name') <span class="text-danger">{{$message}}</span>--}}
                </div>

                <div class="form-group">
                    <label for="birth_date">Birth Date</label>
                    <input type="text" name="birth_date" value="{{old('birth_date')}}" class="form-control">
                    {{--                    @error('birth_date') <span class="text-danger">{{$message}}</span>--}}
                </div>

                <div class="form-group" style="padding-top: 20px">
                    <button type="submit" name="submit" class="btn btn-primary">Add Grandson</button>
                </div>
            </form>


        </div>
    </div>
@endsection
