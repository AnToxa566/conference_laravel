<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conference;
use App\Models\Country;
use Illuminate\Support\Facades\Validator;

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
        $data = request()->validate([
            'title' => ['required', 'string', 'min:2', 'max:255'],
            'date' => ['required', 'date', 'after_or_equal:today'],
            'time' => ['required'],
            'latitude' => ['nullable'],
            'longitude' => ['nullable'],
            'country' => ['required', 'string', 'max:255'],
        ]);

        Conference::create([
            'title' => $data['title'],
            'date_time_event' => $data['date'] . ' ' . $data['time'],
            'latitude' => $data['longitude'] == null ? null : $data['latitude'],
            'longitude' => $data['latitude'] == null ? null : $data['longitude'],
            'country' => $data['country'],
        ]);

        return redirect()->route('conferences.index');
    }

    public function show(Conference $conference)
    {
        return view('conference.show', compact('conference'));
    }

    public function edit(Conference $conference)
    {
        $countries = Country::all();

        return view('conference.edit', compact('conference', 'countries'));
    }

    public function update(Conference $conference)
    {
        $data = request()->validate([
            'title' => ['required', 'string', 'min:2', 'max:255'],
            'date' => ['required', 'date', 'after_or_equal:today'],
            'time' => ['required'],
            'latitude' => ['nullable'],
            'longitude' => ['nullable'],
            'country' => ['required', 'string', 'max:255'],
        ]);

        $conference->update([
            'title' => $data['title'],
            'date_time_event' => $data['date'] . ' ' . $data['time'],
            'latitude' => $data['longitude'] == null ? null : $data['latitude'],
            'longitude' => $data['latitude'] == null ? null : $data['longitude'],
            'country' => $data['country'],
        ]);

        return redirect()->route('conferences.show', $conference->id);
    }

    public function destroy(Conference $conference)
    {
        $conference->delete();

        return redirect()->route('conferences.index');
    }
}
