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
    public function appointments()
    {
        return view('backend.doctor.layouts.appointments');
    
}

public function schedul()
{
    return view('backend.doctor.layouts.schedul');
}
public function invoice()
{
    return view('backend.doctor.layouts.invoice');
}
public function message()
{
    return view('backend.doctor.layouts.message');
}
public function settings()
{
    return view('backend.dcotor.layouts.settings');
}
}
