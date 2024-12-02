<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Expense;
//use \PDF;
use Barryvdh\DomPDF\Facade\PDF; 
use Carbon\Carbon;
class OfficialReportController extends Controller
{
    public function index()
    {
        $events = Event::with('expenses')->get();
     //   dd($events);
        // Pass the events (with expenses) to the view
        return view('Official.OfficialReport', compact('events'));
    }




    public function showLiquidationReport()
    {
        // Fetch events with their related expenses
        $events = Event::with('expenses')->get();

        // Initialize variables for summary calculations
        $total_event_budget = 0;
        $total_expense = 0;
        $total_refunded = 0;
        $total_to_be_reimbursed = 0;

        // Loop through each event and calculate the totals
        foreach ($events as $event) {
            $event_budget = $event->budget; // Event's budget
            $event_expenses = $event->expenses->sum('expense_amount'); // Sum up the event's expenses

            // Calculate the refunded and reimbursed amounts
            $amount_refunded = max(0, $event_expenses - $event_budget); // Refund if expenses exceed the budget
            $amount_to_be_reimbursed = max(0, $event_budget - $event_expenses); // Reimbursement if budget exceeds expenses

            // Accumulate the totals
            $total_event_budget += $event_budget;
            $total_expense += $event_expenses;
            $total_refunded += $amount_refunded;
            $total_to_be_reimbursed += $amount_to_be_reimbursed;
        }

        // Get the current date
        $date_today = Carbon::now()->format('F d, Y');

        // Return the view and pass the data
        return view('report.liquidation_report', compact(
            'events',
            'total_event_budget',
            'total_expense',
            'total_refunded',
            'total_to_be_reimbursed',
            'date_today'
        ));
    }




    public function generateLiquidationReport()
    {
    // Fetch events with their related expenses
    $events = Event::with('expenses')->get(); 

    // Initialize variables for summary calculations
    $total_event_budget = 0;
    $total_expense = 0;
    $total_refunded = 0;
    $total_to_be_reimbursed = 0;

    // Loop through each event and calculate the totals
    foreach ($events as $event) {
        // Assuming 'budget' is a field in the Event model
        $event_budget = $event->budget; // Get the event's budget
        
        // Sum up the expenses for the event
        $event_expenses = $event->expenses->sum('expense_amount'); 

        // Calculate amounts
        $amount_refunded = max(0, $event_expenses - $event_budget); // Amount refunded if expenses exceed budget
        $amount_to_be_reimbursed = max(0, $event_budget - $event_expenses); // Amount to be reimbursed if budget exceeds expenses

        // Accumulate total values for all events
        $total_event_budget += $event_budget;
        $total_expense += $event_expenses;
        $total_refunded += $amount_refunded;
        $total_to_be_reimbursed += $amount_to_be_reimbursed;
    }

    // Get the current date to include in the report
    $date_today = \Carbon\Carbon::now()->format('F d, Y');

    // Pass data to the PDF view
    $pdf = PDF::loadView('report.liquidation_report', [
        'events' => $events,
        'total_event_budget' => $total_event_budget,
        'total_expense' => $total_expense,
        'total_refunded' => $total_refunded,
        'total_to_be_reimbursed' => $total_to_be_reimbursed,
        'date_today' => $date_today
    ]);

    // Return the PDF file for download
    return $pdf->download('liquidation_report.pdf');
}





}
