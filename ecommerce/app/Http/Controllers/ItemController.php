<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Item;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    private function urlConvertion($name){
        $result = null;
        $unslug_name = str_replace('-', ' ', $name);
        $raws = Item::all();

        foreach($raws as $raw):
            $slug_raw = Str::slug($raw->name);
            $unslug_raw = str_replace('-', ' ', $slug_raw);
            if($unslug_raw === $unslug_name):
                $result = $raw->name;
                break;
            endif;
        endforeach;

        if($result == null):
            abort(404);
        endif;

        if($this->checkimg($result) == false):
            $item = Item::where('name', $result)->get();
        else:
            $item = Item::select('items.*', 'images.image')->where('name', $result)->join('images', 'items.id', '=', 'images.item_id')->get();
        endif;
        
        return $item;
    }

    private function checkimg($result){
        $check_img = Item::where('name', $result)->value('id');
        $image = Image::where('item_id',$check_img)->value('item_id');

        if($image == ""):
            return false;
        else:
            return true;
        endif;
    }
    
    public function index($name)
    {
        $item = $this->urlConvertion($name);
        return view('overview', ['items' => $item]);
    }

    public function edit($name)
    {
        $item = $this->urlConvertion($name);
        return view('admin.item-edit', ['items' => $item]);
    }

    public function update(Request $request): RedirectResponse
    {
        $item = Item::find($request->id);
 
        $item->name = $request->name;

        $item->display_price = $request->price;

        $item->general_description = $request->description;
 
        $item->save();

        if($request->thumbnail):
            if($this->checkimg($request->id) == true):
                $image = new Image;
                $path = $request->thumbnail->store('images', 'public');
        
                $image->image = basename($path);
                $image->item_id = $item->id;
        
                $image->save();
            else:
                $image = Image::where('item_id', $request->id)->first();
                $image_name = Image::where('item_id', $request->id)->value('image');
                Storage::disk('public')->delete('images/'.$image_name);
                
                $path = $request->thumbnail->store('images', 'public');
                $image->image = basename($path);

                $image->save();
            endif;
        endif;
 
        return redirect('product/'.Str::slug($request->name).'/edit');
    }

    public function store(Request $request): RedirectResponse
    {
        $item = new Item;
 
        $item->name = $request->name;


        $item->display_price = $request->price;

        $item->general_description = $request->description;
 
        $item->save();

        $image = new Image;
        $path = $request->thumbnail->store('images', 'public');

        $image->image = basename($path);
        $image->item_id = $item->id;

        $image->save();
 
        return redirect('admin/database/item');
    }

}
