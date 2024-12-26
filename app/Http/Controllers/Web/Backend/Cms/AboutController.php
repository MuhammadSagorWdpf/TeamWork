<?php

namespace App\Http\Controllers\Web\Backend\Cms;

use App\Http\Controllers\Controller;
use App\Models\CMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    //about
    public function abouts(Request $request)
    {
        // get the abouts data
        $abouts = CMS::where("page", "about")->where("section", "abouts")->first();
        return view('backend.admin.cms.about.about', compact('abouts'));
    }

    // about create
    public function aboutsCreate()
    {
        return view('backend.admin.cms.about.about-create');
    }

    // about store
    public function aboutsStore(Request $request)
    {
        // form validation
        $validate = Validator::make($request->all(), [
            'page' => 'required',
            'section' => 'required',
            'title' => 'required',
            'sub_title' => 'required',
            'sub_title_2' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'images' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);

        // handaling image upload
        if ($request->hasFile("images")) {
            $image = $request->file("images");
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('about'), $imageName);
        }

        // create the CMS entry 
        $data = CMS::create(
            [
            "page" => $request->page,
            "section" => $request->section,
            "title" => $request->title,
            "sub_title" => $request->sub_title,
            "sub_title_2" => $request->sub_title_2,
            "short_description" => $request->short_description,
            "description" => $request->description,
            "images" => $imageName,
            ]
        );

        // check if data created
        if ($data) {
            flash()->success('About page created successfully');
            return redirect()->route('abouts');
        } else {    
            flash()->error('Data create failed!');
            return redirect()->back(); 
        }
    }

    // about edit
    public function aboutsEdit($id) 
    {
        $abouts = CMS::where('page', 'about')->where('section', 'abouts')->where('id', $id)->first();
        return view('backend.admin.cms.about.about-edit', compact('abouts'));
    }

    // about update
    public function aboutsUpdate(Request $request, $id)
    {
        // form validation
        $validate = Validator::make($request->all(), [
            'page' => 'required',
            'section' => 'required',
            'title' => 'required',
            'sub_title' => 'required',
            'sub_title_2' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'images' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg',
        ]);

        // get the abouts data
        $abouts = CMS::where('page', 'about')->where('section', 'abouts')->where('id', $id)->first();
        // handaling image upload
        if ($request->hasFile("images")) {
            $image = $request->file("images");
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('about'), $imageName);
            $image_path = public_path('about/'.$abouts->images);
            if(File::exists($image_path))
            {
            File::delete($image_path);
            }
            $abouts->images = $imageName;
        }

        // create the CMS entry 
        $data = $abouts->update(
            [
            "page" => $request->page,
            "section" => $request->section,
            "title" => $request->title,
            "sub_title" => $request->sub_title,
            "sub_title_2" => $request->sub_title_2,
            "short_description" => $request->short_description,
            "description" => $request->description,
            ]
        );

        // check if data updated
        if ($data) {
            flash()->success('About page update successfully');
            return redirect()->route('abouts');
        } else {    
            flash()->error('Data update failed!');
            return redirect()->back(); 
        }
    }

}
