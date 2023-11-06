<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;
use App\Models\ContentManagement;
use App\Models\ContentManagementDetails;

class AboutController extends Controller
{
    public function aboutUs()
    {
        $aboutDetails = ContentManagementDetails::where('content_management_id', '=', 11)->get();

        $aboutImage = ContentManagement::where('id', 11)->first();
        return view('about', compact(['aboutDetails', 'aboutImage']));
    }
}