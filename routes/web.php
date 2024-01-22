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
Route::get('/courses', [\App\Http\Controllers\front\IndexController::class, 'courses'])
    ->name('courses');
Route::get('/course/{slug}', [\App\Http\Controllers\front\IndexController::class, 'course_single'])
    ->name('course_single');
Route::get('/wishlist', [\App\Http\Controllers\front\IndexController::class, 'wishlist'])
    ->name('wishlist')
    ->middleware('auth');

//Kart İşlemleri CRUD
Route::get('/cart', [\App\Http\Controllers\CartController::class, 'index'])
    ->name('cart')
    ->middleware('auth');
Route::post('/cart/add', [\App\Http\Controllers\CartController::class, 'add'])
    ->name('cart.add')
    ->middleware('auth');
Route::post('/cart/remove', [\App\Http\Controllers\CartController::class, 'remove'])
    ->name('cart.remove')
    ->middleware('auth');

//Ödeme İşlemleri
Route::get('/cart/payment', [\App\Http\Controllers\CheckoutController::class, 'index'])
    ->name('cart.payment')
    ->middleware('auth');
Route::post('/cart/checkout', [\App\Http\Controllers\CheckoutController::class, 'checkout'])
    ->name('cart.checkout')
    ->middleware('auth');

//Öğrenci Kullanıcı
Route::prefix('student')->group(function () {
    Route::get('/home', [\App\Http\Controllers\student\StudentIndexController::class, 'student'])
        ->name('student')
        ->middleware('student', 'auth');
    Route::get('/courses', [\App\Http\Controllers\student\StudentIndexController::class, 'courses'])
        ->name('student.courses')
        ->middleware('student', 'auth');
    Route::get('/course/{slug}', [\App\Http\Controllers\student\StudentIndexController::class, 'content'])
        ->name('student.content')
        ->middleware('student', 'auth');
});

//Öğretici Kayıt
Route::get('/application', [\App\Http\Controllers\front\IndexController::class, 'instruct_register'])
    ->name('instruct_register')
    ->middleware('auth');

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
    Route::get('instructors', [\App\Http\Controllers\admin\AdminIndexController::class, 'instructors'])
        ->name('admin.instructors')
        ->middleware('admin', 'auth');
});

Auth::routes();

