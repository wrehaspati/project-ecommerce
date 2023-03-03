<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Item;
use App\Models\ItemVariant;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    private function urlConvertion($name)
    {
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

        $id = Item::where('name', $result)->first();

        return $id;
    }

    public function homepage()
    {
        return view('homepage.homepage', ['Items' => Item::select('items.*', 'images.image')->join('images', 'items.id', '=', 'images.item_id')->get()]);
    }

    public function index($name)
    {
        $item = $this->urlConvertion($name);
        $image = Item::find($item->id)->image;
        
        return view('overview.overview', ['item' => $item,'images' => $image]);
    }

    public function edit($name)
    {
        $item = $this->urlConvertion($name);
        $image = Item::find($item->id)->image;
        
        return view('admin.item-edit', ['item' => $item,'images' => $image]);
    }

    public function update(Request $request): RedirectResponse
    {
        $item = Item::find($request->id);
 
        $item->name = $request->name;

        $item->display_price = $request->price;

        $item->general_description = $request->description;
 
        $item->save();


        for($i=1; $i<count(Image::where('item_id', $request->id)->get())+1;$i++):

            if(isset($request->image[$i])):

                $image = Image::find($request->id_image[$i]);

                if(!isset($image)):
                    
                    $image = new Image;

                    $image->item_id = $item->id;

                else:
                    
                    Storage::disk('public')->delete('images/'.$image->name);

                endif; 
                
                $path = $request->image[$i]->store('images', 'public');

                $image->image = basename($path);

                $image->save();

            endif;

        endfor;
 
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
 
        return redirect('admin/database/items');
    }

}
