<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function clientDashboard()
    {
        return view('backend.client.dashboard');
    }

    // public function clientsDashboard(){
    //     return view('');
    // }
}