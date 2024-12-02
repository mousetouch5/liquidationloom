<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Expense;
class OfficialTransactionController extends Controller
{
public function index()
{
    // Retrieve all events
    $events = Event::all();

    // Calculate the sum of the 'eventbudget' column
    $totalBudget = Event::sum('budget');

    // Pass both the events and totalBudget to the view
    return view('Official.OfficialTransaction', compact('events', 'totalBudget'));
}
}