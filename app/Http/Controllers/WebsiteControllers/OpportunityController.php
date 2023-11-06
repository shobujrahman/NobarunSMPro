<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;
use App\Models\ContentManagement;
use App\Models\ContentManagementDetails;

class OpportunityController extends Controller
{
    public function opportunity()
    {
        $opprtunityDetails = ContentManagementDetails::where('content_management_id', '=', 14)->get();
        $image = ContentManagement::where('id', 10)->first();
        return view('opportunity', compact(['opprtunityDetails', 'image']));
    }
}
