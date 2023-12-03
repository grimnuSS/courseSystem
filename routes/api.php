<?php

use App\Http\Controllers\course\CourseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/instructor/state/{id?}", [\App\Http\Controllers\instructors\Instructor::class, 'getInstructorState']);
Route::post('/instructor/form', [\App\Http\Controllers\instructors\InstructorRegisterForm::class, 'instructorFormSubmit']);

Route::get('/categories', [CourseController::class, 'categories']);
Route::post('/course/add', [CourseController::class, 'courseAdd']);
