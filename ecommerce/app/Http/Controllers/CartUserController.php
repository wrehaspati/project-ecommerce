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
        $new->cart_id = $cart_detail->id;
        $new->item_id = $request->item_id;
        $new->save();

        return redirect()->back()->with('status','Berhasil Ditambahkan Ke Keranjang !');
    }

    public function destroy($id)
    {
        CartItem::destroy($id);
        
        return redirect()->back()->with('status','Berhasil Menghapus Item !');
    }
}
