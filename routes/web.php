<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\Frontend\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';

// dashboard route for client
Route::get('/client/dashboard',[DashboardController::class, 'clientDashboard'])->name('client.dashboard');
Route::get('/client/appoinment',[DashboardController::class, 'clientAppoinment'])->name('client.appoinment');
Route::get('/client/doctor',[DashboardController::class, 'clientDoctor'])->name('client.doctor');
Route::get('/doctor/profile',[DashboardController::class, 'doctorProfile'])->name('doctor.profile');
Route::get('/setting',[DashboardController::class, 'setting'])->name('setting');