<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Conference;

class UserController extends Controller
{
    public function join(User $user)
    {
        $data = request()->validate([
            'conference_id' => ['required'],
        ]);

        $conference = Conference::find($data['conference_id']);
        $user->conferences()->attach($conference);

        return redirect()->route('conferences.index');
    }

    public function cancel(User $user)
    {
        $data = request()->validate([
            'conference_id' => ['required'],
        ]);

        $conference = Conference::find($data['conference_id']);
        $user->conferences()->detach($conference);

        return redirect()->route('conferences.index');
    }
}
