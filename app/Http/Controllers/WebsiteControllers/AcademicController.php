<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;
use App\Models\AcademicUserView;
use App\Models\ContentManagement;

class AcademicController extends Controller
{
    public function academic()
    {
        $academicDetails = AcademicUserView::get();
        $image = ContentManagement::where('id', 10)->first();
        return view('academic', compact(['academicDetails', 'image']));
    }
}
