<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Expense;
use Carbon\Carbon;
class OfficialEventController extends Controller
{
public function index()
{
    // Eager load expenses with their associated events
    $events = Event::all(); 
    $expenses = Expense::all()
        ->groupBy('event_id')
        ->map(function ($group) {
            return [
                'id' => $group->first()->event_id, // Get the event_id
                'items' => $group->map(function ($expense) {
                    return [
                        'name' => $expense->expense_description,
                        'date' => Carbon::parse($expense->expense_date)->format('d M h:ia'), // Convert date to Carbon and format
                        'amount' => $expense->expense_amount,
                    ];
                }),
                'total' => $group->sum('expense_amount'), // Calculate the total for the group
            ];
        });

    //dd($expenses); // This will dump the expenses along with their related event details
    
    return view('official.OfficialEvent', compact('events','expenses'));
}

    public function getEvents(Request $request)
    {

        $events = Event::all();
        // Return the events as JSON
        return response()->json($events);
    }

    public function getExpenses(Request $request)
    {
        $expenses = Expense::all();
        return response()->json($expenses);
    }


}