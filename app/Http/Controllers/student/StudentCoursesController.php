<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Carts;
use App\Models\Content;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class StudentCoursesController extends Controller
{
    public function index($id = null){
        if (!isset($id)) {
            $id = Auth::user()->id;
        }
        $courses = Carts::where('userId', $id)->with('courses')->get();
        return response()->json(['courses' => $courses]);
    }
    public function content($slug = null){
        // Belirtilen slug'a sahip kursu çek
        $course = Course::where('courseSlug', $slug)->first();

        if (!$course) {
            return response()->json(['error' => 'Kurs bulunamadı'], 404);
        }

        $contents = Content::where('courseId', $course->id)->get();

        return response()->json(['content' => $contents]);
    }
}
