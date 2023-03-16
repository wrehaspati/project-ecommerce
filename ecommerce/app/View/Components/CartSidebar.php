<?php

namespace App\View\Components;

use App\Models\Item;
use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\View\Component;

class CartSidebar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        if(Auth::user()):
            $cart = User::find(Auth::user()->id)->carts;
        else:
            $cart = null;
        endif;

        Log::debug($cart);
        
        return view('components.cart-sidebar', ['cart_items' => $cart]);
    }
}
