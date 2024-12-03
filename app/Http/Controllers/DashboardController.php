<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Event;

class DashboardController extends Controller
{
    public function index() {
        $events = Event::all(); 
        return view('Resident.dashboard',compact('events'));
    }
}