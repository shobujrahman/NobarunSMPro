<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;
use App\Models\ContentManagementDetails;

class AdministrativeController extends Controller
{
    public function administrative()
    {
        $administrativeDetails = ContentManagementDetails::where('content_management_id', '=', 12)->get();
        return view('administrative', compact('administrativeDetails'));
    }
}
