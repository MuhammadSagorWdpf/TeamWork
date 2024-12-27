<?php

namespace App\Http\Controllers\Web\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Psychologist;
use App\Models\Slot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $slots = Slot::all();
        return view("backend.doctor.cms.slot.slot" , compact("slots"));
    }

    // slots create
    public function slotsCreate()
    {
        return view("backend.doctor.cms.slot.slot-create");
    }

    // slots store
    public function slotsStore(Request $request)
    {
        // form validation
        $request->validate([
            "day"=> "required",
            "slot" => "required",
        ]);

        // get the user
        $doctor = Auth::user();
        $psychologist_id = $doctor->id;

        // insert data
        $data = Slot::create([
            "psychologist_id" => $psychologist_id,
            "day" => $request->day,
            "slot" => $request->slot,
        ]);

        // check the data insert
        if($data){
            flash()->success("slot created successfully");
            return redirect()->route("slots");
        }else{
            flash()->error("Data create failed!");
            return redirect()->back();
        }
    }

    // edit slots
    public function slotsEdit(Request $request, $id)
    {
        $psychologist = Slot::find( $id );
        return view("backend.doctor.cms.slot.slot-edit", compact("psychologist"));
    }

    // update slots
    public function slotsUpdate(Request $request, $id)
    {
        $request->validate([
            "day"=> "required",
            "slot" => "required",
        ]);

        $psychologist = Slot::find( $id );
        $data = $psychologist->update([
            "day"=> $request->day,
            "slot"=> $request->slot
        ]);

        if($data){
            flash()->success("slot updated successfully");
            return redirect()->route("slots");
        }else{
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
    public function doctorDetail($id)
    {
        $doctorDetail = Psychologist::find($id);
        $therapyTypes = Psychologist::pluck('therapy_type');
        //$avableSlots = Slot::where("psychologist_id", $id)->pluck("slot");
        
        // week name
        $todayWeekName = date('l');
        $avableSlots = Slot::where("day", $todayWeekName)->where("psychologist_id", $id)->pluck("slot");

        return view("forntend.layouts.homepage.contact", compact("doctorDetail","therapyTypes","avableSlots"));
    }
}
