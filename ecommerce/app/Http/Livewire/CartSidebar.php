<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Item;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class CartSidebar extends Component
{
    public $showDiv = false;

    protected $listeners = ['delt' => 'deleteItem'];

    public function openDiv()
    {
        $this->showDiv =! $this->showDiv;
    }

    /**
     * return view and cart
     * 
     * @return view
     * @return cart
     */
    public function render()
    {
        if(Auth::user()):
            $cart_detail = Cart::where('user_id', Auth::user()->id)->orderBy('created_at', 'asc')->first();
            if($cart_detail):
                $cart = Cart::find($cart_detail->id)->items;
            else:
                $cart_new = new Cart;
                $cart_new->user_id = Auth::user()->id;
                $cart_new->status = 'open';
                $cart_new->save();
                
                $cart_detail = Cart::where('user_id', Auth::user()->id)->orderBy('created_at', 'asc')->first();
                
                $cart = Cart::find($cart_detail->id)->items;
            endif;
        else:
            $cart = null;
        endif;

        return view('livewire.cart-sidebar', ['cart_items' => $cart]);
    }
    
    public function delete($id)
    {
        CartItem::destroy($id);
    }
}
