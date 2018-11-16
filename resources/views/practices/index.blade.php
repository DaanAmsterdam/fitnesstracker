@extends('layouts.app') 
@section('title', 'Yoga Practices') 
@section('content')
<div class="container mx-auto mt-12">

    <div class="flex justify-between items-center mx-4 mb-4 border-b">
        <div class="font-sans text-4xl text-green font-light">
            All Your Yoga Practices
        </div>
        <div class="text-lg uppercase font-thin">
            <a href="/practices/create/" class="no-underline text-green hover:text-green-light">add practice</a>
        </div>
    </div>
    <div class="mx-4 pb-4 border-b">
        @foreach ($practices as $practice)
        <div class="flex flex-row justify-between items-center">
            <div class="text-black text-sm font-light">
                {{ $practice->date->format('d M Y') }}
            </div>
            <div class="">
                <a href="/practices/{{ $practice->id }}" class="text-black text-sm font-light no-underline hover:text-green">{{ $practice->title }}</a>
            </div>
            <div class="flex">
                <a href="/practices/{{ $practice->id }}/edit" class="text-black hover:text-green text-xs no-underline uppercase p-1">edit</a>
                <form method="POST" action="/practices/{{ $practice->id }}">
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