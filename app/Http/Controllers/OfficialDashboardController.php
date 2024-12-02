<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class OfficialDashboardController extends Controller
{
    public function index()
    {

        $user = Auth::user();

        // Check the user_type and redirect accordingly
        if ($user->user_type === 'resident') {
            // Redirect to the resident dashboard or another page for residents
            return redirect()->route('Resident.Event.index'); // Assuming you have a route for residents
        }


        return view('Official.OfficialDashboard'); // This will load the 'events.index' view
    }
}