<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;
use App\Models\AcademicUserView;

class HomeController extends Controller
{
    public function home()
    {
        return view('index');
    }

    // // home sidebar
    // public function sidebar()
    // {
    //     //get and sum total_student
        
    //     return view('layouts.user_layout.sidebar', compact(['totalStudent', 'totalMaleStudent', 'totalFemaleStudent']));
    // }
}