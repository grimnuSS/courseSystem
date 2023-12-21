<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;

class StudentIndexController extends Controller
{
    public function student(){
        return view('back.student.pages.index', ['subpage' => '', 'page' => 'student']);
    }
}
