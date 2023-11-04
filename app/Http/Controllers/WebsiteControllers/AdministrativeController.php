<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;
use App\Models\ContentManagementDetails;
use App\Models\MemberType;

class AdministrativeController extends Controller
{
    public function administrative()
    {
        $administrativeDetails = ContentManagementDetails::where('content_management_id', '=', 12)->get();
        $members = MemberType::with('member_details')->get();
        // dd($members);
        return view('administrative', compact(['administrativeDetails', 'members']));
    }
}
