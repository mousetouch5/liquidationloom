<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficialProjectController extends Controller
{
    public function index()
    {
        return view('Official.OfficialProject'); // This will load the 'events.index' view
    }
}
