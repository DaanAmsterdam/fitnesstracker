@extends('layouts.app') 
@section('title', 'Create Yoga Practice') 
@section('content')
<div class="container mx-auto mt-12">

    <div class="font-sans text-4xl text-green font-light mx-4 mb-4 border-b">
        Create a new Yoga Practice
    </div>


    <div class="mx-4">
        <form method="POST" action="/practices" class="w-full max-w-sm">
            @csrf
            <div class="flex items-center border-b border-b-2 py-2">
                <input class="{{ $errors->has('title') ? 'is-danger' : '' }} 
                            appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 leading-tight focus:outline-none"
                    type="text" name="title" placeholder="The title of your yoga practice.." autofocus required>
            </div>

            <div class="flex items-center border-b border-b-2 py-2">
                <input class="{{ $errors->has('teacher') ? 'is-danger' : '' }} 
                            appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 leading-tight focus:outline-none"
                    type="text" name="teacher" placeholder="Teacher" autofocus>
            </div>

            <div class="flex items-center border-b border-b-2 py-2">
                <input class="appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 leading-tight focus:outline-none"
                    type="text" name="date" placeholder="date" required>
            </div>

            <div class="flex items-center border-b border-b-2 py-2">
                <input class="appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 leading-tight focus:outline-none"
                    type="text" name="time" placeholder="time" required>
            </div>

            <div class="flex items-center border-b border-b-2 py-2">
                <input class="appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 leading-tight focus:outline-none"
                    type="text" name="duration" placeholder="duration" required>
            </div>

            <div class="flex items-center border-b border-b-2 py-2">
                <button type="submit">Create Yoga Practice</button>
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