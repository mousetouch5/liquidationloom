<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficialActivityLogController extends Controller
{
    public function index()
    {
       
        return view('Official.OfficialActivityLog'); // This will load the 'events.index' view
    }
}
