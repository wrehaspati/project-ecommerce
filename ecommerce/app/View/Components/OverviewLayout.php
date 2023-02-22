<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OverviewLayout extends Component
{

    public function __construct(public $item)
    {
        //
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('layouts.overview');
    }
}
