@extends('layouts.app') 
@section('title', 'Edit your Practice') 
@section('content')
<div class="container mx-auto mt-12">

    <div class="font-sans text-4xl text-green font-light mx-4 mb-4 border-b">
        Edit a Yoga Practice
    </div>


    <div class="mx-4">
        <form method="POST" action="/practices/{{ $practice->id }}" class="w-full max-w-sm">
            @method('patch') @csrf
            <div class="flex items-center border-b border-b-2 py-2">
                <input class="{{ $errors->has('title') ? 'is-danger' : '' }} 
                        appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 leading-tight focus:outline-none"
                    type="text" name="title" value="{{ old('title', $practice->title) }}" placeholder="The title of your practice.."
                    autofocus required>
            </div>

            <div class="flex items-center border-b border-b-2 py-2">
                    <input class="appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 leading-tight focus:outline-none"
                        type="text" name="teacher" value="{{ old('teacher') ?? $practice->teacher }}" placeholder="teacher">
                </div>

            <div class="flex items-center border-b border-b-2 py-2">
                <input class="appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 leading-tight focus:outline-none"
                    type="text" name="date" value="{{ old('date') ?? $practice->date }}" placeholder="date" required>
            </div>


            <div class="flex items-center border-b border-b-2 py-2">
                    <input class="appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 leading-tight focus:outline-none"
                        type="text" name="time" value="{{ old('time') ?? $practice->time }}" placeholder="time" required>
                </div>

            <div class="flex items-center border-b border-b-2 py-2">
                <input class="appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 leading-tight focus:outline-none"
                    type="text" name="duration" value="{{ old('duration') ?? $practice->duration }}" placeholder="duration" required>
            </div>

            <div class="flex items-center border-b border-b-2 py-2">
                <button type="submit">Update practice</button>
            </div>
        </form>

        <form method="POST" action="/practices/{{ $practice->id }}">
            @method('delete') @csrf
            <div class="flex items-center border-b border-b-2 py-2">
                <button type="submit">Delete practice</button>
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