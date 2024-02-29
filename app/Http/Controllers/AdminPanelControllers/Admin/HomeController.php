<?php

namespace App\Http\Controllers\AdminPanelControllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminDetails;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        return view('admin.dashboard.index');
    }

    public function showAdminProfile()
    {
        // $adminProfile = User::where('role', 1)->first();
        // $adminProfile = Auth::user();
        $adminProfile = AdminDetails::with('user')->where('user_id', Auth::user()->id)->first();
        return view('admin.profile.index', compact('adminProfile'));
    }

    public function editAdminProfile()
    {
        $adminDetails = AdminDetails::with('user')->where('user_id', Auth::user()->id)->first();
        // dd($adminProfile);
        return view('admin.profile.edit_profile', compact('adminDetails'));
    }
// update admin profile
    public function updateAdminProfile(Request $request)
    {
        $admin = Auth::user();

        $adminDetails = AdminDetails::where('user_id', $admin->id)->first();
        // dd($adminDetails);
        //if admin has any profile then update it otherwise create new profile
        if ($adminDetails) {
            $adminDetails->first_name = $request->input('first_name');
            $adminDetails->last_name = $request->input('last_name');
            $adminDetails->designation = $request->input('designation');
            $adminDetails->contact = $request->input('contact');
            $adminDetails->street = $request->input('street');
            $adminDetails->city = $request->input('city');
            $adminDetails->division = $request->input('division');
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->getClientOriginalExtension();
                $path = $request->image->move(public_path('admin_assets/images/admin-images'), $imageName);
                $adminDetails->image = $imageName;
            }

            $adminDetails->update();
        } else {
            $adminDetails = new AdminDetails();
            $adminDetails->user_id = $admin->id;
            $adminDetails->first_name = $request->input('first_name');
            $adminDetails->last_name = $request->input('last_name');
            $adminDetails->designation = $request->input('designation');
            $adminDetails->contact = $request->input('contact');
            $adminDetails->street = $request->input('street');
            $adminDetails->city = $request->input('city');
            $adminDetails->division = $request->input('division');
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->getClientOriginalExtension();
                $path = $request->image->move(public_path('admin_assets/images/admin-images'), $imageName);
                $adminDetails->image = $imageName;
            }
            $adminDetails->save();
        }

        return view('admin.profile.edit_profile', compact('adminDetails'));
    }
}