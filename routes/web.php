<?php

use App\Http\Controllers\WebControllers\Login\HomeController as LoginHomeController;
use App\Http\Controllers\WebControllers\Admin\HomeController as AdminHomeController;
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

//teacher route
Route::get('/teacher/dashboard', [TeachersHomeController::class, 'home']);
