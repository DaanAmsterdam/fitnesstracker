<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Fitness Tracker</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="flex justify-center items-center relative h-screen font-sans font-thin">
        @if (Route::has('login'))
        <div class="absolute pin-t pin-r mt-5 text-grey-darker uppercase text-xs font-medium tracking-superwide">
            @auth
            <a href="{{ url('/home') }}" class="text-grey-darker no-underline pr-8">Home</a> @else
            <a href="{{ route('login') }}" class="text-grey-darker no-underline pr-8">Login</a> @if (Route::has('register'))
            <a href="{{ route('register') }}" class="text-grey-darker no-underline pr-8">Register</a> @endif @endauth
        </div>
        @endif

        <div class="text-center">
            <div class=" text-7xl text-grey-darker mb-8">
                Fitness Tracker
            </div>

            <div class="text-grey-darker uppercase text-xs font-medium tracking-superwide">
                <a href="/rides/" class="text-grey-darker no-underline pr-8">Rides</a>
                <a href="/yoga/" class="text-grey-darker no-underline pr-8">Yoga</a>
                <a href="/workout/" class="text-grey-darker no-underline pr-8">Workout</a>
            </div>
        </div>
    </div>
</body>

</html>