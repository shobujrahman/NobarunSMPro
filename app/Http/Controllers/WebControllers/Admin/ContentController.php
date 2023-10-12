<?php

namespace App\Http\Controllers\WebControllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContentManagement;
use App\Models\ContentManagementDetails;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        $contents = ContentManagement::orderBy('id', 'desc')->get();
        return view('admin.content.index', compact('contents'))->with('no', 1);
    }

    public function add()
    {
        return view('admin.content.add');
    }

    public function contentStore(Request $request)
    {
        $rules = [

            'title' => 'required|max:55',
            'image' => 'required',
        ];

        $this->validate($request, $rules);

        $content = new ContentManagement();
        $content->title = $request->title;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $path = $request->image->move(public_path('images/content-images'), $imageName);
            $content->image = $imageName;
        }

        $content->save();
        return redirect('/admin/content/index')->with('success', 'Content added successfully.');
    }

    public function edit($id)
    {
        $content = ContentManagement::find($id);
        return view('admin.content.edit', compact('content'));
    }

    public function contentUpdate(Request $request, $id)
    {
        //Tv channel Category Validations
        $rules = [

            'title' => 'required|max:55',
        ];

        $this->validate($request, $rules);

        $content = ContentManagement::find($id);

        //get old img
        $old_img = $request->input('old_image');

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $path = $request->image->move(public_path('images/content-images'), $imageName);
            $content->image = $imageName;
            // delete previous image
            $path = public_path('images/content-images/' . $old_img);
            if (file_exists($path)) {
                @unlink($path);
            }
            $content->title = $request->input('title');
            $content->update();
        } else {
            $content->title = $request->input('title');
            $content->update();
        }

        return redirect('/admin/content/index')->with('message', 'Content updated successfully!');

    }

    public function detailsIndex($id)
    {
        $content = ContentManagement::find($id);
        $contentDetails = ContentManagementDetails::with(['content'])
            ->where('content_management_id', $content->id)
            ->orderBy('id', 'DESC')
            ->get();

        // $contentDetails = ContentManagementDetails::orderBy('id', 'desc')->get();
        return view('admin.content.details_index', compact(['contentDetails', 'content']))->with('no', 1);
    }

    public function detailsAdd($id)
    {
        $content = ContentManagement::find($id);
        return view('admin.content.details_add', compact('content'));
    }

    public function contentDetailsStore(Request $request, $id)
    {
        $rules = [

            'title' => 'required|max:55',
        ];

        $this->validate($request, $rules);

        $content = ContentManagement::find($id);
        $contentDetails = new ContentManagementDetails();
        $contentDetails->title = $request->title;
        $contentDetails->description = $request->description;
        $contentDetails->content_management_id = $request->route('id');

        // dd($contentDetails->content_management_id = $request->route('id'));
        $contentDetails->save();
        return redirect('/admin/content/details_index/' . $content->id)->with('success', 'Content added successfully.');
    }

    public function detailsedit($cid, $id)
    {
        $content = ContentManagement::find($cid);
        $contentDetails = ContentManagementDetails::find($id);
        return view('admin.content.details_edit', compact(['contentDetails', 'content']));
    }

    public function contentDetailsUpdate(Request $request, $cid, $id)
    {
        //Tv channel Category Validations
        $rules = [

            'title' => 'required|max:55',
        ];

        $this->validate($request, $rules);

        $content = ContentManagement::find($cid);
        $contentDetails = ContentManagementDetails::where('content_management_id', $content->id)->find($id);
        $contentDetails->title = $request->input('title');
        $contentDetails->description = $request->input('description');
        $contentDetails->update();

        return redirect('/admin/content/details_index/' . $content->id)->with('message', 'Content updated successfully!');

    }
}
