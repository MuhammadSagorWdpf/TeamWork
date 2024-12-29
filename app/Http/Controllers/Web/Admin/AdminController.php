<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('backend.admin.layouts.adminDashboard');
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
