<?php

use App\Http\Controllers\AdminPanelControllers\Admin\CommunicationController;
use App\Http\Controllers\AdminPanelControllers\Admin\ContentController;
use App\Http\Controllers\AdminPanelControllers\Admin\GalleryController;
use App\Http\Controllers\AdminPanelControllers\Admin\HomeController;
use App\Http\Controllers\AdminPanelControllers\Admin\MemberController;
use App\Http\Controllers\AdminPanelControllers\Admin\StudentAccessController;
use App\Http\Controllers\AdminPanelControllers\Admin\TeacherAccessController;
use App\Http\Controllers\AdminPanelControllers\Admin\UtileController;
use App\Http\Controllers\AdminPanelControllers\Auth\AuthController;
use App\Http\Controllers\AdminPanelControllers\Teachers\TeachersController;
use App\Http\Controllers\WebsiteControllers\AboutController;
use App\Http\Controllers\WebsiteControllers\AcademicController;
use App\Http\Controllers\WebsiteControllers\AdministrativeController;
use App\Http\Controllers\WebsiteControllers\AdmissionController;
use App\Http\Controllers\WebsiteControllers\ContactController;
use App\Http\Controllers\WebsiteControllers\FunctionController;
use App\Http\Controllers\WebsiteControllers\GalleryController as WebsiteControllersGalleryController;
use App\Http\Controllers\WebsiteControllers\HomeController as WebsiteControllersHomeController;
use App\Http\Controllers\WebsiteControllers\ImportantlinkController;
use App\Http\Controllers\WebsiteControllers\NoticeController;
use App\Http\Controllers\WebsiteControllers\OpportunityController;
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

Route::get('/', [WebsiteControllersHomeController::class, 'home']);
Route::get('/about', [AboutController::class, 'aboutUs']);
Route::get('/contact', [ContactController::class, 'contactUs']);
//send message from contact us page by user
Route::post('/contact/send-message', [ContactController::class, 'sendMessage']);
Route::get('/administrative', [AdministrativeController::class, 'administrative']);
Route::get('/academic', [AcademicController::class, 'academic']);
Route::get('/opportunity', [OpportunityController::class, 'opportunity']);
Route::get('/admission', [AdmissionController::class, 'admission']);
Route::get('/function', [FunctionController::class, 'function']);
Route::get('/gallery', [WebsiteControllersGalleryController::class, 'gallery']);
Route::get('/notice', [NoticeController::class, 'notice']);
Route::get('/importantlink', [ImportantlinkController::class, 'importantlink']);

//Auth route
Route::get('/admin/login', [AuthController::class, 'adminLoginForm']);
Route::post('/admin/admin-login', [AuthController::class, 'adminLogin']);
Route::get('/admin/admin-logout', [AuthController::class, 'adminLogout']);
Route::get('/teacher/login', [AuthController::class, 'teacherLoginForm']);
Route::get('/student/login', [AuthController::class, 'studentLoginForm']);

Route::middleware(['admin'])->group(function () {
    Route::get('admin/dashboard', [HomeController::class, 'home']);
    Route::get('admin/profile', [HomeController::class, 'showAdminProfile']);
    Route::get('admin/editProfile', [HomeController::class, 'editAdminProfile']);
    Route::post('admin/updateProfile', [HomeController::class, 'updateAdminProfile']);
    //content route
    Route::get('/admin/content/index', [ContentController::class, 'index']);
    Route::get('/admin/content/add', [ContentController::class, 'add']);
    Route::post('/admin/content/store', [ContentController::class, 'contentStore']);
    Route::get('/admin/content/edit/{id}', [ContentController::class, 'edit']);
    Route::post('/admin/content/update/{id}', [ContentController::class, 'contentUpdate']);
    //content details route
    Route::get('/admin/content/{id}/details_index', [ContentController::class, 'detailsIndex']);
    Route::get('/admin/content/{id}/details_add', [ContentController::class, 'detailsAdd']);
    Route::post('/admin/content/details_store/{id}', [ContentController::class, 'contentDetailsStore']);
    Route::get('/admin/content/{cid}/details_edit/{id}', [ContentController::class, 'detailsedit']);
    Route::post('/admin/content/details_update/{cid}/{id}', [ContentController::class, 'contentDetailsUpdate']);
    Route::get('/admin/content/{cid}/details_delete/{id}', [ContentController::class, 'contentDetailsDelete']);
    //utile notice route
    Route::get('/admin/notice/index', [UtileController::class, 'noticeIndex']);
    Route::get('/admin/notice/add', [UtileController::class, 'noticeAdd']);
    Route::post('/admin/notice/store', [UtileController::class, 'noticeStore']);
    Route::get('/admin/notice/edit/{id}', [UtileController::class, 'noticeEdit']);
    Route::post('/admin/notice/update/{id}', [UtileController::class, 'noticeUpdate']);
    //deleteNotice
    Route::get('/admin/notice/delete/{id}', [UtileController::class, 'deleteNotice']);

    //communication route
    Route::get('/admin/communication/index', [CommunicationController::class, 'communicationindex']);

    Route::get('/admin/academic/userviewindex', [UtileController::class, 'academicUserViewIndex']);
    Route::get('/admin/academic/userviewadd', [UtileController::class, 'academicUserViewAdd']);
    Route::post('/admin/academic/userviewstore', [UtileController::class, 'academicUserViewStore']);
    Route::get('/admin/academic/userviewedit/{id}', [UtileController::class, 'academicUserViewEdit']);
    Route::post('/admin/academic/userviewupdate/{id}', [UtileController::class, 'academicUserViewUpdate']);
    Route::get('/admin/academic/userviewdelete/{id}', [UtileController::class, 'academicUserViewDelete']);
    //member_type route
    Route::get('/admin/member/index', [MemberController::class, 'index']);
    Route::get('/admin/member/add', [MemberController::class, 'add']);
    Route::post('/admin/member/store', [MemberController::class, 'store']);
    Route::get('/admin/member/edit/{id}', [MemberController::class, 'edit']);
    Route::post('/admin/member/update/{id}', [MemberController::class, 'update']);
    //member details route
    Route::get('/admin/member/{mid}/details_index', [MemberController::class, 'detailsIndex']);
    Route::get('/admin/member/{mid}/details_add', [MemberController::class, 'detailsAdd']);
    Route::post('/admin/member/details_store/{mid}', [MemberController::class, 'detailsStore']);
    Route::get('/admin/member/{mid}/details_edit/{mdId}', [MemberController::class, 'detailsEdit']);
    Route::post('/admin/member/details_update/{mid}/{mdId}', [MemberController::class, 'detailsUpdate']);
    Route::get('/admin/member/{mid}/details_delete/{mdId}', [MemberController::class, 'detailsDelete']);
    //gallery type route
    Route::get('/admin/gallery/index', [GalleryController::class, 'index']);
    Route::get('/admin/gallery/add', [GalleryController::class, 'add']);
    Route::post('/admin/gallery/store', [GalleryController::class, 'store']);
    Route::get('/admin/gallery/edit/{gid}', [GalleryController::class, 'edit']);
    Route::post('/admin/gallery/update/{gid}', [GalleryController::class, 'update']);
    //gallery details route
    Route::get('/admin/gallery/{gid}/details_index', [GalleryController::class, 'detailsIndex']);
    Route::get('/admin/gallery/{gid}/details_add', [GalleryController::class, 'detailsAdd']);
    Route::post('/admin/gallery/{gid}/details_store', [GalleryController::class, 'detailsStore']);
    Route::get('/admin/gallery/{gid}/details_edit/{gdId}', [GalleryController::class, 'detailsEdit']);
    Route::post('/admin/gallery/{gid}/details_update/{gdId}', [GalleryController::class, 'detailsUpdate']);
    Route::get('/admin/gallery/details_delete/{gdId}', [GalleryController::class, 'detailsDelete']);

    //student access/registration route
    Route::get('/admin/studentaccess/index', [StudentAccessController::class, 'index']);
    Route::get('/admin/studentaccess/add', [StudentAccessController::class, 'add']);
    Route::get('/admin/studentaccess/edit', [StudentAccessController::class, 'edit']);
    Route::get('/admin/studentaccess/studentviewprofile', [StudentAccessController::class, 'studentViewProfile']);
    //Teacher access/registration route
    Route::get('/admin/teacheraccess/index', [TeacherAccessController::class, 'index']);
    Route::get('/admin/teacheraccess/add', [TeacherAccessController::class, 'add']);
    Route::get('/admin/teacheraccess/edit', [TeacherAccessController::class, 'edit']);
    Route::get('/admin/teacheraccess/teacherviewprofile', [TeacherAccessController::class, 'teacherViewProfile']);
});

//teacher route
Route::get('/teacher/dashboard', [TeachersController::class, 'home']);