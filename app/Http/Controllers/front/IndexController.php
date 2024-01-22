<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //Default & Öğrenci Kullanıcı
    public function index()
    {
        $courses = Course::with('category')->get()->take(3);
        return view('front.pages.index', ['page' => 'Anasayfa', 'courses' => $courses]);
    }
    public function instruct_register(){
        return view('front.pages.instructRegister', ['page' => 'Eğitmen Kayıt']);
    }
    public function course_single($slug){
        $product = Course::where('courseSlug', $slug)->first();
        return view('front.pages.singleCourse', ['page' => 'Kurslar'], compact('product'));
    }
    public function courses(){
        $categories = Category::all();

        return view('front.pages.courses', ['page' => 'Kurslar', 'categories' => $categories]);
    }
    public function wishlist(){
        return view('front.pages.wishlist', ['page' => 'İstek Listesi']);
    }

}
