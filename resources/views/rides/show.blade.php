@extends('layouts.app') 
@section('title', 'Rides') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">The ride</div>

                <div class="card-body">
                    <div>Title: {{ $ride->title }}</div>
                    <div>Date: {{ $ride->date }}</div>
                    <div>Distance: {{ $ride->distance }}</div>
                    <div>Duration: {{ $ride->duration }}</div>
                    <div>Type: {{ $ride->type }}</div>
                    <div>Weather: {{ $ride->weather }}</div>
                    <div>Strava: <a href="{{ $ride->link_strava }}">{{ $ride->link_strava }}</a></div>
                    <div>Garmin: <a href="{{ $ride->link_garmin }}">{{ $ride->link_garmin }}</a></div>
                    <div>Remarks: {{ $ride->remarks }}</div>
                </div>

                <div class="card-body">
                    <a href="/rides/{{ $ride->id }}/edit">edit</a>
                </div>

                <div class="card-header">Back to <a href="/rides/">rides overview</a></div>
            </div>
        </div>
    </div>
</div>
@endsection