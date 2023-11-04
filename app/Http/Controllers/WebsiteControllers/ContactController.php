<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;
use App\Models\Communication;
use App\Models\ContentManagementDetails;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactUs()
    {
        $contact = ContentManagementDetails::where('content_management_id', 20)->get();
        return view('contact', compact('contact'));
    }

    //submit message from contact us page by user
    public function sendMessage(Request $request)
    {
        $sendMsg = new Communication();
        $sendMsg->name = $request->name;
        $sendMsg->email = $request->email;
        $sendMsg->phone = $request->phone;
        $sendMsg->subject = $request->subject;
        $sendMsg->message = $request->message;
        $sendMsg->save();
        return redirect('/contact')->with('message', 'Message send successfully');

    }

}
