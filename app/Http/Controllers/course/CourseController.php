<?php

namespace App\Http\Controllers\course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function categories()
    {
        $categories = Category::all();

        return response()->json(['categoryName' => $categories]);
    }

    public function coursesInstruct($id = null)
    {
        if (!isset($id)) {
            $id = Auth::user()->id;
        }
        $courses = Course::where('instructorsId', $id)->get();

        return response()->json(['courses' => $courses]);
    }

    public function courseAdd(Request $request)
    {
        $course = new Course();
        $course->title = $request->title;
        $course->description = $request->description;
        $course->categoryId = $request->categoryId;
        $course->price = $request->price;
        $course->instructorsId = $request->instructorsId;
        $course->courseImage = $request->courseImage;
        $course->save();
    }

    public function courseEdit(Request $request)
    {
        $course = Course::find($request->id);
        $course->title = $request->title;
        $course->description = $request->description;
        $course->categoryId = $request->categoryId;
        $course->price = $request->price;
        $course->instructorsId = $request->instructorsId;
        $course->courseImage = $request->courseImage;
        $course->save();
    }
}
