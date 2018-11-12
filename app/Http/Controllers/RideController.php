<?php

namespace App\Http\Controllers;

use App\Ride;
use App\Http\Requests\RideRequest;

class RideController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $rides = auth()->user()->rides;
        return view('rides.index', compact('rides'));
    }

    public function create()
    {
        return view('rides.create');
    }

    public function store(RideRequest $request)
    {
        Ride::create(
            ['user_id' => auth()->id()] +
            request(['title', 'date', 'distance', 'duration', 'type', 'weather', 'link_strava', 'link_garmin', 'remarks'])
        );

        return redirect('/rides');
    }

    public function show(Ride $ride)
    {
        $this->authorize('update', $ride);

        return view('rides.show', compact('ride'));
    }

    public function edit(Ride $ride)
    {
       $this->authorize('update', $ride);

       return view('rides.edit', compact('ride'));
    }

    public function update(RideRequest $request, Ride $ride)
    {
        $this->authorize('update', $ride);

        $ride->update(
            request(['title', 'date', 'distance', 'duration', 'type', 'weather', 'link_strava', 'link_garmin', 'remarks'])
        );

        return redirect('/rides/' . $ride->id);
    }

    public function destroy(Ride $ride)
    {
        $this->authorize('update', $ride);

        $ride->delete();

        return redirect('/rides');
    }
}
