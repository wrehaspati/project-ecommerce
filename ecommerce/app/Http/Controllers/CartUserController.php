<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\CartUser;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartUserController extends Controller
{
    /**
     * show default or index interface
     * 
     * @return view
     */
    public function index()
    {
        return view('profile.cart');
    }

    /**
     * store data into cart
     * 
     * @param request
     * @return response
     */
    public function store(Request $request)
    {
        $new = new CartItem();
        $cart_detail = Cart::where('user_id', Auth::user()->id)->orderBy('created_at', 'asc')->first();
        $check = CartItem::where('cart_id', $cart_detail->id)->where('item_id',  $request->item_id)->first();
        if (!$check):
            $new->cart_id = $cart_detail->id;
            $new->item_id = $request->item_id;
            $new->save();

            return redirect()->back()->with('status','Berhasil Ditambahkan Ke Keranjang !');
        else:
            return redirect()->back()->with('status','Item Telah Ada di Keranjang !');
        endif;
    }

    public function destroy($id)
    {
        $cart_detail = Cart::where('user_id', Auth::user()->id)->orderBy('created_at', 'asc')->first();
        CartItem::where('cart_id', $cart_detail->id, 'and')->where('item_id', $id)->delete();
        
        return redirect()->back()->with('status','Berhasil Menghapus Item !');
    }
}
