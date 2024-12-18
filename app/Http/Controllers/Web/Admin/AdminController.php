<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('backend.admin.layouts.adminDashboard');
    }
    public function appointments()
    {
        return view('backend.admin.layouts.appointments');
    }

    public function schedul()
    {
        return view('backend.admin.layouts.schedul');
    }

    public function invoice()
    {
        return view('backend.admin.layouts.invoice');
    }

    public function message()
    {
        return view('backend.admin.layouts.message');
    }
    public function settings()
    {
        return view('backend.admin.layouts.settings');
    }
}
