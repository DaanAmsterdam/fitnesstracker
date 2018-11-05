<?php

namespace App\Http\Controllers;

use App\Ride;
use Illuminate\Http\Request;

class RideController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //$rides = Ride::all();
        $rides = auth()->user()->rides;
        return view('rides.index', compact('rides'));
    }

    public function create()
    {
        return view('rides.create');
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'title'           => ['required', 'min:3'],
            'date'            => ['required', 'date'],
            'distance'        => 'required',
            'duration'        => 'required',
            'type'            => 'required',
            'weather'         => 'nullable',
            'link_strava'     => 'nullable',
            'link_garmin'     => 'nullable',
            'remarks'         => 'nullable'
        ]);

        $attributes['user_id'] = auth()->id();

        Ride::create($attributes);

        return redirect('/rides');
    }

    public function show(Ride $ride)
    {
        return view('rides.show', compact('ride'));
    }

    public function edit(Ride $ride)
    {
        return view('rides.edit', compact('ride'));
    }

    public function update(Request $request, Ride $ride)
    {
        $ride->update(request()->validate([
            'title'       => ['required', 'min:3'],
            'date'        => ['required', 'date'],
            'distance'    => 'required',
            'duration'    => 'required',
            'type'        => 'required',
            'weather'     => 'nullable',
            'link_strava' => 'nullable',
            'link_garmin' => 'nullable',
            'remarks'     => 'nullable'
        ]));

        return redirect('/rides/' . $ride->id);
    }

    public function destroy(Ride $ride)
    {
        $ride->delete();

        return redirect('/rides');
    }
}
