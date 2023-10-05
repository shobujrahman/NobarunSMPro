<?php

namespace App\Http\Controllers\WebControllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('admin.dashboard.index');
    }

    public function showprofile()
    {
        return view('admin.profile.index');
    }

    public function editprofile()
    {
        return view('admin.profile.edit_profile');
    }
}
