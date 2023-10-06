<?php

namespace App\Http\Controllers\WebControllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        return view('admin.member.index');
    }

    public function add()
    {
        return view('admin.member.add');
    }

    public function edit()
    {
        return view('admin.member.edit');
    }

    public function detailsindex()
    {
        return view('admin.member.details_index');
    }

    public function detailsadd()
    {
        return view('admin.member.details_add');
    }

    public function detailsedit()
    {
        return view('admin.member.details_edit');
    }
}
