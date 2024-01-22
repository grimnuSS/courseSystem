<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminIndexController extends Controller
{
    public function admin(){
        return view('back.admin.pages.index', ['subpage' => '', 'page' => 'admin']);
    }
    public function instructors(){
        return view('back.admin.pages.instructors', ['subpage' => '', 'page' => 'instructors']);
    }
}
