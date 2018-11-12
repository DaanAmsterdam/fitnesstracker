@extends('layouts.app') 
@section('title', 'Rides') 
@section('content')
<div class="container mx-auto mt-12">

    <div class="flex justify-between items-center mx-4 mb-4 border-b">
        <div class="font-sans text-4xl text-green font-light">
            Your Rides
        </div>
        <div class="text-lg uppercase font-thin">
            <a href="/rides/create/" class="no-underline text-green hover:text-green-light">add ride</a>
        </div>
    </div>
    <div class="mx-4 pb-4 border-b">
        @foreach ($rides as $ride)
        <div class="flex flex-row justify-between items-center">
            <div class="text-black text-sm font-light">
                {{ $ride->date->format('d M Y') }}
            </div>
            <div class="">
                <a href="/rides/{{ $ride->id }}" class="text-black text-sm font-light no-underline hover:text-green">{{ $ride->title }}</a>
            </div>
            <div class="flex">
                <a href="/rides/{{ $ride->id }}/edit" class="text-black hover:text-green text-xs no-underline uppercase p-1">edit</a>
                <form method="POST" action="/rides/{{ $ride->id }}">
                    @method('delete') @csrf
                    <div>
                        <button type="submit" class="text-black hover:text-green-light text-xs uppercase p-1">delete</button>
                    </div>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection