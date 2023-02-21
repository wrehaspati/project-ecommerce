<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomepageController extends Controller
{
    public function getItem()
    {
        return view('homepage', ['Items' => Item::all()]);
    }
}
