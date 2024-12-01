<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficialReportController extends Controller
{
    public function index()
    {
        return view('Official.OfficialReport'); // This will load the 'events.index' view
    }
}
