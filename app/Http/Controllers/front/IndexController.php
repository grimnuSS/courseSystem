<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('front.pages.index');
    }

    public function instruct_register(){
        return view('front.pages.instruct');
    }
}
