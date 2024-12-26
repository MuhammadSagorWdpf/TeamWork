<?php

namespace App\Http\Controllers\Web\Backend\Cms;

use App\Http\Controllers\Controller;
use App\Models\CMS;
use Illuminate\Http\Request;

class PsychologistController extends Controller
{
      //psychologists
      public function psychologists(Request $request)
      {
        $psychologists = CMS::where("page", "home")->where("section", "psychologists")->first();
          return view('backend.admin.cms.psychologists.psychologist', compact('psychologists'));
      }
  
      // psychologists create
      public function psychologistsCreate()
      {
          return view('backend.admin.cms.psychologists.psychologist-create');
      }

      // psychologists store
      public function psychologistsStore(Request $request)
      {
         // form validation
         $request->validate([
            "page" => "required",
            "section" => "required",
            "title" => "required",
            "short_description" => "required",
            "btn_text" => "required",
            "card_title_1" => "required",
            "card_title_2" => "required",
            "card_title_3" => "required",
            "card_desc_1" => "required",
            "card_desc_2" => "required",
            "card_desc_3" => "required",
        ]);

        // create the CMS entry
        $data = CMS::create(
            [
            "page" => $request->page,
            "section" => $request->section,
            "title" => $request->title,
            "short_description" => $request->short_description,
            "btn_text" => $request->btn_text,
            "card_title_1" => $request->card_title_1,
            "card_title_2" => $request->card_title_2,
            "card_title_3" => $request->card_title_3,
            "card_desc_1" => $request->card_desc_1,
            "card_desc_2" => $request->card_desc_2,
            "card_desc_3" => $request->card_desc_3,
            ]
        );

        if ($data) {
            flash()->success("psychologists created successfully");
            return redirect()->route('psychologists');
        }else{
            flash()->error('Data create failed!');  
            return redirect()->back();
        }
      }

      // psychologists edit
      public function psychologistsEdit($id)
      {
          $psychologists = CMS::where("page", "home")->where("section", "psychologists")->first();
          return view('backend.admin.cms.psychologists.psychologist-edit', compact('psychologists'));
      }

      // psychologists update
      public function psychologistsUpdate(Request $request, $id)
      {
         // form validation
         $request->validate([
            "page" => "required",
            "section" => "required",
            "title" => "required",
            "short_description" => "required",
            "btn_text" => "required",
            "card_title_1" => "required",
            "card_title_2" => "required",
            "card_title_3" => "required",
            "card_desc_1" => "required",
            "card_desc_2" => "required",
            "card_desc_3" => "required",
        ]);

        // get the CMS entry
        $psychologist = CMS::where("page", "home")->where("section", "psychologists")->where("id", $id)->first();
        // update the CMS entry
        $data = $psychologist->update([
            "page"=> $request->page,
            "section" => $request->section,
            "title" => $request->title,
            "short_description" => $request->short_description,
            "btn_text" => $request->btn_text,
            "card_title_1" => $request->card_title_1,
            "card_title_2" => $request->card_title_2,
            "card_title_3" => $request->card_title_3,
            "card_desc_1" => $request->card_desc_1,
            "card_desc_2" => $request->card_desc_2,
            "card_desc_3" => $request->card_desc_3,
        ]);

        // flash message
        if ($data) {
            flash()->success("psychologists updated successfully");
            return redirect()->route('psychologists');
        }else{
            flash()->error('Data update failed!');  
            return redirect()->back();
        }
      }

      // psychologists stsatus update
      public function psychologistsStatus(Request $request, $id)
      {
        $psychologists = CMS::where("page", "home")->where("section", "psychologists")->where("id", $id)->first();
       // $articles = CMS::where("page", "home")->where("section", "articles")->where("id", $id)->first();
        $psychologistsStatus = $psychologists->status;
        if ($psychologistsStatus == 1) {
            $data = $psychologists->update([
                "status" => 0
            ]);
        }else{
            $data = $psychologists->update([
                "status" => 1
            ]);
        }
        if ($data) {
            flash()->success("psychologists status updated successfully");
            return redirect()->route('psychologists');
        }else{
            flash()->error('Data update failed!');  
            return redirect()->back();
        }
      }
}
