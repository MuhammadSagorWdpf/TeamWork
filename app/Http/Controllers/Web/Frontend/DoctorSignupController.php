<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Psychologist;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DoctorSignupController extends Controller
{
    public function storeDoctor(Request $request)
    {
        $request->validate([
            "first_name" => "required",
            "last_name" => "required",
            "dob" => "required",
            "gender" => "required",
            "phone_number" => "required",
            "language"=> "required",
            "email"=> "required|email",
            "password"=> "required",
            "description"=> "required",
            "qualification"=> "required",
            "registration_number"=> "required",
            "practice_name"=> "required",
            "practice_address"=> "required",
            "therapy_type"=> "required",
            "client_age_served"=> "required",
            "session_length"=> "required",
            "session_fee"=> "required",
            "medicare_amount"=> "required",
            "expertise_area"=> "required",
            "experience"=> "required",
            "certificate_image"=> "required|image|mimes:jpg,png,jpeg,gif,svg",
            "profile_image"=> "required|image|mimes:jpg,png,jpeg,gif,svg",
        ]);
        //handaling image upload
        if( $request->hasFile("profile_image") ) {
            $file = $request->file("profile_image");
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('doctor/profile'), $imageName);
        }
        

        //handaling certificate image upload
        if( $request->hasFile("certificate_image") ) {
            $file = $request->file("certificate_image");
            $certificateImage = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('doctor/certificate'), $certificateImage);
        }
        $data = Psychologist::create([
            "first_name"=> $request->first_name,
            "last_name"=> $request->last_name,
            "dob"=> $request->dob,
            "gender"=> $request->gender,
            "phone_number"=> $request->phone_number,
            "language"=> $request->language,
            "email"=> $request->email,
            "password"=> Hash::make($request->password),
            "description"=> $request->description,
            "qualification"=> $request->qualification,
            "registration_number"=> $request->registration_number,
            "practice_name"=> $request->practice_name,
            "practice_address"=> $request->practice_address,
            "therapy_type"=> $request->therapy_type,
            "client_age_served"=> $request->client_age_served,
            "session_length"=> $request->session_length,
            "session_fee"=> $request->session_fee,
            "medicare_amount"=> $request->medicare_amount,
            "expertise_area"=> $request->expertise_area,
            "experience"=> $request->experience,
            "certificate_image"=> $certificateImage,
            "profile_image"=> $imageName,
        ]);
        
        User::create([
            "name"=> $request->first_name,
            "email"=> $request->email,
            "password"=> Hash::make($request->password),
        ]);


        if($data) {
            flash()->success('Psychologist created successfully');
            return redirect()->route('home');
        } else {
            flash()->error('Data create failed!');
            return redirect()->back();
        }
    }
}
