<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\Admin\AdminController;
use App\Http\Controllers\Web\Backend\Cms\BannerController;
use App\Http\Controllers\Web\Frontend\DashboardController;
use App\Http\Controllers\Web\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[BannerController::class, 'getBanner']);

/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';

// dashboard route for client
Route::middleware(['role:client'])->group(function(){
    Route::get('/client/dashboard',[DashboardController::class, 'clientDashboard'])->name('client.dashboard');
    Route::get('/client/appoinment',[DashboardController::class, 'clientAppoinment'])->name('client.appoinment');
    Route::get('/client/doctor',[DashboardController::class, 'clientDoctor'])->name('client.doctor');
    Route::get('/doctor/profile',[DashboardController::class, 'doctorProfile'])->name('doctor.profile');
    Route::get('/setting',[DashboardController::class, 'setting'])->name('setting');
});


Route::middleware(['role:admin'])->group(function () {
    Route::get('/admin-dashboard', [AdminController::class, 'index'])->name('admin-dashboard');
    Route::get('/appointments',[AdminController::class, 'appointments'])->name('appointments');
    Route::get('/doctor-schedul', [AdminController::class, 'schedul'])->name('doctor-schedul');
    Route::get('/invoice', [AdminController::class, 'invoice'])->name('invoice');
    Route::get('/settings',[AdminController::class, 'settings'])->name('settings');
    Route::get('/message',[AdminController::class, 'message'])->name('message');
});


//Home section
Route::get('/account-type',[HomeController::class, 'accountType'])->name('account-type');
Route::get('/about',[HomeController::class, 'about'])->name('about');
Route::get('/services',[HomeController::class, 'services'])->name('services');
Route::get('/psychologist',[HomeController::class, 'psychologist'])->name('psychologist');
Route::get('/contact',[HomeController::class, 'contact'])->name('contact');

//login-registration
Route::get('/sign-in',[HomeController::class, 'signIn'])->name('sign-in');
Route::get('/sign-up',[HomeController::class, 'signUp'])->name('sign-up');

/* Route::get('/getBanner',[BannerController::class, 'getBanner']); */






























/* Route::middleware(['verified', 'role:admin'])->group(function () {
    Route::get('/admin-dashboard', function () {
        return view('adminDashboard');
    })->name('admin-dashboard');

    Route::get('/appointments',[AdminController::class, 'appointments'])->name('appointments');
Route::get('/doctor-schedul', [AdminController::class, 'schedul'])->name('doctor-schedul');
Route::get('/invoice', [AdminController::class, 'invoice'])->name('invoice');
Route::get('/settings',[AdminController::class, 'settings'])->name('settings');
Route::get('/message',[AdminController::class, 'message'])->name('message');
}); */
//Admin Dashboard
/* Route::get('/admin-dashboard',[AdminController::class, 'index'])->name('admin-dashboard');
Route::get('/appointments',[AdminController::class, 'appointments'])->name('appointments');
Route::get('/doctor-schedul', [AdminController::class, 'schedul'])->name('doctor-schedul');
Route::get('/invoice', [AdminController::class, 'invoice'])->name('invoice');
Route::get('/settings',[AdminController::class, 'settings'])->name('settings');
Route::get('/message',[AdminController::class, 'message'])->name('message'); */