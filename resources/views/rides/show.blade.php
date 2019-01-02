@extends('layouts.app') 
@section('title', 'View your Ride') 
@section('content')
<div class="container mx-auto mt-12">

    <div class="flex justify-between items-center font-sans text-4xl text-green font-light mx-4 mb-4 border-b">
        <div>{{ $ride->title }}</div>
        <a class="text-xl no-underline text-green" href="/rides/{{ $ride->id }}/edit">edit</a>
    </div>

    <div class="m-4 pb-4 border-b">
        <div>Date: {{ $ride->date->format('d M Y') }}</div>
        <div>Distance: {{ $ride->distance }}</div>
        <div>Duration: {{ $ride->duration }}</div>
        <div>Type: {{ $ride->type }}</div>
        <div>Weather: {{ $ride->weather }}</div>
        <div>Strava: <a class="no-underline text-green" href="{{ $ride->link_strava }}">{{ $ride->link_strava }}</a></div>
        <div>Garmin: <a class="no-underline text-green" href="{{ $ride->link_garmin }}">{{ $ride->link_garmin }}</a></div>
        <div>Remarks: {{ $ride->remarks }}</div>
    </div>

    <div class="m-4 pb-4">
        Tags:
        @foreach ($ride->tags as $tag)
            <span>{{ $tag->name }}</span>
        @endforeach

    </div>

    <div class="mx-4">Back to <a class="no-underline text-green" href="/rides/">my Rides</a></div>
</div>
@endsection