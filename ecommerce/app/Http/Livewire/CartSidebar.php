<?php

namespace App\Http\Livewire;

use App\Models\CartUser;
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
            $cart = User::find(Auth::user()->id)->carts;
        else:
            $cart = null;
        endif;
        
        return view('livewire.cart-sidebar', ['cart_items' => $cart]);
    }
    
    public function delete($id)
    {
        CartUser::destroy($id);
    }
}
