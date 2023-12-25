<?php

namespace App\Http\Controllers\AdminPanelControllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherAccessController extends Controller
{
    public function index()
    {
        return View ('admin.teacheraccess.index');
    }

    public function add()
    {
        return View ('admin.teacheraccess.add');
    }

    public function edit()
    {
        return View ('admin.teacheraccess.edit');
    }

    public function teacherViewProfile()
    {
        return View ('admin.teacheraccess.teacherviewprofile');
    }
}
