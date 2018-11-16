@extends('layouts.app') 
@section('title', 'Fitness Tracker') 
@section('content')
<div class="container mx-auto mt-12">

    <div class="flex justify-between items-center mx-4 mb-4 border-b">
        <div class="font-sans text-4xl font-light">
            <a class="no-underline text-green hover:text-green-light" href="/rides/">Your Rides</a>
        </div>
        <div class="text-lg uppercase font-thin">
            <a href="/rides/create/" class="no-underline text-green hover:text-green-light">add ride</a>
        </div>
    </div>
    <div class="mx-4 pb-4 border-b">
        @foreach ($rides as $ride)
        <div class="flex flex-row justify-between items-center">
            <div class="">
                <a href="/rides/{{ $ride->id }}" class="text-black text-sm font-light no-underline hover:text-green">{{ $ride->title }}</a>
            </div>
            <div class="text-black text-sm font-light">
                {{ $ride->date->format('d M Y') }}
            </div>
        </div>
        @endforeach
    </div>


    <div class="flex justify-between items-center mx-4 mt-10 mb-4 border-b">
            <div class="font-sans text-4xl font-light">
                <a class="no-underline text-green hover:text-green-light" href="/practices/">Your Yoga Practices</a>
            </div>
            <div class="text-lg uppercase font-thin">
                <a href="/practices/create/" class="no-underline text-green hover:text-green-light">add practice</a>
            </div>
        </div>
        <div class="mx-4 pb-4 border-b">
            @foreach ($practices as $practice)
            <div class="flex flex-row justify-between items-center">
                <div class="">
                    <a href="/practices/{{ $practice->id }}" class="text-black text-sm font-light no-underline hover:text-green">{{ $practice->title }}</a>
                </div>
                <div class="text-black text-sm font-light">
                    {{ $practice->date->format('d M Y') }}
                </div>
            </div>
            @endforeach
        </div>
    
</div>
@endsection