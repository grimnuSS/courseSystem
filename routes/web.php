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

Route::get('/', function () {
    return view('front.pages.index');
});

Route::get('/', [\App\Http\Controllers\front\IndexController::class, 'index'])->name('main');

//Öğrenci Kullanıcı

//Öğretici Kullanıcı
Route::get('/application', [\App\Http\Controllers\front\IndexController::class, 'instruct_register'])->name('instruct_register')->middleware('auth');

//Admin
Auth::routes();

