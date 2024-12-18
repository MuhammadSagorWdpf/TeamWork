<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function accountType()
    {
        return view('forntend.layouts.homepage.account-type');
    }
    public function about()
    {
        return view('forntend.layouts.homepage.about');
    }
    public function services()
    {
        return view('forntend.layouts.homepage.services');
    }
    public function psychologist()
    {
        return view('forntend.layouts.homepage.psychologist');
    }
    public function contact()
    {
        return view('forntend.layouts.homepage.contact');

    }
    public function signIn()
    {
        return view('forntend.layouts.homepage.signin');
    }
    public function signUp()
    {
        return view('forntend.layouts.homepage.sign-up');
    }
}
