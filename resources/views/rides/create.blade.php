@extends('layouts.app') 
@section('title', 'Rides') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a new ride</div>

                <div class="card-body">
                    <form method="POST" action="/rides">
                        @csrf
                        <div>
                            <input type="text" name="title" value="{{ old('title') }}" class="{{ $errors->has('title') ? 'is-danger' : '' }}" placeholder="Ride title here.."
                                required>
                        </div>

                        <div>
                            <input type="text" name="date" value="{{ old('date') }}" placeholder="date" required>
                        </div>

                        <div>
                            <input type="text" name="distance" value="{{ old('distance') }}" placeholder="distance" required>
                        </div>

                        <div>
                            <input type="text" name="duration" value="{{ old('duration') }}" placeholder="duration" required>
                        </div>

                        <div>
                            <input type="text" name="type" value="{{ old('type') }}" placeholder="type" required>
                        </div>

                        <div>
                            <input type="text" name="weather" value="{{ old('weather') }}" placeholder="weather">
                        </div>

                        <div>
                            <input type="text" name="link_strava" value="{{ old('link_strava') }}" placeholder="link_strava">
                        </div>

                        <div>
                            <input type="text" name="link_garmin" value="{{ old('link_garmin') }}" placeholder="link_garmin">
                        </div>

                        <div>
                            <textarea name="remarks" value="{{ old('remarks') }}" placeholder="remarks"></textarea>
                        </div>

                        <div>
                            <button type="submit">Submit</button>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection