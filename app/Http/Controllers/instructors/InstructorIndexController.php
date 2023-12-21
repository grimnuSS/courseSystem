<?php

namespace App\Http\Controllers\instructors;

use App\Http\Controllers\Controller;

class InstructorIndexController extends Controller
{
    public function instruct(){
        return view('back.instruct.pages.index', ['subpage' => '', 'page' => 'Instruct']);
    }
    public function instruct_create(){
        return view('back.instruct.pages.course.create', ['subpage' => 'Instruct.Create', 'page' => 'Instruct.Courses']);
    }
    public function instruct_courses(){
        return view('back.instruct.pages.course.courses', ['subpage' => 'Instruct.Courses', 'page' => 'Instruct.Courses']);
    }

}
