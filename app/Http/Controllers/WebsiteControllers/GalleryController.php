<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function gallery()
    {
        return view('gallery');
    }
}
