<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProjectController;


use App\Http\Controllers\OfficialDashboardController;
use App\Http\Controllers\OfficialAuditTrailController;
use App\Http\Controllers\OfficialEventController;
use App\Http\Controllers\OfficialTransactionController;
use App\Http\Controllers\OfficialReportController;
use App\Http\Controllers\OfficialProjectController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('Resident.dashboard');
    })->name('dashboard');
});

// Resident
Route::get('/Resident/Event', [EventController::class, 'index'])->name('Resident.Event.index');
Route::get('/Resident/Project', [ProjectController::class, 'index'])->name('Resident.Project.index');

//official

Route::get('/Official/OfficialDashboard', [OfficialDashboardController::class, 'index'])->name('Official.OfficialDashboard.index');
Route::get('/Official/OfficialAuditTrail', [OfficialAuditTrailController::class, 'index'])->name('Official.OfficialAuditTrail.index');
Route::get('/Official/OfficialEvent', [OfficialEventController::class, 'index'])->name('Official.OfficialEvent.index');
Route::get('/Official/OfficialTransaction', [OfficialTransactionController::class, 'index'])->name('Official.OfficialTransaction.index');
Route::get('/Official/OfficialReport', [OfficialReportController::class, 'index'])->name('Official.OfficialReport.index');
Route::get('/Official/OfficialProject', [OfficialProjectController::class, 'index'])->name('Official.OfficialProject.index');

