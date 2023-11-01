<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;
use App\Models\ContentManagementDetails;

class FunctionController extends Controller
{
    public function function ()
    {
        $functionDetails = ContentManagementDetails::where('content_management_id', '=', 16)->get();
        return view('function', compact('functionDetails'));
    }
}
