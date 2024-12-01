<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    // Display a listing of events
    public function index()
    {
        return view('Resident.Event'); // This will load the 'events.index' view
    }
}
