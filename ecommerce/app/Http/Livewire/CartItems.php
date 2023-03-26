<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartItems extends Component
{
    public $item;

    public function render()
    {
        return view('livewire.cart-items');
    }
}
