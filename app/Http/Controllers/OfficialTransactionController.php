<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficialTransactionController extends Controller
{
    public function index()
    {
        return view('Official.OfficialTransaction'); // This will load the 'events.index' view
    }
}