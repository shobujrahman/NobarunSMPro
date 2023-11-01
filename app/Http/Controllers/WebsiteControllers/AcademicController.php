<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;
use App\Models\AcademicUserView;

class AcademicController extends Controller
{
    public function academic()
    {
        $academicDetails = AcademicUserView::get();
        return view('academic', compact('academicDetails'));
    }
}
