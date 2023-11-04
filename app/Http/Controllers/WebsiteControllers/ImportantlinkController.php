<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;
use App\Models\ContentManagementDetails;

class ImportantlinkController extends Controller
{
    public function importantlink()
    {
        $importantlinks = ContentManagementDetails::where('content_management_id', 19)->get();
        // dd($importantlinks);
        return view('importantlink', compact('importantlinks'));
    }
}
