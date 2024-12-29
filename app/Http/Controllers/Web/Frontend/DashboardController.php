<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class DashboardController extends Controller
{
    public function clientDashboard()
    {
        return view('backend.client.dashboard');
    }

    public function clientAppoinment(){
        return view('backend.client.appoinment');
    }

    public function clientDoctor(){
        return view('backend.client.doctor');
    }

    public function doctorProfile(){
        return view('components.doctor_profile');
    }

    public function clientSetting(Request $request){
        $user = Auth::user()->email;
        $setting = Client::where('email', $user)->first();
        return view('backend.client.setting', compact('setting'));
    }

    public function clientSettingUpdate(Request $request, $id)
    {
        // validation
        $request->validate([
            'first_name'=> 'nullable',
            'last_name'=> 'nullable',
            'email'=> 'nullable',
            'gender'=> 'nullable',
            'dob'=> 'nullable',
            'phone_number'=> 'nullable',
            'state'=> 'nullable',
            'city'=> 'nullable',
            'postal_code'=> 'nullable',
            'therapy_type'=> 'nullable',
            'area_of_focus'=> 'nullable',
            'password'=> 'nullable',
            'image'=> 'nullable|image|mimes:jpg,png,jpeg,gif,svg',
        ]);

        
        // get login user
        $user = Auth::user()->email;
        $client = Client::where('email', $user)->where('id', $id)->first();
        // return $client;

        //hendaling image upload
        if ($request->hasFile("image")) {
            $image = $request->file("image");
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('client'), $imageName);
            $image_path = public_path('client/'.$client->image);
            if(File::exists($image_path))
            {
            File::delete($image_path);
            }
            $client->image = $imageName;
        } 
        
        // update the client data
        $data = $client->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'email' => $request->email,
            'address' => $request->address,
            'password' => $request->password,
        ]);

        // get user id
        $user_id = Auth::user();
        // return $user_id;
        // update the user password
        $user_id->update([
            'password' => $request->password,
        ]);
        // return 
        if($data)
        {
            flash()->success('Profile Updated Successfully');
            return redirect()->back();
        }  
        else{
            flash()->error('Profile Update Failed!');
            return redirect()->back();
        };
    }
}

