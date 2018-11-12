<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name', 'Fitness Tracker'))</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="leading-normal">
    <div id="app" class="h-screen flex flex-col">
        <nav class="bg-white border-b border-green h-16 flex items-center">
            <div class="flex justify-between container mx-auto items-center">
                <div class="text-grey-darkest text-2xl font-thin mx-4">
                    <a href="{{ url('/') }}" class="no-underline text-grey-darkest hover:text-green">{{ config('app.name', 'Fitness Tracker') }}</a>
                </div>

                <div class="flex">
                    @guest
                    <div class="text-grey-darkest text-lg font-thin mx-4">
                        <a href="{{ route('login') }}" class="no-underline text-grey-darkest hover:text-green">Login</a>
                    </div>

                    @if (Route::has('register'))
                    <div class="text-grey-darkest text-lg font-thin mx-4">
                        <a href="{{ route('register') }}" class="no-underline text-grey-darkest hover:text-green">Register</a>
                    </div>
                    @endif @else
                    <div class="text-grey-darkest text-lg font-thin mx-4">
                        {{ Auth::user()->name }}
                    </div>

                    <div class="text-grey-darkest text-lg font-thin mx-4">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" class="no-underline text-grey-darkest hover:text-green">Log out</a>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @endguest
                </div>
            </div>
        </nav>

        <main class="h-full">
            @yield('content')
        </main>
    </div>
</body>

</html>