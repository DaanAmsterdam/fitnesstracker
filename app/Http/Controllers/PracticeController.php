<?php

namespace App\Http\Controllers;

use App\Practice;
use App\Http\Requests\PracticeRequest;

class PracticeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $practices = auth()->user()->practices;
        return view('practices.index', compact('practices'));
    }

    public function create()
    {
        return view('practices.create');
    }

    public function store(PracticeRequest $request)
    {
        $practice = auth()->user()
            ->practices()
            ->create(request(['title', 'teacher', 'date', 'time', 'duration']));

        return redirect('/practices/' . $practice->id);
    }

    public function show(Practice $practice)
    {
        $this->authorize('update', $practice);

        return view('practices.show', compact('practice'));
    }

    public function edit(Practice $practice)
    {
        $this->authorize('update', $practice);

        return view('practices.edit', compact('practice'));
    }

    public function update(PracticeRequest $request, Practice $practice)
    {
        $this->authorize('update', $practice);

        $practice->update(request(['title', 'teacher', 'date', 'time', 'duration']));

        return redirect('/practices/' . $practice->id);
    }

    public function destroy(Practice $practice)
    {
        $this->authorize('update', $practice);

        $practice->delete();

        return redirect('/practices');
    }
}
