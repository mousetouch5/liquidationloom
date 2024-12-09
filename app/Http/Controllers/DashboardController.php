<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Event;
use App\Models\User;

class DashboardController extends Controller
{
    public function index() {
        $events = Event::all();     
        return view('Resident.dashboard',compact('events'));
    }

    public function getOfficials(){
    // Fetching the barangay officials from the users table (assuming they have a 'role' column)
    $officials = \App\Models\User::whereIn('position', ['Barangay Captain', 'Barangay Secretary', 'Barangay Treasurer'])->get();

    // Returning as a JSON response
    return response()->json($officials);
    }



}