<?php

namespace App\Http\Controllers\Web\Backend\Cms;

use App\Http\Controllers\Controller;
use App\Models\CMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;


class ServiceController extends Controller
{
    public function servicesStore(Request $request)
    {
        // form validation
        $request->validate([
            "page" => "required",
            "section" => "required",
            "title" => "required",
            "short_description" => "required",
            "card_title_1" => "required",
            "card_title_2" => "required",
            "card_desc_1" => "required",
            "card_desc_2" => "required",
            "images" => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
        ]);
        
        // handaling image upload
        if ($request->hasFile("images")) {
            $image = $request->file("images");
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('service'), $imageName);
        } 

        // update the CMS entry
        $data = CMS::create(
            [
            "page" => $request->page,
            "section" => $request->section,
            "title" => $request->title,
            "short_description" => $request->short_description,
            "card_title_1" => $request->card_title_1,
            "card_title_2" => $request->card_title_2,
            "card_desc_1" => $request->card_desc_1,
            "card_desc_2" => $request->card_desc_2,
            "images" => $imageName,
            ]
        );

        if ($data) {
            flash()->success('services create successfully');
            return redirect()->route('admin.services');
        } else {  
            flash()->error('Data create failed!');  
            return redirect()->back(); 
        }
    }

    public function serviceEdit($id)
    {
        $service = CMS::where('page', 'home')->where('section', 'services')->where('id', $id)->first();
        return view('backend.admin.cms.service.service-edit',compact('service'));
    }

    public function servicesUpdate(Request $request, $id)
    {
       // form validation
       $request->validate([
        "page" => "required",
        "section" => "required",
        "title" => "required",
        "short_description" => "required",
        "card_title_1" => "required",
        "card_title_2" => "required",
        "card_desc_1" => "required",
        "card_desc_2" => "required",
        "images" => "nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
    ]);
    $services = CMS::where("page", "home")->where("section", "services")->where("id", $id)->first();
    // handaling image upload
    if ($request->hasFile("images")) {
        $image = $request->file("images");
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('service'), $imageName);
        $image_path = public_path('service/'.$services->images);
        if(File::exists($image_path))
        {
        File::delete($image_path);
        }
        $services->images = $imageName;
    }

    // update the CMS entry
    $data = $services->update(
        [
        "page" => $request->page,
        "section" => $request->section,
        "title" => $request->title,
        "short_description" => $request->short_description,
        "card_title_1" => $request->card_title_1,
        "card_title_2" => $request->card_title_2,
        "card_desc_1" => $request->card_desc_1,
        "card_desc_2" => $request->card_desc_2,
        ]
    );

    if ($data) {
        flash()->success('services updated successfully');
        return redirect()->route('admin.services');
    } else {  
        flash()->error('Data updated failed!');  
        return redirect()->back(); 
    } 
    }

    // home services
    public function homeServices()
    {
        $services = CMS::where('page', 'service')->where('section', 'services')->first();
        return view('backend.admin.cms.service.home_service', compact('services'));
    }

    // home services
    public function homeServicesCreate()
    {
        return view('backend.admin.cms.service.home-service-create');
    }

    // home services store
    public function homeServicesStore(Request $request)
    {
        // form validation
        $request->validate([
            "page" => "required",
            "section" => "required",
            "title" => "required",
            "sub_title" => "required",
            "sub_title_2" => "required",
            "short_description" => "required",
            "card_title_1" => "required",
            "card_title_2" => "required",
            "card_title_3" => "required",
            "card_title_4" => "required",
            "card_title_5" => "required",
            "card_title_6" => "required",
            "card_title_7" => "required",
            "card_title_8" => "required",
            "card_title_9" => "required",
            "card_title_10" => "required",
            "card_desc_1" => "required",
            "card_desc_2" => "required",
            "card_desc_3" => "required",
            "card_desc_4" => "required",
            "card_desc_5" => "required",
            "card_desc_6" => "required",
            "card_desc_7" => "required",
            "card_desc_8" => "required",
            "card_desc_9" => "required",
            "card_desc_10" => "required",
            "images" => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
        ]);

        // handaling image upload
        if ($request->hasFile("images")) {
            $image = $request->file("images");
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('home_service'), $imageName);
        } 

        // Create the CMS entry
        $data = CMS::create(
            [
            "page" => $request->page,
            "section" => $request->section,
            "title" => $request->title,
            "sub_title" => $request->title,
            "sub_title_2" => $request->title,
            "short_description" => $request->short_description,
            "card_title_1" => $request->card_title_1,
            "card_title_2"  => $request->card_title_2,
            "card_title_3"  => $request->card_title_3,
            "card_title_4"=> $request->card_title_4,
            "card_title_5"=> $request->card_title_5,
            "card_title_6"=> $request->card_title_6,
            "card_title_7"=> $request->card_title_7,
            "card_title_8"=> $request->card_title_8,
            "card_title_9"=> $request->card_title_9,
            "card_title_10"=> $request->card_title_10,
            "card_desc_1" => $request->card_desc_1,
            "card_desc_2" => $request->card_desc_2,
            "card_desc_3"=> $request->card_desc_3,
            "card_desc_4"=> $request->card_desc_4,
            "card_desc_5"=> $request->card_desc_5,
            "card_desc_6"=> $request->card_desc_6,
            "card_desc_7"=> $request->card_desc_7,
            "card_desc_8"=> $request->card_desc_8,
            "card_desc_9"=> $request->card_desc_9,
            "card_desc_10"=> $request->card_desc_10,
            "images" => $imageName,
            ]
        );

        if ($data) {
            flash()->success('home services create successfully');
            return redirect()->route('home.services');
        } else {  
            flash()->error('Data create failed!');  
            return redirect()->back(); 
        }  
    }

    // home services edit
    public function homeServiceEdit(Request $request, $id)
    {
        $services = CMS::where('page', 'service')->where('section', 'services')->where('id', $id)->first();
        return view('backend.admin.cms.service.home-service-edit',compact('services'));
    }

    // home services update
    public function homeServicesUpdate(Request $request, $id)
    {
         // form validation
         $request->validate([
            "page" => "required",
            "section" => "required",
            "title" => "required",
            "sub_title" => "required",
            "sub_title_2" => "required",
            "short_description" => "required",
            "card_title_1" => "required",
            "card_title_2" => "required",
            "card_title_3" => "required",
            "card_title_4" => "required",
            "card_title_5" => "required",
            "card_title_6" => "required",
            "card_title_7" => "required",
            "card_title_8" => "required",
            "card_title_9" => "required",
            "card_title_10" => "required",
            "card_desc_1" => "required",
            "card_desc_2" => "required",
            "card_desc_3" => "required",
            "card_desc_4" => "required",
            "card_desc_5" => "required",
            "card_desc_6" => "required",
            "card_desc_7" => "required",
            "card_desc_8" => "required",
            "card_desc_9" => "required",
            "card_desc_10" => "required",
            "images" => "nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
        ]);

         
        $services = CMS::where("page", "service")->where("section", "services")->where("id", $id)->first();
        // handaling image upload
        if ($request->hasFile("images")) {
            $image = $request->file("images");
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('home_service'), $imageName);
            $image_path = public_path('home_service/'.$services->images);
            if(File::exists($image_path))
            {
            File::delete($image_path);
            }
            $services->images = $imageName;
        }

        // Create the CMS entry
        $data = $services->update(
            [
            "page" => $request->page,
            "section" => $request->section,
            "title" => $request->title,
            "sub_title" => $request->title,
            "sub_title_2" => $request->title,
            "short_description" => $request->short_description,
            "card_title_1" => $request->card_title_1,
            "card_title_2"  => $request->card_title_2,
            "card_title_3"  => $request->card_title_3,
            "card_title_4"=> $request->card_title_4,
            "card_title_5"=> $request->card_title_5,
            "card_title_6"=> $request->card_title_6,
            "card_title_7"=> $request->card_title_7,
            "card_title_8"=> $request->card_title_8,
            "card_title_9"=> $request->card_title_9,
            "card_title_10"=> $request->card_title_10,
            "card_desc_1" => $request->card_desc_1,
            "card_desc_2" => $request->card_desc_2,
            "card_desc_3"=> $request->card_desc_3,
            "card_desc_4"=> $request->card_desc_4,
            "card_desc_5"=> $request->card_desc_5,
            "card_desc_6"=> $request->card_desc_6,
            "card_desc_7"=> $request->card_desc_7,
            "card_desc_8"=> $request->card_desc_8,
            "card_desc_9"=> $request->card_desc_9,
            "card_desc_10"=> $request->card_desc_10,
            ]
        );

        if ($data) {
            flash()->success('home services update successfully');
            return redirect()->route('home.services');
        } else {  
            flash()->error('Data update failed!');  
            return redirect()->back(); 
        }  
    }
        
}
