<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;
use App\Models\Utile;

class NoticeController extends Controller
{
    public function notice()
    {
        $notice = Utile::orderBy('id', 'desc')->get();
        return view('notice', compact('notice'));
    }
}
