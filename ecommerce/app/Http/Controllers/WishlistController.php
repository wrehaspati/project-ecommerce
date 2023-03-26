<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    /**
     * Add Wishlist
     * 
     * @param id
     * @return response
     */
    public function store(Request $request)
    {
        if(Wishlist::where('item_id', $request->item_id)->first()):
            return redirect()->back()->with('status','Item Telah Terdaftar Di Wishlist !');
        else:
            $wishlist = new Wishlist();
            $wishlist->item_id = $request->item_id;
            $wishlist->user_id = Auth::user()->id;
            $wishlist->save();

            return redirect()->back()->with('status','Berhasil Ditambahkan Ke Wishlist !');
        endif;
    }
}
