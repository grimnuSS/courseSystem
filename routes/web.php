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

//Default Kullanıcı

Route::get('/', function () {
    return view('front.pages.index');
});
Route::get('/', [\App\Http\Controllers\front\indexController::class, 'index'])->name('main');

//Öğrenci Kullanıcı

//Öğretici Kullanıcı
Route::get('/instruct', [\App\Http\Controllers\front\indexController::class, 'instruct'])->name('instruct')->middleware('auth');

//Admin
Auth::routes();

