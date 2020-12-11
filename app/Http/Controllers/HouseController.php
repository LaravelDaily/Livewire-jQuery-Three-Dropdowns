<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function create()
    {
        $countries = Country::all();

        return view('houses.create', compact('countries'));
    }

    public function store(Request $request)
    {
        //
    }
}
