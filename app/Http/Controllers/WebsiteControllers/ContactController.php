<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function contactUs()
    {
        return view('contact');
    }

}
