<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\Admin\AdminController;
use App\Http\Controllers\Web\Backend\Cms\AboutController;
use App\Http\Controllers\Web\Backend\Cms\ArticleController;
use App\Http\Controllers\Web\Backend\Cms\BannerController;
use App\Http\Controllers\Web\Backend\Cms\FaqsController;
use App\Http\Controllers\Web\Backend\Cms\PsychologistController;
use App\Http\Controllers\Web\Backend\Cms\RebateController;
use App\Http\Controllers\Web\Backend\Cms\ServiceController;
use App\Http\Controllers\Web\Doctor\DoctorAppointmentController;
use App\Http\Controllers\Web\Doctor\DoctorController;
use App\Http\Controllers\Web\Frontend\DashboardController;
use App\Http\Controllers\Web\Frontend\DoctorSignupController;
use App\Http\Controllers\Web\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[BannerController::class, 'getBanner'])->name('home');

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
    Route::get('/single_doctor/{id}',[DashboardController::class, 'clientSingleDoctor']);
    Route::get('/doctor/profile',[DashboardController::class, 'doctorProfile'])->name('doctor.profile');
    Route::get('/client/setting',[DashboardController::class, 'clientSetting'])->name('client.setting');
    Route::put('/client/setting/update/{id}',[DashboardController::class, 'clientSettingUpdate'])->name('client.setting.update');
    Route::get('/client/appoinment/edit/{id}',[DashboardController::class,'appointmentEdit'])->name('appoinment.edit');
    Route::get('/client/appoinment/delete/{id}',[DashboardController::class,'appoinmentDelete'])->name('appoinment.delete');
});


Route::middleware(['role:admin'])->group(function () {
    Route::get('/admin-dashboard', [AdminController::class, 'index'])->name('admin-dashboard');
    Route::get('/appointments',[AdminController::class, 'appointments'])->name('appointments');
    Route::get('/doctor-schedul', [AdminController::class, 'schedul'])->name('doctor-schedul');
    Route::get('/invoice', [AdminController::class, 'invoice'])->name('invoice');
    Route::get('/admin/settings',[AdminController::class, 'adminSettings'])->name('admin.settings');
    Route::put('/admin/setting/update/{id}',[AdminController::class, 'adminSettingUpdate'])->name('admin.setting.update');
    Route::get('/message',[AdminController::class, 'message'])->name('message');
});

// doctor dashboard route
Route::middleware(['role:doctor'])->group(function () {
Route::get('/doctor-dashboard', [DoctorController::class, 'index'])->name('doctor.dashboard');
Route::get('/slots', [DoctorController::class, 'slots'])->name('slots');
Route::get('/slots/create', [DoctorController::class, 'slotsCreate'])->name('slots.create');
Route::post('/slots/store', [DoctorController::class, 'slotsStore'])->name('slots.store');
Route::put('/slots/update/{id}', [DoctorController::class, 'slotsUpdate'])->name('slots.update');
Route::get('/slots/edit/{id}', [DoctorController::class, 'slotsEdit'])->name('slot.edit');
Route::get('/slots/delete/{id}', [DoctorController::class, 'slotsDelete'])->name('slot.delete');
Route::get('/settings',[DoctorController::class, 'doctorSettings'])->name('settings');
Route::put('/setting/update/{id}',[DoctorController::class, 'doctorSettingUpdate'])->name('setting.update');

// apointment
Route::get('/doctor/appointment', [DoctorAppointmentController::class, 'doctorAppointment'])->name('doctor.appointments');
});

//Home section
Route::get('/account-type',[HomeController::class, 'accountType'])->name('account-type');
Route::get('/about-us',[HomeController::class, 'about'])->name('about_us');
Route::get('/services',[HomeController::class, 'services'])->name('services');
Route::get('/psychologist',[HomeController::class, 'psychologist'])->name('psychologist');
Route::get('/contact',[HomeController::class, 'contact'])->name('contact');

//login-registration
Route::get('/sign-in',[HomeController::class, 'signIn'])->name('sign-in');
Route::get('/sign-up',[HomeController::class, 'signUp'])->name('sign-up');

//home banner
Route::get('/banner',[BannerController::class, 'banner'])->name('banner'); 
// Route::get('/banner/create',[BannerController::class, 'bannerCreate'])->name('banner.create'); 
// Route::post('/banner/store/{id}',[BannerController::class, 'bannerStore'])->name('banner.store'); 
Route::get('/banner/edit/{id}',[BannerController::class, 'bannerEdit'])->name('banner.edit'); 
Route::put('/banner/update/{id}',[BannerController::class, 'bannerUpdate'])->name('banner.update'); 
//Home services
Route::get('/admin/services',[BannerController::class, 'services'])->name('admin.services'); 
Route::get('/admin/services/create',[BannerController::class, 'servicesCreate'])->name('admin.services.create');
Route::get('/service/edit/{id}',[ServiceController::class, 'serviceEdit'])->name('service.edit'); 
Route::post('/services/store',[ServiceController::class, 'servicesStore'])->name('services.store');
Route::put('/services/update/{id}',[ServiceController::class, 'servicesUpdate'])->name('services.update'); 

//services
Route::get('/home/services',[ServiceController::class, 'homeServices'])->name('home.services'); 
Route::get('/home/services/create',[ServiceController::class, 'homeServicesCreate'])->name('home.services.create');
Route::get('/home/service/edit/{id}',[ServiceController::class, 'homeServiceEdit'])->name('home.service.edit'); 
Route::post('/home/services/store',[ServiceController::class, 'homeServicesStore'])->name('home.services.store');
Route::put('/home/services/update/{id}',[ServiceController::class, 'homeServicesUpdate'])->name('home.services.update'); 


//psychologists
Route::get('/psychologists',[PsychologistController::class, 'psychologists'])->name('psychologists'); 
Route::get('/psychologists/create',[PsychologistController::class, 'psychologistsCreate'])->name('psychologists.create');
Route::post('/psychologists/store',[PsychologistController::class, 'psychologistsStore'])->name('psychologists.store');
Route::get('/psychologists/edit/{id}',[PsychologistController::class, 'psychologistsEdit'])->name('psychologists.edit');
Route::put('/psychologists/update/{id}',[PsychologistController::class, 'psychologistsUpdate'])->name('psychologists.update');

Route::get('/psychologists/status/{id}',[PsychologistController::class, 'psychologistsStatus'])->name('psychologists.status');

//rebates
Route::get('/rebates',[RebateController::class, 'rebates'])->name('rebates'); 
Route::get('/rebates/create',[RebateController::class, 'rebatesCreate'])->name('rebates.create');
Route::post('/rebates/store',[RebateController::class, 'rebatesStore'])->name('rebates.store'); 
Route::get('/rebates/edit/{id}',[RebateController::class, 'rebatesEdit'])->name('rebates.edit'); 
Route::put('/rebates/edit/{id}',[RebateController::class, 'rebatesUpdate'])->name('rebates.update'); 
//article
Route::get('/articles',[BannerController::class, 'article'])->name('articles'); 
Route::get('/article/create',[BannerController::class, 'articleCreate'])->name('article.create');
Route::get('/article/edit/{id}',[BannerController::class, 'articleEdit'])->name('article.edit');

Route::post('/article/store',[ArticleController::class, 'articleStore'])->name('article.store');
Route::put('/article/update/{id}',[ArticleController::class, 'articleUpdate'])->name('article.update');
Route::get('/article/delete/{id}',[ArticleController::class, 'articleDelete'])->name('article.delete');
//faqs
Route::get('/faqs',[FaqsController::class, 'faqs'])->name('faqs'); 
Route::get('/faqs/create',[FaqsController::class, 'faqsCreate'])->name('faqs.create');
Route::post('/faqs/store',[FaqsController::class, 'faqsStore'])->name('faqs.store');

Route::get('/faq/edit/{id}',[FaqsController::class, 'faqEdit'])->name('faq.edit');
Route::put('/faqs/update/{id}',[FaqsController::class, 'faqsUpdate'])->name('faqs.update');
Route::get('/faq/delete/{id}',[FaqsController::class, 'faqDelete'])->name('faq.delete');
//about
Route::get('/abouts',[AboutController::class, 'abouts'])->name('abouts'); 
Route::get('/abouts/create',[AboutController::class, 'aboutsCreate'])->name('abouts.create');
Route::post('/abouts/store',[AboutController::class, 'aboutsStore'])->name(name: 'abouts.store');
Route::get('/abouts/edit/{id}',[AboutController::class, 'aboutsEdit'])->name(name: 'abouts.edit');
Route::put('/abouts/update/{id}',[AboutController::class, 'aboutsUpdate'])->name(name: 'abouts.update');

// store doctor
Route::post('/psychologist/store', [DoctorSignupController::class, 'storeDoctor'])->name('psychologist.store');


// doctor details
Route::get('/doctor/detail/{id}', [DoctorController::class, 'doctorDetail'])->name('doctor.detail');


Route::post('/apointment/store', [HomeController::class, 'apointmentStore'])->name('apointment.store');

Route::get('/client/info', [HomeController::class, 'clientInfo'])->name('client.info');
Route::post('/client/store', [HomeController::class, 'clientInfoStore'])->name('client.store');



Route::get('/select-date', [DoctorController::class,'selectDate'])->name('select.date');

Route::get('/markAsRead/{id}', [DoctorController::class, 'markAsRead'])->name('markAsRead'); 


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