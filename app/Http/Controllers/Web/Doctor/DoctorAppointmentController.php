<?php

namespace App\Http\Controllers\Web\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Appoinment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class DoctorAppointmentController extends Controller
{
    public function doctorAppointment(Request $request)
    {
        if ($request->ajax()) {
            // Get the current user ID
            $doctor = Auth::user()->id;
            // Get the data from the Appoinment model
            $data = Appoinment::where("psychologist_id", $doctor)->with('client')->get();
            // Return DataTables response
            return DataTables::of($data)
                ->addIndexColumn()
                // // Action buttons column with custom buttons (Edit, Delete)
                // ->addColumn('action', function ($row) {
                //     return '
                //     <a href="'.route('appoinment.edit', $row->id).'" class="edit"><i class="fa-solid fa-pen-to-square"></i></a>
                //     <a onclick="deleteData(event)" href="'.route('appoinment.delete', $row->id).'" class="edit"><i class="fa-solid fa-trash"></i></a>
                //     ';
                // })
                // ->rawColumns(['action'])
                // Return the DataTables response
                ->make(true);
        }
        return view("backend.doctor.cms.appointment.appointment");
    }
}
