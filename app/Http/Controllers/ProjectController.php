<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('Resident.Project'); // This will load the 'events.index' view
    }
}
