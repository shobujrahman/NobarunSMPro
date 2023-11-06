<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;
use App\Models\ContentManagement;
use App\Models\ContentManagementDetails;
use App\Models\MemberType;

class AdministrativeController extends Controller
{
    public function administrative()
    {
        $administrativeDetails = ContentManagementDetails::where('content_management_id', '=', 12)->get();
        $members = MemberType::with('member_details')->get();
        $image = ContentManagement::where('id', 10)->first();
        // dd($members);
        return view('administrative', compact(['administrativeDetails', 'members', 'image']));
    }
}
