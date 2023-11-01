<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;
use App\Models\ContentManagementDetails;

class AboutController extends Controller
{
    public function aboutUs()
    {
        $aboutDetails = ContentManagementDetails::where('content_management_id', '=', 11)->get();

        return view('about', compact('aboutDetails'));
    }
}
