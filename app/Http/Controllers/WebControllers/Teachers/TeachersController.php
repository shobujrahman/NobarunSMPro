<?php

namespace App\Http\Controllers\WebControllers\Teachers;

use App\Http\Controllers\Controller;

class TeachersController extends Controller
{
    public function home()
    {
        return view('teacher.dashboard.index');
    }
}
