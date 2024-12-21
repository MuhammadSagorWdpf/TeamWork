<?php

namespace App\Http\Controllers\Web\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function doctorDashboard()
    {
        return view('backend.doctor.layouts.doctorDashboard');
    }
}
