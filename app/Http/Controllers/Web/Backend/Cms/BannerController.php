<?php

namespace App\Http\Controllers\Web\Backend\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CMS;

class BannerController extends Controller
{
    public function getBanner()
    {
        $banner= CMS::where('section', 'nobis' )->first();
       
       return view('forntend.layouts.home', compact('banner'));
    }

    //banner
    public function banner(Request $request)
    {
        return view('backend.admin.cms.banner.banner');
    }

    public function bannerUpdate()
    {
        return view('backend.admin.cms.banner.banner-update');
    }

    //services
    public function services(Request $request)
    {
        return view('backend.admin.cms.service.service');
    }

    public function servicesUpdate()
    {
        return view('backend.admin.cms.service.service-update');
    }

    //psychologists
    public function psychologists(Request $request)
    {
        return view('backend.admin.cms.psychologists.psychologist');
    }

    public function psychologistsUpdate()
    {
        return view('backend.admin.cms.psychologists.psychologist-update');
    }

    //rebates
    public function rebates(Request $request)
    {
        return view('backend.admin.cms.rebates.rebates');
    }

    public function rebatesUpdate()
    {
        return view('backend.admin.cms.rebates.rebates-update');
    }
    
}
