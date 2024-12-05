<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\Models\Expense;
//use \PDF;
use Barryvdh\DomPDF\Facade\PDF; 
use Carbon\Carbon;
class OfficialDashboardController extends Controller
{
    public function index()
    {
        $events = Event::with('expenses')->get();
        $user = Auth::user();

        // Check the user_type and redirect accordingly
        if ($user->user_type === 'resident') {
            // Redirect to the resident dashboard or another page for residents
            return redirect()->route('resident.Event.index'); // Assuming you have a route for residents
        }


        return view('official.OfficialDashboard',compact('events'));
    }
}

