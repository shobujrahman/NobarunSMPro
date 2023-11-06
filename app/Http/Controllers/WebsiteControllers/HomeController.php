<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;
use App\Models\ContentManagement;

class HomeController extends Controller
{
    public function home()
    {
        $home = ContentManagement::where('id', 10)->first();
        // dd($home);
        return view('index', compact('home'));
    }

}
