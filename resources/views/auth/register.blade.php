@extends('layouts.app') 
@section('content')
<div class="container mx-auto flex flex-col px-16 w-128 border border-green-lighter shadow-login mt-24">
    <div class="mb-8 mt-24">
        <span>
                <a class="text-green-lighter text-4xl font-light tracking-tight no-underline hover:text-green" href="{{ route('login') }}">Log In</a>
        </span>
        <span class="text-green-lighter text-3xl font-light tracking-tight mx-2">
                or
        </span>
        <span class="text-green text-4xl font-semibold tracking-tight">
                Sing Up
        </span>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="text-green-light text-xs mb-1">
            Name
        </div>
        <div>
            <input id="name" type="text" name="name" value="{{ old('name') }}" class="border-b w-full text-green-light font-bold focus:outline-none focus:border-green"
                required autofocus>
        </div>
        <div class="h-10 pt-1">
            @if ($errors->has('name'))
            <span class="text-red-dark text-sm font-light">
                {{ $errors->first('name') }}
            </span>@endif
        </div>

        <div class="text-green-light text-xs mb-1">
            E-Mail Address
        </div>
        <div>
            <input id="email" type="email" name="email" value="{{ old('email') }}" class="border-b w-full text-green-light font-bold focus:outline-none focus:border-green"
                required autofocus>
        </div>
        <div class="h-10 pt-1">
            @if ($errors->has('email'))
            <span class="text-red-dark text-sm font-light">
                    {{ $errors->first('email') }}
                </span>@endif
        </div>

        <div class="text-green-light text-xs mb-1">
            Password
        </div>
        <div>
            <input id="password" type="password" name="password" class="border-b w-full text-green-light font-bold focus:outline-none focus:border-green"
                required>
        </div>

        <div class="h-10 pt-1">
            @if ($errors->has('password'))
            <span class="text-red-dark text-sm font-light">
                    {{ $errors->first('password') }}
                </span> @endif
        </div>

        <div class="text-green-light text-xs mb-1">
            Confirm Password
        </div>
        <div class="mb-12">
            <input id="password-confirm" type="password" name="password_confirmation" class="border-b w-full text-green-light font-bold focus:outline-none focus:border-green"
                required>
        </div>

        <div>
            <button type="submit" class="py-3 w-full mb-16 bg-green text-lg text-white font-semibold uppercase focus:outline-none">sign up</button>
        </div>
    </form>
</div>
@endsection