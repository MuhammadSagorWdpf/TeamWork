<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appoinment;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            // Get the data from the Cms model
            $data = Client::with('user')->get();
            // Return DataTables response
            return DataTables::of($data)
                ->addIndexColumn()
                // Action buttons column with custom buttons (Edit, Delete)
                ->addColumn('image', function ($row) {
                    return '<img src="'.asset('client/'.$row->image).'" width="30%" height="30%">';
                })
                ->rawColumns(['image'])
                // Return the DataTables response
                ->make(true);
        }

        $totalEarnings = Appoinment::pluck('fees')->sum();
        $totalClient = User::where('role', 'client')->count();
        $totalAppoinments = Appoinment::count();
        return view('backend.admin.layouts.adminDashboard',compact('totalEarnings','totalClient','totalAppoinments'));
    }
    public function appointments()
    {
        return view('backend.admin.layouts.appointments');
    }

    public function schedul()
    {
        return view('backend.admin.layouts.schedul');
    }

    public function invoice()
    {
        return view('backend.admin.layouts.invoice');
    }

    public function message()
    {
        return view('backend.admin.layouts.message');
    }
    public function adminSettings()
    {
        $setting = Auth::user();
        return view('backend.admin.partials.setting', compact('setting'));
    }

    public function adminSettingUpdate(Request $request, $id)
    {
        $admin = User::find($id);
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
        ]);
        $data = $admin->update([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> bcrypt($request->password),
        ]);
        if ($data) {
            flash()->success('Profile Updated Successfully');
            return redirect()->back();
        } else {
            flash()->error('Data update failed!');
            return redirect()->back();
        }
    }
}
