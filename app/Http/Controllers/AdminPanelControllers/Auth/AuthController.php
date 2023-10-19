<?php

namespace App\Http\Controllers\AdminPanelControllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    public function adminLoginForm()
    {
        // dd(Hash::make('admin12345678'));
        return view('login.admin.index');
    }
    public function adminLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->pass], true)) {
            if (Auth::user()->role == 1) {
                return redirect('/admin/dashboard');
            }

        } else {
            return redirect()->back()->with('error', 'Please enter correct email and password.');
        }

    }
    public function adminLogout()
    {
        Auth::logout();
        $cookie = Cookie::forget('laravel_session');
        return redirect('/admin/login')->withCookie($cookie);
    }

    public function studentLoginForm()
    {
        return view('login.student.index');
    }

    public function teacherLoginForm()
    {
        return view('login.teacher.index');
    }
}
