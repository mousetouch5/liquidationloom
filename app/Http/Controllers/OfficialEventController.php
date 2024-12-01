<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficialEventController extends Controller
{
    public function index()
    {
        return view('Official.OfficialEvent'); // This will load the 'events.index' view
    }
}