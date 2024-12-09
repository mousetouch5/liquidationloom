<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Expense;
use App\Models\User;
use Illuminate\Support\Facades\Log; 
use App\Models\Transaction;
use Barryvdh\DomPDF\Facade\PDF; 
class OfficialTransactionController extends Controller

{
public function index()
{
    // Retrieve all events
    $events = Event::all(); 

   $transactions = Transaction::with('authorizeOfficial')->get();

    $officials = User::select('name', 'position','id')->get();
    // Calculate the sum of te 'eventbudget' column
    $totalBudget = Event::sum('budget');

    $bb = Expense::sum('expense_amount');

    $horse_shit =  $totalBudget - $bb;
    //dd($transactions);
    // Pass both the events and totalBudget to the view
    return view('official.OfficialTransaction', compact('transactions','horse_shit','events','bb', 'totalBudget','officials'));
}



public function store(Request $request)
{
    // Log the incoming request data for debugging purposes
    Log::info('Transaction creation requested', [
        'budget' => $request->input('budget'),
        'money_spent' => $request->input('money_spent'),
        'recieve_by' => $request->input('recieve_by'),
        'authorize_official' => $request->input('authorize_official'),
        'date' => $request->input('date'),
        'description' => $request->input('description'),
    ]);

    // Validate the incoming request data
    $request->validate([
        'budget' => 'required|numeric',
        'money_spent' => 'required|numeric',
        'recieve_by' => 'required|string|max:255',
        'authorize_official' => 'required|exists:users,id',
        'date' => 'required|date',
        'description' => 'nullable|string',
    ]);

    // Log that validation passed
    Log::info('Validation passed successfully.');

    // Create a new transaction
    $transaction = Transaction::create([
        'budget' => $request->input('budget'),
        'money_spent' => $request->input('money_spent'),
        'recieve_by' => $request->input('recieve_by'),
        'authorize_official' => $request->input('authorize_official'),
        'date' => $request->input('date'),
        'description' => $request->input('description'),
    ]);

    // Log the successful creation of a transaction
    Log::info('Transaction created successfully', [
        'transaction_id' => $transaction->id,
        'budget' => $transaction->budget,
        'money_spent' => $transaction->money_spent,
    ]);

    // Redirect to a specific route or return a success response
    return redirect()->route('Official.OfficialTransaction.index'); // Update 'transactions.index' with your actual route
}



    public function print($transactionId)
    {
        // Retrieve the specific transaction with its related authorize official
        $transaction = Transaction::with('authorizeOfficial')->findOrFail($transactionId);

        // Return a view with the transaction data for printing
        return view('events.print2', compact('transaction'));
    }


    public function downloadPDF($transactionId)
    {
        $transaction = Transaction::with('authorizeOfficial')->findOrFail($transactionId);
        $pdf = PDF::loadView('events.print3', compact('transaction'));

        return $pdf->download('transaction_' . $transactionId . '.pdf');
    }


    public function printAll()
    {
        // Retrieve all transactions
        $transactions = Transaction::with('authorizeOfficial')->get();

        // Option 1: Print All Transactions as HTML
        return view('events.print4', compact('transactions'));

        // Option 2: Print All Transactions as PDF (if you're using dompdf package)
        // $pdf = PDF::loadView('transactions.print_all_pdf', compact('transactions'));
        // return $pdf->download('all_transactions.pdf');
    }



}