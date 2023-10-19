<?php

namespace App\Http\Controllers\AdminPanelControllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AcademicUserView;
use App\Models\Utile;
use Illuminate\Http\Request;

class UtileController extends Controller
{

    public function academicUserViewIndex()
    {
        $academic_user_view = AcademicUserView::orderBy('id', 'desc')->get();
        return view('admin.academic.user_view_index', compact('academic_user_view'))->with('no', 1);
    }

    public function academicUserViewAdd()
    {
        return view('admin.academic.user_view_add');
    }

    public function academicUserViewStore(Request $request)
    {
        $academic_user_view = new AcademicUserView();
        $academic_user_view->academic_name = $request->input('academic_name');
        $academic_user_view->section = $request->input('section');
        $academic_user_view->routine = $request->input('routine');
        $academic_user_view->text_book = $request->input('text_book');
        $academic_user_view->total_student = $request->input('total_student');
        $academic_user_view->male_student = $request->input('male_student');
        $academic_user_view->female_student = $request->input('female_student');
        $academic_user_view->save();
        return redirect('/admin/academic/userviewindex')->with('success', 'Academic user view added successfully');

    }

    public function academicUserViewEdit($id)
    {
        $academic_user_view = AcademicUserView::find($id);
        return view('admin.academic.user_view_edit', compact('academic_user_view'));
    }

    public function academicUserViewUpdate(Request $request, $id)
    {
        $academic_user_view = AcademicUserView::find($id);
        $academic_user_view->academic_name = $request->input('academic_name');
        $academic_user_view->section = $request->input('section');
        $academic_user_view->routine = $request->input('routine');
        $academic_user_view->text_book = $request->input('text_book');
        $academic_user_view->total_student = $request->input('total_student');
        $academic_user_view->male_student = $request->input('male_student');
        $academic_user_view->female_student = $request->input('female_student');
        $academic_user_view->save();
        return redirect('/admin/academic/userviewindex')->with('success', 'Academic user view updated successfully');

    }

    public function academicUserViewDelete($id)
    {
        $academic_user_view = AcademicUserView::find($id);
        $academic_user_view->delete();
        return redirect('/admin/academic/userviewindex')->with('success', 'Academic user view deleted successfully');

    }

    public function noticeIndex()
    {
        $notices = Utile::orderBy('id', 'desc')->get();
        return view('admin.utile.index', compact('notices'))->with('no', 1);
    }

    public function noticeAdd()
    {
        return view('admin.utile.add');
    }
    //noticeStore
    public function noticeStore(Request $request)
    {
        $notice = new Utile();
        $notice->title = $request->input('title');
        $notice->description = $request->input('description');
        $notice->save();
        return redirect('/admin/notice/index')->with('success', 'Notice added successfully');
    }

    public function noticeEdit($id)
    {
        $notice = Utile::find($id);
        return view('admin.utile.edit', compact('notice'));
    }

    //noticeUpdate
    public function noticeUpdate(Request $request, $id)
    {
        $notice = Utile::find($id);
        $notice->title = $request->input('title');
        $notice->description = $request->input('description');
        $notice->save();
        return redirect('/admin/notice/index')->with('success', 'Notice updated successfully');
    }
    //deleteNotice
    public function deleteNotice($id)
    {
        $notice = Utile::find($id);
        $notice->delete();
        return redirect('/admin/notice/index')->with('success', 'Notice deleted successfully');
    }

    public function communicationindex()
    {
        return view('admin.communication.index');
    }
}
