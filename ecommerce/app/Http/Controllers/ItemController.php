<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Item;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    /**
     * unslug and matching the route
     * 
     * @param name
     * @return id
     */
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

    /**
     * show homepage
     * 
     * @return view
     */
    public function homepage()
    {
        $categories = Category::all();

        return view('homepage.homepage', [
            'Items' => Item::select('items.*', 'images.image')->join('images', 'items.id', '=', 'images.item_id')->get(),
            'Categories' => $categories,
        ]);
    }

    /**
     * show index for admin side
     * 
     * @return view
     */
    public function index()
    {
        return view('admin.items.item-manage');
    }

    /**
     * show create interface for admin side
     * 
     * @return view
     */
    public function create()
    {
        return view('admin.items.item-create');
    }

    /**
     * show product overview interface
     * 
     * @param name
     * @return view
     */
    public function show($name)
    {
        $item = $this->urlConvertion($name);
        $image = Item::find($item->id)->image;
        // $cart = CartUser::where('item_id',$item->id)->first();
        
        return view('overview.overview', ['item' => $item,'images' => $image/* , 'carts' => $cart */]);
    }

    /**
     * show product collections interface
     * 
     * @param name
     * @return view
     */
    public function collection()
    {
        $items = Item::find('all');
        // $items = Item::select('items.*', 'images.image', 'cart_users.item_id')->join('images', 'items.id', '=', 'images.item_id')->leftjoin('cart_users', 'items.id', '=', 'cart_users.item_id')->get();
        // $items = $items->unique('id');
        
        return view('products.products-dashboard', ['items' => $items]);
    }

    /**
     * show product edit interface
     * 
     * @param name
     * @return view
     */
    public function edit($name)
    {
        $item = $this->urlConvertion($name);
        $image = Item::find($item->id)->image;
        
        return view('admin.items.item-edit', ['item' => $item,'images' => $image]);
    }

    /**
     * response to update the product
     * 
     * @param request
     * @param name
     * @return response
     */
    public function update(Request $request, $name): RedirectResponse
    {
        $item = Item::find($name);
 
        $item->name = $request->name;

        $item->display_price = $request->price;

        $item->general_description = $request->description;
 
        $item->save();


        for($i=1; $i<count(Image::where('item_id', $name)->get())+1;$i++):

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
 
        return redirect('admin/products/'.Str::slug($request->name).'/edit');
    }
    
    /**
     * response to update the product
     * 
     * @param request
     * @return response
     */
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

        $x=0;
        while($x < 4):

        $image = new Image;

        $image->image = 'https://via.placeholder.com/300.png';
        $image->item_id = $item->id;

        $image->save();

        $x++;
        endwhile;
 
        return redirect('admin/products');
    }

}
