<?php

namespace App\Http\Controllers;

use App\Models\State;

class StateController extends Controller
{
    public function index()
    {
        $states = State::whereHas('country', function ($query) {
            $query->whereId(request()->input('country_id', 0));
        })->pluck('name', 'id');

        return response()->json($states);
    }
}
