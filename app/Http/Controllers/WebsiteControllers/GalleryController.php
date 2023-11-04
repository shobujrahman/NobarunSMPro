<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;
use App\Models\GalleryType;

class GalleryController extends Controller
{
    public function gallery()
    {
        $gallery = GalleryType::with('gallery_details')->get();
        return view('gallery', compact('gallery'));
    }
}
