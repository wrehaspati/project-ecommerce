<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ItemController extends Controller
{
    public function index($name)
    {
        $result = null;
        $unslug_name = str_replace('-', ' ', $name);

        $raws = Item::all();
        foreach($raws as $raw)
        {
            $slug_raw = Str::slug($raw->name);
            $unslug_raw = str_replace('-', ' ', $slug_raw);
            if($unslug_raw == $unslug_name)
            {
                $result = $raw;
                break;
            }
        }

        return view('item-overview', ['getItem' => Item::find($result)]);
    }
}
