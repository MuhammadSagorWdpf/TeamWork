<?php

namespace App\Http\Controllers\Web\Backend\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CMS;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    public function getBanner()
    {
        $banner= CMS::where('section', 'banner' )->first();
        $faqs = CMS::where('page','home')->where('section','faqs')->get();
        $rebates = CMS::where('page','home')->where('section','rebates')->first();
        $services = CMS::where('page','home')->where('section','services')->first();
       
       return view('forntend.layouts.home', compact('banner','faqs','rebates','services'));
    }

    //banner
    public function banner(Request $request)
    {
        $banners= CMS::where('page', 'home')->where('section', 'banner')->first();
        return view('backend.admin.cms.banner.banner', compact('banners'));
    }

    public function bannerEdit()
    {
        $banner= CMS::where('page', 'home')->where('section', 'banner')->first();
        return view('backend.admin.cms.banner.banner-update',compact('banner'));
    }

    public function bannerUpdate(Request $request, $id)
    {
        // form validation
        $request->validate([
            "page" => "required",
            "section" => "required",
            "title" => "required",
            "sub_title" => "required",
            "description" => "required",
            "btn_text" => "required",
            "images" => "nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
        ]);

        $banner = CMS::where('page', 'home')->where('section', 'banner')->where('id', $id)->first();
        
        // handaling image upload
        if ($request->hasFile("images")) {
            $image = $request->file("images");
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('banners'), $imageName);
            $image_path = public_path('banners/'.$banner->images);
            if(File::exists($image_path))
            {
            File::delete($image_path);
            }
            $banner->images = $imageName;
        } 

        // update the CMS entry
        $data = $banner->update(
            [
            "page" => $request->page,
            "section" => $request->section,
            "title" => $request->title,
            "sub_title" => $request->sub_title,
            "description" => $request->description,
            "btn_text" => $request->btn_text,
            ]
        );

        if ($data) {
            flash()->success('Banner update successfully');
            return redirect()->route('banner');
        } else {  
            flash()->error('Data update failed!');  
            return redirect()->back(); 
        }
    }

    //services
    public function services(Request $request)
    {
        $service = CMS::where('page', 'home')->where('section', 'services')->first();
        return view('backend.admin.cms.service.service', compact('service'));
    }

    public function servicesCreate()
    {
        return view('backend.admin.cms.service.service-create');
    }

    //article
    public function article()
    {
        $articles = CMS::where("page","home")->where("section","articles")->get();
        return view('backend.admin.cms.article.article', compact('articles'));
    }

    public function articleCreate()
    {
        return view('backend.admin.cms.article.article-store');
    }

    public function articleEdit($id)
    {
        $articles = CMS::where('page', 'home')->where('section', 'articles')->where('id', $id)->first();
        return view('backend.admin.cms.article.article-edit',compact('articles'));
    }
    

    
}
