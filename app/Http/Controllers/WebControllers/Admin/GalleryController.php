<?php

namespace App\Http\Controllers\WebControllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryDetails;
use App\Models\GalleryType;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery = GalleryType::orderBy('id', 'desc')->get();
        return view('admin.gallery.index', compact('gallery'))->with('no', 1);
    }

    public function add()
    {
        return view('admin.gallery.add');
    }

    public function store(Request $request)
    {
        $gallery = new GalleryType();
        $gallery->title = $request->input('title');
        $gallery->save();
        return redirect('/admin/gallery/index')->with('message', 'Gallery Type Added Successfully');
    }

    public function edit($gid)
    {
        $gallery = GalleryType::find($gid);
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, $gid)
    {
        $gallery = GalleryType::find($gid);
        $gallery->title = $request->input('title');
        $gallery->save();
        return redirect('/admin/gallery/index')->with('message', 'Gallery Type Updated Successfully');
    }

    public function detailsIndex($gid)
    {
        $gallery = GalleryType::find($gid);
        $gallery_details = GalleryDetails::with('gallery_type')->where('gallery_type_id', $gallery->id)->orderBy('id', 'desc')->get();
        return view('admin.gallery.details_index', compact('gallery_details', 'gallery'))->with('no', 1);
    }

    public function detailsAdd($gid)
    {
        $gallery = GalleryType::find($gid);
        return view('admin.gallery.details_add', compact('gallery'));
    }

    public function detailsStore(Request $request, $gid)
    {
        $gallery = GalleryType::find($gid);
        $gallery_details = new GalleryDetails();
        $gallery_details->title = $request->input('title');
        //image upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $path = $request->image->move(public_path('images/gallery-images'), $imageName);
            $gallery_details->image = $imageName;
        }
        $gallery_details->gallery_type_id = $request->route('gid');
        $gallery_details->save();
        return redirect('/admin/gallery/' . $gallery->id . '/details_index')->with('message', 'Gallery Details Added Successfully');
    }

    public function detailsEdit($gid, $gdId)
    {
        $gallery = GalleryType::find($gid);
        $gallery_details = GalleryDetails::find($gdId);
        return view('admin.gallery.details_edit', compact('gallery_details', 'gallery'));
    }

    public function detailsUpdate(Request $request, $gid, $gdId)
    {
        $gallery = GalleryType::find($gid);
        $gallery_details = GalleryDetails::find($gdId);
        $gallery_details->title = $request->input('title');

        //image upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $path = $request->image->move(public_path('images/gallery-images'), $imageName);
            $gallery_details->image = $imageName;
        }
        $gallery_details->save();
        return redirect('/admin/gallery/' . $gallery->id . '/details_index')->with('message', 'Gallery Details Updated Successfully');
    }

    public function detailsDelete($gdId)
    {
        $gallery_details = GalleryDetails::find($gdId);
        $gallery_details->delete();
        return redirect()->back()->with('message', 'Gallery Details Deleted Successfully');
    }

}
