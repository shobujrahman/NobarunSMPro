<?php

namespace App\Http\Controllers\AdminPanelControllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MemberDetails;
use App\Models\MemberType;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $member_types = MemberType::orderBy('id', 'desc')->get();
        return view('admin.member.index', compact('member_types'))->with('no', 1);
    }

    public function add()
    {
        return view('admin.member.add');
    }

    //store member type
    public function store()
    {
        $member_type = new MemberType();
        $member_type->title = request('title');
        $member_type->save();
        return redirect('/admin/member/index')->with('message', 'Member Type Added Successfully');
    }

    public function edit($id)
    {
        $member_type = MemberType::find($id);
        return view('admin.member.edit', compact('member_type'));
    }

    //update member type
    public function update($id)
    {
        $member_type = MemberType::find($id);
        $member_type->title = request('title');
        $member_type->save();
        return redirect('/admin/member/index')->with('message', 'Member Type Updated Successfully');
    }

    public function detailsIndex($mid)
    {
        $member_type = MemberType::find($mid);
        $member_details = MemberDetails::with('member_type')->where('member_type_id', $member_type->id)->orderBy('id', 'desc')->get();
        return view('admin.member.details_index', compact('member_details', 'member_type'))->with('no', 1);
    }

    public function detailsAdd($mid)
    {
        $member_type = MemberType::find($mid);
        return view('admin.member.details_add', compact('member_type'));
    }

    public function detailsStore(Request $request, $mid)
    {
        $member_type = MemberType::find($mid);
        $member_details = new MemberDetails();
        $member_details->name = $request->input('name');
        $member_details->designation = $request->input('designation');
        $member_details->address = $request->input('address');
        $member_details->contact = $request->input('contact');
        $member_details->email = $request->input('email');
        $member_details->description = $request->input('description');
        $member_details->member_type_id = $request->route('mid');
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $path = $request->image->move(public_path('images/member-images'), $imageName);
            $member_details->image = $imageName;
        }
        // dd($member_details->member_type_id = $request->route('mid'));
        $member_details->save();
        return redirect('/admin/member/' . $member_type->id . '/details_index')->with('message', 'Member Details Added Successfully');
    }

    public function detailsEdit($mid, $mdId)
    {
        $member_type = MemberType::find($mid);
        $member_details = MemberDetails::find($mdId);
        return view('admin.member.details_edit', compact(['member_type', 'member_details']));
    }

    public function detailsUpdate(Request $request, $mid, $mdId)
    {

        $member_type = MemberType::find($mid);
        $member_details = MemberDetails::where('member_type_id', $member_type->id)->find($mdId);
        $member_details->name = $request->input('name');
        $member_details->designation = $request->input('designation');
        $member_details->address = $request->input('address');
        $member_details->contact = $request->input('contact');
        $member_details->email = $request->input('email');
        $member_details->description = $request->input('description');
        //get old img
        $old_img = $request->input('old_image');

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $path = $request->image->move(public_path('images/member-images'), $imageName);
            $member_details->image = $imageName;
            // delete previous image
            $path = public_path('images/member-images/' . $old_img);
            if (file_exists($path)) {
                @unlink($path);
            }
            $member_details->update();
        } else {
            $member_details->update();
        }

        return redirect('/admin/member/' . $member_type->id . '/details_index')->with('message', 'Member Details Updated Successfully');
    }

    public function detailsDelete($mid, $mdId)
    {
        $member_type = MemberType::find($mid);
        $member_details = MemberDetails::where('member_type_id', $member_type->id)->find($mdId);
        $member_details->delete();
        return redirect('/admin/member/' . $member_type->id . '/details_index')->with('message', 'Member Type Deleted Successfully');
    }
}
