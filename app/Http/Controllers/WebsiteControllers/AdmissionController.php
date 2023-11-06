<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;
use App\Models\ContentManagement;
use App\Models\ContentManagementDetails;

class AdmissionController extends Controller
{
    public function admission()
    {
        $admissionDetails = ContentManagementDetails::where('content_management_id', '=', 15)->get();
        $image = ContentManagement::where('id', 10)->first();
        return view('admission', compact(['admissionDetails', 'image']));
    }
}
