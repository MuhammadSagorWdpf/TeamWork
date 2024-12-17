<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function clientDashboard()
    {
        return view('backend.client.dashboard');
    }

    public function clientAppoinment(){
        return view('backend.client.appoinment');
    }

    public function clientDoctor(){
        return view('backend.client.doctor');
    }

    public function doctorProfile(){
        return view('components.doctor_profile');
    }

    public function setting(Request $request){
        return view('components.setting');
    }
}
