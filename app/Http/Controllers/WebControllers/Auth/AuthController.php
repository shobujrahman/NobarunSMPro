<?php

namespace App\Http\Controllers\WebControllers\Auth;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function adminLoginForm()
    {
        return view('login.admin.index');
    }

    public function studentLoginForm()
    {
        return view('login.student.index');
    }

    public function teacherLoginForm()
    {
        return view('login.teacher.index');
    }
}