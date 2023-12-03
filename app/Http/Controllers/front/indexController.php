<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        return view('front.pages.index');
    }

    public function instruct(){
        return view('front.pages.instruct');
    }
}
