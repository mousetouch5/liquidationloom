<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Expense;
//use \PDF;
use Barryvdh\DomPDF\Facade\PDF; 
use Carbon\Carbon;
class OfficialProjectController extends Controller
{
    public function index()
    {
        $events = Event::with('expenses')->get();
        //dd($events);
        return view('official.OfficialProject',compact('events')); // This will load the 'events.index' view
    }
}
