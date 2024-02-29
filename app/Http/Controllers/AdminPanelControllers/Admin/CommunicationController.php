<?php

namespace App\Http\Controllers\AdminPanelControllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Communication;

class CommunicationController extends Controller
{
    public function communicationIndex()
    {
        $communications = Communication::orderBy('id', 'desc')->get();
        return view('admin.communication.index', compact('communications'))->with('no', 1);
    }
}