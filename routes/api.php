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
Route::get('/courses', [CourseController::class, 'courses']);

Route::post('/wishlist/add/{id?}', [\App\Http\Controllers\course\WishlistController::class, 'wishlistAdd']);
Route::get('/wishlist/{id?}', [\App\Http\Controllers\course\WishlistController::class, 'wishlist']);

//Student API's
Route::get("/student/courses/{id?}", [\App\Http\Controllers\student\StudentCoursesController::class, 'index']);
Route::get("/student/course/{slug?}", [\App\Http\Controllers\student\StudentCoursesController::class, 'content']);

//Instruction API's
Route::get("/instructor/state/{id?}", [\App\Http\Controllers\instructors\Instructor::class, 'getInstructorState']);
Route::post('/instructor/form', [\App\Http\Controllers\instructors\InstructorRegisterForm::class, 'instructorFormSubmit']);
    //Instruction Course API's
    Route::get('/instruct/courses/{id?}', [CourseController::class, 'coursesInstruct']);
    Route::get('/instruct/course/edit', [CourseController::class, 'courseEdit']);
    Route::post('/instruct/course/add', [CourseController::class, 'courseAdd']);


//Admin API's
Route::get('/admin/instructors/forms', [\App\Http\Controllers\instructors\Instructor::class, 'getInstructorForms']);
Route::post('/admin/instructors/forms/confirm/{id}', [\App\Http\Controllers\instructors\Instructor::class, 'confirmForm']);
Route::post('/admin/instructors/forms/dissmiss/{id}', [\App\Http\Controllers\instructors\Instructor::class, 'dissmissForm']);

//Instructors API's
Route::get('/instructors', [\App\Http\Controllers\instructors\Instructor::class, 'getInstructors']);
