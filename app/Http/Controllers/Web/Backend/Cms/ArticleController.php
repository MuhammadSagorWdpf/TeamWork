<?php

namespace App\Http\Controllers\Web\Backend\Cms;

use App\Http\Controllers\Controller;
use App\Models\CMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    public function articleStore(Request $request)
    {
        $request->validate([
            "page" => "required",
            "section" => "required",
            "title" => "required",
            "sub_title" => "required",
            "description" => "required",
            "date" => "required|date",
            "images" => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
        ]);

        //get existing data
        //$article = CMS::where("page","home")->where("section","articles")->first();
        
        // handaling image upload
        if ($request->hasFile("images")) {
            $image = $request->file("images");
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('article'), $imageName);
        }

        // create the CMS entry
        $data = CMS::Create(
            [
            "page" => $request->page,
            "section" => $request->section,
            "title" => $request->title,
            "sub_title" => $request->sub_title,
            "description" => $request->description,
            "date" => $request->date,
            "images" => $imageName,
            ]
        );

        if ($data) {
            flash()->success('Article created successfully');
            return redirect()->route('articles');
        } else {   
            flash()->error('Data create failed!'); 
            return redirect()->back(); 
        }
    }

    public function articleUpdate(Request $request, $id)
    {
        $request->validate([
            "page" => "required",
            "section" => "required",
            "title" => "required",
            "sub_title" => "required",
            "description" => "required",
            "date" => "required|date",
            "images" => "nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
        ]);
        $article = CMS::where('page', 'home')->where('section', 'articles')->where('id', $id)->first();
        
        // handaling image upload
        if ($request->hasFile("images")) {
            $image = $request->file("images");
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('article'), $imageName);
            $image_path = public_path('article/'.$article->images);
            if(File::exists($image_path))
            {
            File::delete($image_path);
            }
            $article->images = $imageName;
        } 

        // Update or create the CMS entry
        $data = $article->update(
            [
            "page" => $request->page,
            "section" => $request->section,
            "title" => $request->title,
            "sub_title" => $request->sub_title,
            "description" => $request->description,
            "date" => $request->date,
            ]
        );

        if ($data) {
            flash()->success("Article updated successfully");
            return redirect()->route('articles');
        } else {   
            flash()->error('Data update failed!'); 
            return redirect()->back(); 
        }

    }
    // delete articles
    public function articleDelete($id)
    {
        $article = CMS::where('page', 'home')->where('section', 'articles')->where('id', $id)->first();
        $image_path = public_path('article/'.$article->images);
        if(File::exists($image_path))
        {
        File::delete($image_path);
        }
        $article->delete();

        flash()->success('Article deleted successfully');
        return redirect()->route('articles');
    }
}


