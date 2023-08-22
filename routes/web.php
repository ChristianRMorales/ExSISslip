<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Authentication routes
Route::get('/login', 'AuthController@showLoginForm')->name('login');
Route::post('/login', 'AuthController@login');
Route::post('/logout', 'AuthController@logout')->name('logout');

// Student routes
Route::group(['middleware' => ['auth', 'role:student']], function () {
    Route::get('/student/excuse-slip', 'StudentController@showExcuseSlipForm');
    Route::post('/student/excuse-slip', 'StudentController@storeExcuseSlip');
    Route::get('/student/feedback', 'StudentController@showFeedback');
});

// Counselor routes
Route::group(['middleware' => ['auth', 'role:counselor']], function () {
    Route::get('/counselor/excuse-slips', 'CounselorController@showExcuseSlips');
    Route::get('/counselor/feedback', 'CounselorController@showFeedback');
    Route::post('/counselor/feedback', 'CounselorController@provideFeedback');
});

// Dean routes
Route::group(['middleware' => ['auth', 'role:dean']], function () {
    Route::get('/dean/excuse-slips', 'DeanController@showExcuseSlips');
    Route::post('/dean/approve', 'DeanController@approveExcuseSlip');
    Route::post('/dean/reject', 'DeanController@rejectExcuseSlip');
});

// Teacher routes
Route::group(['middleware' => ['auth', 'role:teacher']], function () {
    Route::get('/teacher/excuse-slips', 'TeacherController@showExcuseSlips');
    Route::post('/teacher/sign', 'TeacherController@signExcuseSlip');
});

// Common routes for all users
Route::get('/dashboard', 'HomeController@index')->middleware('auth');