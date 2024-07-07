<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lowongan;

class WishlistController extends Controller
{
    public function index()
    {
        $lowongan = Lowongan::all();
        $wishlist = session()->get('wishlist', []);
        $wishlistProductIds = array_keys($wishlist);

        return view('main.lowongan-fix', compact('lowongan'));
    }


    public function toggleBookmark(Request $request, $id) {
        $bookmarked = session()->get('bookmarked', []);

        if (in_array($id, $bookmarked)) {
            $bookmarked = array_diff($bookmarked, [$id]);
        } else {
            $bookmarked[] = $id;
        }

        session()->put('bookmarked', $bookmarked);

        return redirect()->back();
    }


    public function viewWishlist() {
        $bookmarked = session()->get('bookmarked', []);
        $wishlistItems = Lowongan::whereIn('id', $bookmarked)->get();

        return view('main.wishlist-fix', compact('wishlistItems'));
    }

    public function removeFromWishlist($id){
        $wishlist = session("wishlist");
        unset($wishlist[$id]);
        session(["wishlist" => $wishlist]);
        return redirect("/wishlist");

    }
}

