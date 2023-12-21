<?php

use Illuminate\Support\Facades\Auth;
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

//Default
Route::get('/', [\App\Http\Controllers\front\IndexController::class, 'index'])
    ->name('main');
//Öğretici Kayıt
Route::get('/application', [\App\Http\Controllers\front\IndexController::class, 'instruct_register'])
    ->name('instruct_register')
    ->middleware('auth');

//Öğrenci Kullanıcı
Route::prefix('student')->group(function () {
    Route::get('/home', [\App\Http\Controllers\student\StudentIndexController::class, 'student'])
        ->name('student')
        ->middleware('student', 'auth');
});

//Öğretici Kullanıcı
Route::prefix('instructor')->group(function () {
    Route::get('/', [\App\Http\Controllers\instructors\InstructorIndexController::class, 'instruct'])
        ->name('instruct')
        ->middleware('instruct', 'auth');
    //Öğretici Courses
    Route::get('/create', [\App\Http\Controllers\instructors\InstructorIndexController::class, 'instruct_create'])
        ->name('course_create')
        ->middleware('instruct', 'auth');
    Route::get('/courses', [\App\Http\Controllers\instructors\InstructorIndexController::class, 'instruct_courses'])
        ->name('course_courses')
        ->middleware('instruct', 'auth');


});

//Admin
Route::prefix('admin')->group(function () {
    Route::get('/home', [\App\Http\Controllers\admin\AdminIndexController::class, 'admin'])
        ->name('admin')
        ->middleware('admin', 'auth');
});

Auth::routes();

