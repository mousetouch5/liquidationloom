<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProjectController;


use App\Http\Controllers\OfficialDashboardController;
use App\Http\Controllers\OfficialAuditTrailController;
use App\Http\Controllers\OfficialEventController;
use App\Http\Controllers\OfficialTransactionController;
use App\Http\Controllers\OfficialReportController;
use App\Http\Controllers\OfficialProjectController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\DashboardController;

//use App\Http\Controllers\CustomLoginController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', function () {

    $user = Auth::user();
// Check user type and redirect accordingly
    if ($user->user_type === 'resident') {
    return redirect()->route('dashboard'); // Redirect to resident dashboard
    } 
    else {
    return redirect()->route('Official.OfficialDashboard.index'); // Redirect to official dashboard
        }
    });
});



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Resident
Route::get('/Resident/Event', [EventController::class, 'index'])->name('Resident.Event.index');
Route::get('/Resident/Project', [ProjectController::class, 'index'])->name('Resident.Project.index');

//official
//Route::post('/login', [CustomLoginController::class, 'login'])->name('login');
Route::get('/Official/OfficialDashboard', [OfficialDashboardController::class, 'index'])->name('Official.OfficialDashboard.index');
Route::get('/Official/OfficialAuditTrail', [OfficialAuditTrailController::class, 'index'])->name('Official.OfficialAuditTrail.index');
Route::get('/Official/OfficialEvent', [OfficialEventController::class, 'index'])->name('Official.OfficialEvent.index');
Route::get('/Official/OfficialTransaction', [OfficialTransactionController::class, 'index'])->name('Official.OfficialTransaction.index');
Route::get('/Official/OfficialReport', [OfficialReportController::class, 'index'])->name('Official.OfficialReport.index');
Route::get('/Official/OfficialProject', [OfficialProjectController::class, 'index'])->name('Official.OfficialProject.index');
Route::get('/Official/Edit', [EditController::class, 'index'])->name('Official.Edit.index');

Route::get('/generate-liquidation-report/{event}', [OfficialReportController::class, 'generateLiquidationReport'])->name('download.liquidation.report');

//Post

Route::get('/liquidation-report', [OfficialReportController::class, 'showLiquidationReport'])->name('liquidation-report.liquidation.report');


Route::post('/events', [EventController::class, 'storeEvents'])->name('events.store');


//Route::post('/events/store', [OfficialEventController::class, 'store'])->name('events.store'); test routes ni boss pwede mani gamiton 

///event data

Route::get('/event-data', [OfficialEventController::class, 'getEvents'])->name('event.data');

//expense data
Route::get('/expenses', [OfficialEventController::class, 'getExpenses']);


Route::get('/print-event/{event}', [EventController::class, 'print'])->name('events.print');