<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class ItemController extends Controller
{
    public function index($name)
    {
        $result = null;
        $unslug_name = str_replace('-', ' ', $name);
        $raws = Item::all();

        foreach($raws as $raw):
            $slug_raw = Str::slug($raw->name);
            $unslug_raw = str_replace('-', ' ', $slug_raw);
            if($unslug_raw == $unslug_name):
                $result = $raw;
                break;
            endif;
        endforeach;

        $item = Item::find($result);

        if($result == null):
            abort(404);
        endif;

        return view('overview', ['items' => $item]);
    }

    public function edit($name)
    {
        $result = null;
        $unslug_name = str_replace('-', ' ', $name);
        $raws = Item::all();

        foreach($raws as $raw):
            $slug_raw = Str::slug($raw->name);
            $unslug_raw = str_replace('-', ' ', $slug_raw);
            if($unslug_raw == $unslug_name):
                $result = $raw;
                break;
            endif;
        endforeach;

        $item = Item::find($result);

        if($result == null):
            abort(404);
        endif;

        if($item == null):
            abort(404);
        endif;

        return view('admin.item-edit', ['items' => $item]);
    }

    public function update(Request $request): RedirectResponse
    {
        $item = Item::find($request->id);
 
        $item->name = $request->name;

        $item->display_price = $request->price;

        $item->general_description = $request->description;
 
        $item->save();
 
        return redirect('product/'.Str::slug($request->name).'/edit');
    }

    public function store(Request $request): RedirectResponse
    {
        $item = new Item;
 
        $item->name = $request->name;

        $item->thumbnail = 'https://via.placeholder.com/300.png';

        $item->display_price = $request->price;

        $item->general_description = $request->description;
 
        $item->save();
 
        return redirect('admin/database/item');
    }

}
