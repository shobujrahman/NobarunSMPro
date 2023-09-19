<?php

namespace App\Http\Controllers\WebControllers\Teachers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home()
    {
        return view('teacher.dashboard.index');
    }
}