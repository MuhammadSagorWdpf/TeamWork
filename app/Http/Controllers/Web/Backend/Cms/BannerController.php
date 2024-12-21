<?php

namespace App\Http\Controllers\Web\Backend\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CMS;

class BannerController extends Controller
{
    public function getBanner()
    {
        $banner= CMS::where('section', 'provident' )->first();
       
       return view('forntend.layouts.home', compact('banner'));
    }

    public function banner(Request $request)
    {
        return view('backend.admin.cms.banner');
    }

    public function bannerUpdate()
    {
        return view('backend.admin.cms.banner-update');
    }
}
