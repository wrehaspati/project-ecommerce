<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ContentProduct extends Component
{
    /**
     * Create a new component instance.
     */
    public $konten;
    public function __construct($konten)
    {
        $this->konten=$konten;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.content-product');
    }
}
