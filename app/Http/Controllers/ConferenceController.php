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
        $this->middleware('auth')->except('index');
    }

    protected function getAddress($lat, $lng)
    {
        $url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='.$lat.','.$lng.'&key=AIzaSyAUH_gJhMm19A-BF1KDzmtNX7eiaZbpW1g';

        $json = file_get_contents($url);
        return json_decode($json);
    }

    protected function hasLatlng(Conference $conference)
    {
        if ($conference->latitude == NULL || $conference->longitude == NULL)
        {
            return False;
        }
        else
        {
            return True;
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $conferences = Conference::paginate(15);

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
        $formatted_address = NULL;

        if (ConferenceController::hasLatlng($conference))
        {
            $address = ConferenceController::getAddress($conference->latitude, $conference->longitude);

            if ($address && $address->status == 'OK') 
            {
                $formatted_address = $address->results[0]->formatted_address;
            }
            else
            {
                $formatted_address = 'Undefined';
            }
        }

        return view('conference.show', compact('conference', 'formatted_address'));
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
