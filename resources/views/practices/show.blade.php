@extends('layouts.app') 
@section('title', 'View Yoga Practice') 
@section('content')
<div class="container mx-auto mt-12">

    <div class="flex justify-between items-center font-sans text-4xl text-green font-light mx-4 mb-4 border-b">
        <div>{{ $practice->title }}</div>
        <a class="text-xl no-underline text-green" href="/practices/{{ $practice->id }}/edit">edit</a>
    </div>

    <div class="m-4 pb-4 border-b">
        <div>Teacher: {{ $practice->teacher }}</div>
        <div>Date: {{ $practice->date->format('d M Y') }}</div>
        <div>Time: {{ $practice->time }}</div>
        <div>Duration: {{ $practice->duration }}</div>
    </div>

    <div class="mx-4">Back to <a class="no-underline text-green" href="/practices/">my Practices</a></div>
</div>
@endsection