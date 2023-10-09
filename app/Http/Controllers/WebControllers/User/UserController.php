<?php

namespace App\Http\Controllers\WebControllers\User;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function aboutUs()
    {
        return view('about');
    }

    public function contactUs()
    {
        return view('contact');
    }

    public function administrative()
    {
        return view('administrative');
    }

    public function academic()
    {
        return view('academic');
    }

    public function opportunity()
    {
        return view('opportunity');
    }

    public function admission()
    {
        return view('admission');
    }

    public function function ()
    {
        return view('function');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function notice()
    {
        return view('notice');
    }

    public function importantlink()
    {
        return view('importantlink');
    }
}
