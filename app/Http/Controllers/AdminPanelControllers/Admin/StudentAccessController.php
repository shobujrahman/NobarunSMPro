<?php

namespace App\Http\Controllers\AdminPanelControllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentAccessController extends Controller
{
    public function index()
    {
        return View ('admin.studentaccess.index');
    }

    public function add()
    {
        return View ('admin.studentaccess.add');
    }

    public function edit()
    {
        return View ('admin.studentaccess.edit');
    }

    public function studentViewProfile()
    {
        return View ('admin.studentaccess.studentviewprofile');
    }

}
