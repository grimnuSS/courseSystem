<?php

namespace App\Http\Controllers\course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;

class CourseController extends Controller
{
    public function categories()
    {
        $categories = Category::all();

        return response()->json(['categoryName' => $categories]);
    }

    public function courses()
    {
        $courses = Course::all();

        return response()->json(['courses' => $courses]);
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
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png|max:2048'
        ]);

        $course = new Course();

        if($request->file()) {
            $file_name = time().'_'.$request->file->getClientOriginalName();
            $file_path = $request->file('file')->storeAs('courseImages', $file_name, 'public');

            $course->title = $request->title;
            $course->description = $request->description;
            $course->categoryId = $request->categoryId;
            $course->price = $request->price;
            $course->instructorsId = $request->instructorsId;
            $course->courseImage =  $file_path;

            $course->save();

            return response()->json(['success'=>'Kurs Başarıyla Eklendi']);
        }
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
