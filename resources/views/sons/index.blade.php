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
                       <th>Sons Count</th>
                       <th>Birth Date</th>
                   </tr>
                   </thead>
                   <tbody>

                   @forelse($sons as $son)
                        <tr>
                            <td>{{$son->id}}</td>
                            <td>{{$son->name}}</td>
                            <td><a href=" {{route('grandsons',['son_id'=>$son->id])}}">
                                    {{$son->grandsons->count() ?? 0}}
                                </a></td>
                            <td>{{$son->birth_date}}</td>
                        </tr>

                   @empty

                       <tr>
                           <td colspan="4">No Sons Found</td>
                       </tr>
                   @endforelse

                   </tbody>
               </table>
           </div>
        </div>
    </div>

@endsection
