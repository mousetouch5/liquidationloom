<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficialDashboardController extends Controller
{
    public function index()
    {
        return view('Official.OfficialDashboard'); // This will load the 'events.index' view
    }
}