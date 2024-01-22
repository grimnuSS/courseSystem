<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $cartItem = session('cart', []);
        $totalPrice = 0;

        foreach ($cartItem as $item){
            $totalPrice += $item['price'];
        }

        return view('front.pages.cart', compact('cartItem', 'totalPrice'));
    }
    public function add(Request $request)
    {
        $productID = $request->id;

        $course = Course::where('id', $productID)->first();

        if (!$course) {
            return back()->with('error', 'Böyle bir kurs bulunamadı');
        }

        $cartItem = session('cart', []);

        if (array_key_exists($productID, $cartItem)) {
            return back()->with('error', 'Bu kurs zaten sepetinizde bulunuyor');
        } else {
            $cartItem[$productID] = [
                'id' => $productID,
                'title' => $course->title,
                'category' => $course->categoryId,
                'image' => $course->courseImage,
                'price' => $course->price,
            ];
        }

        session()->put('cart', $cartItem);
        return back()->with('success', 'Kurs sepetinize eklendi');
    }

    public function remove(Request $request)
    {
        $productID = $request->id;

        $cartItem = session('cart', []);

        if (array_key_exists($productID, $cartItem)) {
            unset($cartItem[$productID]);
        }

        session()->put('cart', $cartItem);
        return back()->with('success', 'Kurs sepetinizden silindi');

    }
}
