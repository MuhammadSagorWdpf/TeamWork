<?php

namespace App\Http\Controllers\Web\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Appoinment;
use App\Models\Psychologist;
use App\Models\Slot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\Datatables;


class DoctorController extends Controller
{
    // doctor dashboard
    public function index()
    {
        return view("backend.doctor.layouts.doctorDashboard");
    }

    // slots page
    public function slots(Request $request)
    {
        if ($request->ajax()) {
            // Get the data from the Cms model
            $data = Slot::query();
            // Return DataTables response
            return DataTables::of($data)
                ->addIndexColumn()
                // Action buttons column with custom buttons (Edit, Delete)
                ->addColumn('action', function ($row) {
                    return '
                    <a href="'.route('slot.edit', $row->id).'" class="edit"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a onclick="deleteData(event)" href="'.route('slot.delete', $row->id).'" class="edit"><i class="fa-solid fa-trash"></i></a>
                    ';
                })
                ->rawColumns(['action'])
                // Return the DataTables response
                ->make(true);
        }
        return view('backend.doctor.cms.slot.slot');
    }

    
    // slots create
    public function slotsCreate()
    {
        return view("backend.doctor.cms.slot.slot-create");
    }

    // slots store
    public function slotsStore(Request $request)
    {
        // dd($request->all());
        // form validation
        $request->validate([
            "day" => "required",
            "slot" => "required",
            "slot_date"=> "required",
        ]);

        // get the user
        $doctor = Auth::user()->email;
        $psychologist_id = Psychologist::where('email', $doctor)->first()->id;

        // insert data
        $data = new Slot();
        $data->day = $request->day;
        $data->psychologist_id = $psychologist_id;
        $data->slot = $request->slot;
        $data->slot_date = $request->slot_date;

        $data->save();
        // check the data insert
        if ($data) {
            flash()->success("slot created successfully");
            return redirect()->route("slots");
        } else {
            flash()->error("Data create failed!");
            return redirect()->back();
        }
    }

    // edit slots
    public function slotsEdit(Request $request, $id)
    {
        $psychologist = Slot::find($id);
        return view("backend.doctor.cms.slot.slot-edit", compact("psychologist"));
    }

    // update slots
    public function slotsUpdate(Request $request, $id)
    {
        $request->validate([
            "day" => "required",
            "slot" => "required",
            "slot_date"=> "required",
        ]);

        $psychologist = Slot::find($id);
        $psychologist->day = $request->day;
        $psychologist->slot = $request->slot;
        $psychologist->slot_date = $request->slot_date;

        $psychologist->save();

        if ($psychologist) {
            flash()->success("slot updated successfully");
            return redirect()->route("slots");
        } else {
            flash()->error("Data update failed!");
            return redirect()->back();
        }
    }

    // delete slots
    public function slotsDelete($id)
    {
        $doctors = Slot::find($id);
        $doctors->delete();
        flash()->success("slot deleted successfully");
        return redirect()->back();
    }


    // doctor profile
    public function doctorDetail(Request $request, $id)
    {
        $doctorDetail = Psychologist::find($id);
        $therapyTypes = Psychologist::pluck('therapy_type');

        // week name
        $todaydate = Date('Y-m-d');
        $avableSlots = Slot::where("slot_date", $todaydate)->where("psychologist_id", $id)->pluck("slot");

        //$selectDate = Slot::where("day", $todayWeekName)->where("psychologist_id", $id)->pluck("slot_date");

        $startDate = $request->input('date');

        return view("forntend.layouts.homepage.contact", compact("doctorDetail", "therapyTypes", "avableSlots",'startDate'));
    }

    public function doctorSettings()
    {
        $user = Auth::user()->email;
        $setting = Psychologist::where('email', $user)->first();
        return view('backend.doctor.layouts.setting', compact('setting'));
    }

    public function doctorSettingUpdate(Request $request, $id)
    {
        // validation
        $request->validate([
            "first_name" => "nullable",
            "last_name" => "nullable",
            "dob" => "nullable",
            "gender" => "nullable",
            "phone_number" => "nullable",
            "language" => "nullable",
            "email" => "nullable|email",
            "password" => "nullable",
            "description" => "nullable",
            "qualification" => "nullable",
            "registration_number" => "nullable",
            "practice_name" => "nullable",
            "practice_address" => "nullable",
            "therapy_type" => "nullable",
            "client_age_served" => "nullable",
            "session_length" => "nullable",
            "session_fee" => "nullable",
            "medicare_amount" => "nullable",
            "expertise_area" => "nullable",
            "experience" => "nullable",
            "certificate_image" => "nullable|image|mimes:jpg,png,jpeg,gif,svg",
            "profile_image" => "nullable|image|mimes:jpg,png,jpeg,gif,svg",
        ]);


        // get login user
        $user = Auth::user()->email;
        $psychologist = Psychologist::where('email', $user)->where('id', $id)->first();
        // return $client;

        //hendaling image upload
        if ($request->hasFile("profile_image")) {
            $image = $request->file("profile_image");
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('doctor/profile'), $imageName);
            $image_path = public_path('doctor/profile/' . $psychologist->profile_image);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $psychologist->profile_image = $imageName;
        }

        // update the client data
        $data = $psychologist->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // get user id
        $user_id = Auth::user();
        // return $user_id;
        // update the user password
        $data = $user_id->update([
            'password' => $request->password,
        ]);
        // return 
        if ($data) {
            flash()->success('Profile Updated Successfully');
            return redirect()->back();
        } else {
            flash()->error('Profile Update Failed!');
            return redirect()->back();
        };
    }

    public function selectDate(Request $request)
    {
        $userId = $request->input('psychologist_id');
        $selectedDate = $request->input('date');

        // Query to get slots based on psychologist_id and date
        $matchedData = Slot::where('slot_date', $selectedDate)
                        ->where('psychologist_id', $userId)
                        ->pluck('slot');

        return $matchedData;
    }
}
