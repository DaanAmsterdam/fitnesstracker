<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index()
    {
        return view('index');
    }

    public function dashboard()
    {
        $rides = auth()->user()->rides()
            ->orderBy('date', 'desc')
            ->limit(5)
            ->get();

        return view('dashboard', compact('rides'));
    }
}
