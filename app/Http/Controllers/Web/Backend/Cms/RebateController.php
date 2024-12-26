<?php

namespace App\Http\Controllers\Web\Backend\Cms;

use App\Http\Controllers\Controller;
use App\Models\CMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class RebateController extends Controller
{
    //rebates
    public function rebates(Request $request)
    {
        $rebates = CMS::where("page", "home")->where("section", "rebates")->first();
        return view('backend.admin.cms.rebates.rebates', compact('rebates'));
    }

    public function rebatesCreate()
    {
        return view('backend.admin.cms.rebates.rebates-create');
    }

    public function rebatesStore(Request $request)
    {
        // form validation
        $request->validate([
            "page" => "required",
            "section" => "required",
            "title" => "required",
            "short_description" => "required",
            "card_title_1" => "required",
            "card_title_2" => "required",
            "card_title_3" => "required",
            "card_desc_1" => "required",
            "card_desc_2" => "required",
            "card_desc_3" => "required",
            "images" => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
        ]);
        
        // handaling image upload
        if ($request->hasFile("images")) {
            $image = $request->file("images");
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('rebate'), $imageName);
        }

        // create the CMS entry
        $data = CMS::create(
            [
            "page" => $request->page,
            "section" => $request->section,
            "title" => $request->title,
            "short_description" => $request->short_description,
            "card_title_1" => $request->card_title_1,
            "card_title_2" => $request->card_title_2,
            "card_title_3" => $request->card_title_3,
            "card_desc_1" => $request->card_desc_1,
            "card_desc_2" => $request->card_desc_2,
            "card_desc_3" => $request->card_desc_3,
            "images" => $imageName,
            ]
        );

        if ($data) {
            flash()->success('Rebates create successfully');
            return redirect()->route('rebates');
        } else {  
            flash()->error('Data create failed!');  
            return redirect()->back(); 
        }
    }

    public function rebatesEdit($id)
    {
        $rebates = CMS::where("page", "home")->where("section", "rebates")->where("id", $id)->first();
        return view('backend.admin.cms.rebates.rebates-edit',compact('rebates'));
    }

    public function rebatesUpdate(Request $request, $id)
    {
       // form validation
       $request->validate([
        "page" => "required",
        "section" => "required",
        "title" => "required",
        "short_description" => "required",
        "card_title_1" => "required",
        "card_title_2" => "required",
        "card_title_3" => "required",
        "card_desc_1" => "required",
        "card_desc_2" => "required",
        "card_desc_3" => "required",
        "images" => "nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
    ]);
    
    $rebates = CMS::where("page", "home")->where("section", "rebates")->where("id", $id)->first();
    // handaling image upload
    if ($request->hasFile("images")) {
        $image = $request->file("images");
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('rebate'), $imageName);
        $image_path = public_path('rebate/'.$rebates->images);
        if(File::exists($image_path))
        {
        File::delete($image_path);
        }
        $rebates->images = $imageName;
    } 

    // create the CMS entry
    $data = $rebates->update(
        [
        "page" => $request->page,
        "section" => $request->section,
        "title" => $request->title,
        "short_description" => $request->short_description,
        "card_title_1" => $request->card_title_1,
        "card_title_2" => $request->card_title_2,
        "card_title_3" => $request->card_title_3,
        "card_desc_1" => $request->card_desc_1,
        "card_desc_2" => $request->card_desc_2,
        "card_desc_3" => $request->card_desc_3,
        ]
    );

    if ($data) {
        flash()->success('Rebates Update successfully');
        return redirect()->route('rebates');
    } else {  
        flash()->error('Data Update failed!');  
        return redirect()->back(); 
    } 
    }
}
