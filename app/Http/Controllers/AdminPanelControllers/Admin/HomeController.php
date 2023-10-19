<?php

namespace App\Http\Controllers\AdminPanelControllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class HomeController extends Controller
{
    public function home()
    {
        return view('admin.dashboard.index');
    }

    public function showprofile()
    {
        $adminProfile = User::where('role', 1)->first();
        return view('admin.profile.index', compact('adminProfile'));
    }

    public function editprofile()
    {
        return view('admin.profile.edit_profile');
    }
}
