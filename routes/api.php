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

//General Course API's
Route::get('/categories', [CourseController::class, 'categories']);

//Instruction API's
Route::get("/instructor/state/{id?}", [\App\Http\Controllers\instructors\Instructor::class, 'getInstructorState']);
Route::post('/instructor/form', [\App\Http\Controllers\instructors\InstructorRegisterForm::class, 'instructorFormSubmit']);
    //Instruction Course API's
    Route::get('/instruct/courses/{id?}', [CourseController::class, 'coursesInstruct']);
    Route::get('/instruct/course/edit', [CourseController::class, 'courseEdit']);
    Route::post('/instruct/course/add', [CourseController::class, 'courseAdd']);
