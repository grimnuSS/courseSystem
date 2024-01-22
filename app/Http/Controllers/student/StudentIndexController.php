<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Carts;
use App\Models\Course;

class StudentIndexController extends Controller
{
    public function student(){
        return view('back.student.pages.index', ['subpage' => '', 'page' => 'student']);
    }
    public function courses(){
        return view('back.student.pages.courses', ['subpage' => '', 'page' => 'courses']);
    }
    public function content(){
        return view('back.student.pages.content', ['subpage' => '', 'page' => 'content']);
    }
}
