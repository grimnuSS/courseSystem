<?php

namespace App\Http\Controllers\course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wishlist;


class WishlistController extends Controller
{
    public function wishlistAdd($id, Request $request)
    {
        $wishlist = new Wishlist();
        $wishlist->userId = $request->user_id;
        $wishlist->courseId = $id;
        $wishlist->save();

        return response()->json(['success' => 'Kurs Başarıyla İstek Listesine Eklendi.']);
    }

    public function wishlistRemove($id, Request $request)
    {
        $wishlist = Wishlist::where('userId', $request->user_id)->where('courseId', $id)->first();
        $wishlist->delete();

        return response()->json(['success' => 'Kurs Başarıyla İstek Listesinden Kaldırıldı.']);
    }

    public function wishlist($id = null)
    {
        if (!isset($id)) {
            return back();
        }
        $wishlist = Wishlist::with('courses')->where('userId', $id)->get();
        return response()->json(['wishlist' => $wishlist]);
    }

}
