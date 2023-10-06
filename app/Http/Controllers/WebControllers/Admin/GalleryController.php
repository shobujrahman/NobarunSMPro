<?php

namespace App\Http\Controllers\WebControllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        return view('admin.gallery.index');
    }

    public function add()
    {
        return view('admin.gallery.add');
    }

    public function edit()
    {
        return view('admin.gallery.edit');
    }

    public function detailsindex()
    {
        return view('admin.gallery.details_index');
    }

    public function detailsadd()
    {
        return view('admin.gallery.details_add');
    }

    public function detailsedit()
    {
        return view('admin.gallery.details_edit');
    }
}
