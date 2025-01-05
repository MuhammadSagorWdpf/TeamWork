<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Appoinment;
use App\Models\Client;
use App\Models\CMS;
use App\Models\Psychologist;
use App\Models\Slot;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function accountType()
    {
        return view('forntend.layouts.homepage.account-type');
    }
    public function about()
    {
        $psychologists = Psychologist::all();
        $faqs = CMS::where('page','home')->where('section','faqs')->get();
        $abouts = CMS::where('page','about')->where('section','abouts')->first();

        return view('forntend.layouts.homepage.about', compact('psychologists','faqs','abouts'));
    }
    public function services()
    {
        $articles = CMS::where('page','home')->where('section','articles')->get();
        $services = CMS::where('page','service')->where('section','services')->first();
        return view('forntend.layouts.homepage.services', compact('articles','services'));
    }
    public function psychologist()
    {
        $psychologistData = Psychologist::all();
        $psychologist = CMS::where('page', 'home')->where('section', 'psychologists')->first();
        return view('forntend.layouts.homepage.psychologist', compact('psychologist','psychologistData'));
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


    public function apointmentStore(Request $request)
    {
       $request->validate([
            'first_name'=> 'required',
            'last_name'=> 'required',
            'email'=> 'required',
            'phone'=> 'required',
            'age'=> 'required',
            'consultation_type'=> 'required',
            'date'=> 'required',
            'slot'=> 'required',
            'fees'=> 'required',    
            'message'=> 'required',
        ]);
        
        $user = Auth::user()->email;
        $client = Client::where("email", $user)->pluck('id')->first();

        // return $client;

        $appoinmentsAvableSlots = Appoinment::where("date", $request->date)->where('slot', $request->slot)->exists();
        // return $appoinmentsAvableSlots;
        
        // already booked slots check
        if($appoinmentsAvableSlots)
        {
            flash()->error('Appoinment time slot already booked!');
            return redirect()->back();
        } 

        $data = Appoinment::create([
            'first_name'=> $request->first_name,
            'last_name'=> $request->last_name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'consultation_type'=> $request->consultation_type,
            'date'=> $request->date,
            'slot'=> $request->slot,            
            'message'=> $request->message,
            'age'=> $request->age,
            'client_id'=> $client,
            'psychologist_id'=> $request->psychologist_id,
            'fees'=> $request->fees,
        ]);

        if($data){
            flash()->success("Appoinment created successfully");
            return redirect()->back();
        }else{
            flash()->error("Data create failed!");
            return redirect()->back();
        }
    }

    public function clientInfo(Request $request)
    {
        return view('forntend.layouts.homepage.client_info');
    }

    public function clientInfoStore(Request $request)
    {
        $request->validate([
            'first_name'=> 'required',
            'last_name'=> 'required',
            'email'=> 'required',
            'gender'=> 'required',
            'dob'=> 'required',
            'phone_number'=> 'required',
            'state'=> 'required',
            'city'=> 'required',
            'postal_code'=> 'required',
            'therapy_type'=> 'required',
            'area_of_focus'=> 'required',
            'password'=> 'required',
            'image'=> 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);

        // handaling image upload
        if ($request->hasFile("image")) {
            $image = $request->file("image");
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('client'), $imageName);
        }

        $user =User::create([
            'name'=> $request->first_name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
        ]);

        $data = Client::create([
            'first_name'=> $request->first_name,
            'last_name'=> $request->last_name,
            'email'=> $request->email,
            'gender'=> $request->gender,
            'dob'=> $request->dob,
            'phone_number'=> $request->phone_number,
            'state'=> $request->state,
            'city'=> $request->city,
            'postal_code'=> $request->postal_code,
            'therapy_type'=> $request->therapy_type,
            'area_of_focus'=> $request->area_of_focus,
            'password'=> Hash::make($request->password),
            'image'=> $imageName,
            'user_id'=> $user->id,
        ]);

        

        if($data){
            flash()->success("Client created successfully");
            return redirect()->back();
        }else{
            flash()->error("Data create failed!");
            return redirect()->back();
        }
    }
}
