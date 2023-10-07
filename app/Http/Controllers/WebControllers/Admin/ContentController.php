<?php

namespace App\Http\Controllers\WebControllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        return view('admin.content.index');
    }

    public function add()
    {
        return view('admin.content.add');
    }

    public function edit()
    {
        return view('admin.content.edit');
    }

    public function detailsindex()
    {
        return view('admin.content.details_index');
    }

    public function detailsadd()
    {
        return view('admin.content.details_add');
    }

    public function detailsedit()
    {
        return view('admin.content.details_edit');
    }
}
