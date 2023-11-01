<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;
use App\Models\ContentManagementDetails;

class AdmissionController extends Controller
{
    public function admission()
    {
        $admissionDetails = ContentManagementDetails::where('content_management_id', '=', 15)->get();
        return view('admission', compact('admissionDetails'));
    }
}
