@extends('layouts.app') 
@section('title', 'Rides') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Rides</div>

                <div class="card-body">
                    @foreach ($rides as $ride)
                    <li>
                        <a href="/rides/{{ $ride->id }}">{{ $ride->date }} | {{ $ride->title }}</a> <a href="/rides/{{ $ride->id }}/edit">edit</a>
                    </li>
                    @endforeach
                </div>

                <div class="card-header">Create <a href="/rides/create/">new ride</a></div>
            </div>
        </div>
    </div>
</div>
@endsection