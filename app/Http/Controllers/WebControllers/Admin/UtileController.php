<?php

namespace App\Http\Controllers\WebControllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UtileController extends Controller
{

    public function academicuserviewindex()
    {
        return view('admin.academic.userviewindex');
    }

    public function academicuserviewadd()
    {
        return view('admin.academic.userviewadd');
    }

    public function academicuserviewedit()
    {
        return view('admin.academic.userviewedit');
    }

    public function noticeindex()
    {
        return view('admin.utile.index');
    }

    public function noticeadd()
    {
        return view('admin.utile.add');
    }

    public function noticeedit()
    {
        return view('admin.utile.edit');
    }

    public function communicationindex()
    {
        return view('admin.communication.index');
    }
}
