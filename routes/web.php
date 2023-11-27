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

Route::get('/', function () {
    return view('front.index');
});
Route::get('/', [\App\Http\Controllers\front\indexController::class, 'index'])->name('main');

//Default Kullanıcı

//Öğrenci Kullanıcı

//Öğretici Kullanıcı
Route::get('/teacher', function () {
    return view('teacher.index');
})->name('teacher')->middleware('auth');

//Admin
Auth::routes();

