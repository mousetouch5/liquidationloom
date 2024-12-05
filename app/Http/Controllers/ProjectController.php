<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Expense;
//use \PDF;
use Barryvdh\DomPDF\Facade\PDF; 
use Carbon\Carbon;

class ProjectController extends Controller
{
    public function index()
    {
        $events = Event::with('expenses')->get();
        return view('Resident.Project',compact('events')); // This will load the 'events.index' view
    }
}
