<?php

namespace App\Http\Controllers\Web\Backend\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CMS;

class FaqsController extends Controller
{
    //faqs
    public function faqs()
    {
        $faqs = CMS::where("page","home")->where("section","faqs")->get();
        return view('backend.admin.cms.faq.faqs',compact('faqs'));
    }

    public function faqsCreate()
    {
        return view('backend.admin.cms.faq.faqs-create');
    }

    public function faqsStore(Request $request)
    {
        $request->validate([
            "page" => "required",
            "section" => "required",
            "title" => "required",
            "question" => "required",
            "answer" => "required",
        ]);

        // create the CMS entry
        $data = CMS::Create(
            [
            "page" => $request->page,
            "section" => $request->section,
            "title" => $request->title,
            "question" => $request->question,
            "answer" => $request->answer,
            ]
        );

        if ($data) {
            flash()->success('faqs created successfully');
            return redirect()->route('faqs');
        } else {    
            flash()->error('Data create failed!');
            return redirect()->back(); 
        } 
    }

    public function faqsUpdate(Request $request, $id)
    {
        $request->validate([
            "page" => "required",
            "section" => "required",
            "title" => "required",
            "question" => "required",
            "answer" => "required",
        ]);

        $faqs = CMS::where("page","home")->where("section","faqs")->where("id", $id)->first();
        // create the CMS entry
        $data = $faqs->update(
            [
            "page" => $request->page,
            "section" => $request->section,
            "title" => $request->title,
            "question" => $request->question,
            "answer" => $request->answer,
            ]
        );

        if ($data) {
            flash()->success("faqs updated successfully");
            return redirect()->route('faqs');
        } else {    
            flash()->error('Data update failed!');
            return redirect()->back(); 
        } 
    }
    public function faqEdit($id)
    {
        $faqs = CMS::where('page','home')->where('section','faqs')->where('id', $id)->first();
        return view('backend.admin.cms.faq.faqs-edit',compact('faqs'));
    }

    public function faqDelete($id)
    {
        $faq = CMS::where('page', 'home')->where('section', 'faqs')->where('id', $id)->first();
        $faq->delete();

        flash()->success('faq deleted successfully');
        return redirect()->route('faqs');
    }
}
