<?php

use App\Http\Controllers\WebControllers\Admin\ContentController;
use App\Http\Controllers\WebControllers\Admin\GalleryController;
use App\Http\Controllers\WebControllers\Login\HomeController as LoginHomeController;
use App\Http\Controllers\WebControllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\WebControllers\Admin\MemberController;
use App\Http\Controllers\WebControllers\Admin\UtileController;
use App\Http\Controllers\WebControllers\Teachers\HomeController as TeachersHomeController;
use App\Http\Controllers\WebControllers\User\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

//  users route
Route::get('/', [HomeController::class, 'home']);
Route::get('/about', [HomeController::class, 'aboutUs']);
Route::get('/contact', [HomeController::class, 'contactUs']);
Route::get('/administrative', [HomeController::class, 'administrative']);
Route::get('/academic', [HomeController::class, 'academic']);
Route::get('/opportunity', [HomeController::class, 'opportunity']);
Route::get('/admission', [HomeController::class, 'admission']);
Route::get('/function', [HomeController::class, 'function']);
Route::get('/gallery', [HomeController::class, 'gallery']);
Route::get('/notice', [HomeController::class, 'notice']);
Route::get('/importantlink', [HomeController::class, 'importantlink']);

//login route
Route::get('/admin/login', [LoginHomeController::class, 'adminLoginHome']);
Route::get('/teacher/login', [LoginHomeController::class, 'teacherLoginHome']);
Route::get('/student/login', [LoginHomeController::class, 'studentLoginHome']);

//admin route
Route::get('/admin/dashboard', [AdminHomeController::class, 'home']);
Route::get('/admin/profile', [AdminHomeController::class, 'showprofile']);
Route::get('/admin/editprofile', [AdminHomeController::class, 'editprofile']);

Route::get('/admin/content/index',[ContentController::class, 'index']);
Route::get('/admin/content/add',[ContentController::class, 'add']);
Route::get('/admin/content/edit',[ContentController::class, 'edit']);
Route::get('/admin/content/details_index',[ContentController::class, 'detailsindex']);
Route::get('/admin/content/details_add',[ContentController::class, 'detailsadd']);
Route::get('/admin/content/details_edit',[ContentController::class, 'detailsedit']);

Route::get('/admin/notice/index',[UtileController::class, 'noticeindex']);
Route::get('/admin/notice/add',[UtileController::class, 'noticeadd']);
Route::get('/admin/notice/edit',[UtileController::class, 'noticeedit']);

Route::get('/admin/communication/index',[UtileController::class, 'communicationindex']);

Route::get('/admin/academic/userviewindex',[UtileController::class, 'academicuserviewindex']);
Route::get('/admin/academic/userviewadd',[UtileController::class, 'academicuserviewadd']);
Route::get('/admin/academic/userviewedit',[UtileController::class, 'academicuserviewedit']);

Route::get('/admin/member/index',[MemberController::class,'index']);
Route::get('/admin/member/add',[MemberController::class,'add']);
Route::get('/admin/member/edit',[MemberController::class, 'edit']);
Route::get('/admin/member/details_index',[MemberController::class, 'detailsindex']);
Route::get('/admin/member/details_add',[MemberController::class, 'detailsadd']);
Route::get('/admin/member/details_edit',[MemberController::class, 'detailsedit']);

Route::get('/admin/gallery/index',[GalleryController::class,'index']);
Route::get('/admin/gallery/add',[GalleryController::class,'add']);
Route::get('/admin/gallery/edit',[GalleryController::class, 'edit']);
Route::get('/admin/gallery/details_index',[GalleryController::class, 'detailsindex']);
Route::get('/admin/gallery/details_add',[GalleryController::class, 'detailsadd']);
Route::get('/admin/gallery/details_edit',[GalleryController::class, 'detailsedit']);

//teacher route
Route::get('/teacher/dashboard', [TeachersHomeController::class, 'home']);
