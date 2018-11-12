@extends('layouts.app')
@section('title', 'Rides') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit a ride</div>

                <div class="card-body">
                    <form method="POST" action="/rides/{{ $ride->id }}">
                        @method('patch') @csrf
                        <div>
                            <input type="text" name="title" value="{{ old('title', $ride->title) }}" placeholder="Ride title here.." required>
                        </div>

                        <div>
                            <input type="text" name="date" value="{{ old('date') ?? $ride->date }}" placeholder="date" required>
                        </div>

                        <div>
                            <input type=" text " name="distance" value="{{ old('distance') ?? $ride->distance }}" placeholder="distance" required>
                        </div>

                        <div>
                            <input type="text" name="duration" value="{{ old('duration') ?? $ride->duration }}" placeholder="duration" required>
                        </div>

                        <div>
                            <input type=" text " name="type" value="{{ old('type') ?? $ride->type }}" placeholder="type" required>
                        </div>

                        <div>
                            <input type="text" name="weather" value="{{ old('weather') ?? $ride->weather }}" placeholder="weather">
                        </div>

                        <div>
                            <input type=" text " name="link_strava" value="{{ old('link_strava') ?? $ride->link_strava }}" placeholder="link_strava">
                        </div>

                        <div>
                            <input type="text" name="link_garmin" value="{{ old('link_garmin') ?? $ride->link_garmin }}" placeholder="link_garmin">
                        </div>

                        <div>
                            <textarea name="remarks" placeholder="remarks">{{ old('remarks') ?? $ride->remarks }}</textarea>
                        </div>

                        <div>
                            <button type="submit">Update ride</button>
                        </div>

                        @if($errors->any())
                        <div>
                            <ul>
                                @foreach( $errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </form>

                    <form method="POST" action="/rides/{{ $ride->id }}">
                        @method('delete') @csrf
                        <div>
                            <button type="submit ">Delete ride</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection