<?php

namespace App\Http\Controllers\WebControllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function adminLoginHome()
    {
        return view('login.admin.index');
    }

    public function studentLoginHome()
    {
        return view('login.student.index');
    }

    public function teacherLoginHome()
    {
        return view('login.teacher.index');
    }
}
