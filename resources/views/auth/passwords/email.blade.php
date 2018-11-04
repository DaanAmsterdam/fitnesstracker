@extends('layouts.app') 
@section('content')
<div class="container mx-auto flex flex-col px-16 w-128 border border-green-lighter shadow-login mt-24">
    <div class="mb-8 mt-24 text-green text-4xl font-semibold tracking-tight">
        Reset Password
    </div>

    @if (session('status'))
    <div>
        {{ session('status') }}
    </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="text-green-light text-xs mb-1">
            E-mail Address
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

        <div>
            <button type="submit" class="py-3 w-full mb-16 bg-green text-lg text-white font-semibold uppercase focus:outline-none">Send Password Reset Link</button>
        </div>
    </form>
</div>
@endsection