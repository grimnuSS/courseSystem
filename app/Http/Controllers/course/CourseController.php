<?php

namespace App\Http\Controllers\course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function categories()
    {
        $categories = Category::all();

        return response()->json(['categoryName' => $categories]);
    }

    public function courseAdd(Request $request)
    {
        $course = new Course();
        $course->title = $request->title;
        $course->description = $request->description;
        $course->descriptionCategories = $request->descriptionCategories;
        $course->categoryId = $request->categoryId;
        $course->price = $request->price;
        $course->save();

    }
}
