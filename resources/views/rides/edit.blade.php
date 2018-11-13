@extends('layouts.app') 
@section('title', 'Edit your Ride') 
@section('content')
<div class="container mx-auto mt-12">

    <div class="font-sans text-4xl text-green font-light mx-4 mb-4 border-b">
        Edit a Ride
    </div>


    <div class="mx-4">
        <form method="POST" action="/rides/{{ $ride->id }}" class="w-full max-w-sm">
            @method('patch') @csrf
            <div class="flex items-center border-b border-b-2 py-2">
                <input class="{{ $errors->has('title') ? 'is-danger' : '' }} 
                        appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 leading-tight focus:outline-none"
                    type="text" name="title" value="{{ old('title', $ride->title) }}" placeholder="The title of your ride.."
                    autofocus required>
            </div>

            <div class="flex items-center border-b border-b-2 py-2">
                <input class="appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 leading-tight focus:outline-none"
                    type="text" name="date" value="{{ old('date') ?? $ride->date }}" placeholder="date" required>
            </div>

            <div class="flex items-center border-b border-b-2 py-2">
                <input class="appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 leading-tight focus:outline-none"
                    type="text" name="distance" value="{{ old('distance') ?? $ride->distance }}" placeholder="distance" required>
            </div>

            <div class="flex items-center border-b border-b-2 py-2">
                <input class="appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 leading-tight focus:outline-none"
                    type="text" name="duration" value="{{ old('duration') ?? $ride->duration }}" placeholder="duration" required>
            </div>

            <div class="flex items-center border-b border-b-2 py-2">
                <input class="appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 leading-tight focus:outline-none"
                    type="text" name="type" value="{{ old('type') ?? $ride->type }}" placeholder="type" required>
            </div>

            <div class="flex items-center border-b border-b-2 py-2">
                <input class="appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 leading-tight focus:outline-none"
                    type="text" name="weather" value="{{ old('weather') ?? $ride->weather }}" placeholder="weather">
            </div>

            <div class="flex items-center border-b border-b-2 py-2">
                <input class="appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 leading-tight focus:outline-none"
                    type="text" name="link_strava" value="{{ old('link_strava') ?? $ride->link_strava }}" placeholder="link_strava">
            </div>

            <div class="flex items-center border-b border-b-2 py-2">
                <input class="appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 leading-tight focus:outline-none"
                    type="text" name="link_garmin" value="{{ old('link_garmin') ?? $ride->link_garmin }}" placeholder="link_garmin">
            </div>

            <div class="flex items-center border-b border-b-2 py-2">
                <textarea class="appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 leading-tight focus:outline-none"
                    name="remarks" placeholder="remarks">{{ old('remarks') ?? $ride->remarks }}</textarea>
            </div>

            <div class="flex items-center border-b border-b-2 py-2">
                <button type="submit">Update ride</button>
            </div>
        </form>

        <form method="POST" action="/rides/{{ $ride->id }}">
            @method('delete') @csrf
            <div class="flex items-center border-b border-b-2 py-2">
                <button type="submit">Delete ride</button>
            </div>
        </form>

        @if($errors->any())
        <div>
            <ul>
                @foreach( $errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif



    </div>
</div>
@endsection