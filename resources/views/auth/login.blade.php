@extends('layouts.app') 
@section('content')
<div class="container mx-auto flex flex-col px-10 w-1/3 border border-green-lighter shadow-login mt-24">
    <div class="mb-8 mt-24">
        <span class="text-green text-4xl font-semibold tracking-tight">
                Log in
            </span>
        <span class="text-green-lighter text-3xl font-light tracking-tight mx-2">
                or
            </span>
        <span class="">
                <a class="text-green-lighter text-4xl font-light tracking-tight no-underline hover:text-green" href="#">Sign up</a>
            </span>
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="text-green-light text-xs mb-1">
            E-mail address
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

        <div class="mb-1 flex justify-between items-baseline">
            <span class="text-green-light text-xs">
                Password
            </span>
            <span>
                <a class="text-green-light text-xs no-underline hover:underline hover:text-green" href="{{ route('password.request') }}">Forgot your password?</a>
            </span>
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

        <div>
            <button type="submit" class="py-3 w-full mb-10 bg-green text-lg text-white font-semibold uppercase focus:outline-none">sign in</button>
        </div>
    </form>
</div>
@endsection