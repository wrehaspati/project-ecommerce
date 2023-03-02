<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ImageControl extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $images)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.image-control');
    }
}
