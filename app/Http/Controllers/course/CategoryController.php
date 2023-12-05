<?php

namespace App\Http\Controllers\course;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showCategoriesInHeader()
    {
        $categories = Category::orderBy('categoryName', 'asc')->get();
        return view('front.inc.header', compact('categories'));
    }
}
