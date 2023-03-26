<?php

namespace App\Http\Controllers;

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
        $new = new CartUser();
        $new->item_id = $request->item_id;
        $new->user_id = Auth::user()->id;
        $new->save();

        return redirect()->back()->with('status','Berhasil Ditambahkan Ke Keranjang !');
    }

    public function destroy($id)
    {
        CartUser::destroy($id);
        
        return redirect()->back()->with('status','Berhasil Menghapus Item !');
    }
}
