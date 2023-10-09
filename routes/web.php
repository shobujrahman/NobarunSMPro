<?php

use App\Http\Controllers\WebControllers\Admin\ContentController;
use App\Http\Controllers\WebControllers\Admin\GalleryController;
use App\Http\Controllers\WebControllers\Admin\HomeController;
// use App\Http\Controllers\WebControllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\WebControllers\Admin\MemberController;
use App\Http\Controllers\WebControllers\Admin\UtileController;
use App\Http\Controllers\WebControllers\Auth\AuthController;
use App\Http\Controllers\WebControllers\Teachers\TeachersController;
use App\Http\Controllers\WebControllers\User\UserController;
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
Route::get('/', [UserController::class, 'home']);
Route::get('/about', [UserController::class, 'aboutUs']);
Route::get('/contact', [UserController::class, 'contactUs']);
Route::get('/administrative', [UserController::class, 'administrative']);
Route::get('/academic', [UserController::class, 'academic']);
Route::get('/opportunity', [UserController::class, 'opportunity']);
Route::get('/admission', [UserController::class, 'admission']);
Route::get('/function', [UserController::class, 'function']);
Route::get('/gallery', [UserController::class, 'gallery']);
Route::get('/notice', [UserController::class, 'notice']);
Route::get('/importantlink', [UserController::class, 'importantlink']);

//Auth route
Route::get('/admin/login', [AuthController::class, 'adminLoginForm']);
Route::get('/teacher/login', [AuthController::class, 'teacherLoginForm']);
Route::get('/student/login', [AuthController::class, 'studentLoginForm']);

//admin route
Route::get('/admin/dashboard', [HomeController::class, 'home']);
Route::get('/admin/profile', [HomeController::class, 'showprofile']);
Route::get('/admin/editprofile', [HomeController::class, 'editprofile']);

Route::get('/admin/content/index', [ContentController::class, 'index']);
Route::get('/admin/content/add', [ContentController::class, 'add']);
Route::get('/admin/content/edit', [ContentController::class, 'edit']);
Route::get('/admin/content/details_index', [ContentController::class, 'detailsindex']);
Route::get('/admin/content/details_add', [ContentController::class, 'detailsadd']);
Route::get('/admin/content/details_edit', [ContentController::class, 'detailsedit']);

Route::get('/admin/notice/index', [UtileController::class, 'noticeindex']);
Route::get('/admin/notice/add', [UtileController::class, 'noticeadd']);
Route::get('/admin/notice/edit', [UtileController::class, 'noticeedit']);

Route::get('/admin/communication/index', [UtileController::class, 'communicationindex']);

Route::get('/admin/academic/userviewindex', [UtileController::class, 'academicuserviewindex']);
Route::get('/admin/academic/userviewadd', [UtileController::class, 'academicuserviewadd']);
Route::get('/admin/academic/userviewedit', [UtileController::class, 'academicuserviewedit']);

Route::get('/admin/member/index', [MemberController::class, 'index']);
Route::get('/admin/member/add', [MemberController::class, 'add']);
Route::get('/admin/member/edit', [MemberController::class, 'edit']);
Route::get('/admin/member/details_index', [MemberController::class, 'detailsindex']);
Route::get('/admin/member/details_add', [MemberController::class, 'detailsadd']);
Route::get('/admin/member/details_edit', [MemberController::class, 'detailsedit']);

Route::get('/admin/gallery/index', [GalleryController::class, 'index']);
Route::get('/admin/gallery/add', [GalleryController::class, 'add']);
Route::get('/admin/gallery/edit', [GalleryController::class, 'edit']);
Route::get('/admin/gallery/details_index', [GalleryController::class, 'detailsindex']);
Route::get('/admin/gallery/details_add', [GalleryController::class, 'detailsadd']);
Route::get('/admin/gallery/details_edit', [GalleryController::class, 'detailsedit']);

//teacher route
Route::get('/teacher/dashboard', [TeachersController::class, 'home']);
