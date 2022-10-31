<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conference;
use App\Models\Country;

class ConferenceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $conferences = Conference::all();

        return view('conference.index', compact('conferences'));
    }

    public function create()
    {
        $countries = Country::all();

        return view('conference.create', compact('countries'));
    }

    public function store()
    {
        //dd('I Love my Miracle');

        $date = request()->validate([
            'title' => ['required', 'string', 'min:2', 'max:255'],
            'date' => ['required', 'date', 'after_or_equal:today'],
            'time' => ['required'],
            'latitude' => ['nullable'],
            'longitude' => ['nullable'],
            'country' => ['required', 'string', 'max:255'],
        ]);

        Conference::create([
            'title' => $date['title'],
            'date_time_event' => $date['date'] . ' ' . $date['time'],
            'latitude' => $date['longitude'] == null ? null : $date['latitude'],
            'longitude' => $date['latitude'] == null ? null : $date['longitude'],
            'country' => $date['country'],
        ]);

        return redirect()->route('conference.index');
    }
}
