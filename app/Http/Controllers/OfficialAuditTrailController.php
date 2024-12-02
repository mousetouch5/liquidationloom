<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficialAuditTrailController extends Controller
{
    public function index()
    {
        return view('official.OfficialAuditTrail'); // This will load the 'events.index' view
    }
}

