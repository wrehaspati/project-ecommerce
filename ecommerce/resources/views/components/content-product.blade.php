<div class="bg-slate-200 hover:shadow-2xl shadow-black">
    <span
        class="material-symbols-rounded absolute bg-slate-100 mt-3 ml-[0.5rem] cursor-pointer handphone:rounded-full tablet:rounded-none">favorite</span>
    <img class="w-full" src="img/model.jpeg" alt="">
    <p class="p-2">{{ $item->name }}</p>
    <p class="text-sm text-black/85 p-2">none</p>
    <p class="p-2">@idr($item->display_price)</p>

    {{-- FORM SUBMIT + BUTTON FOR ADDING ITEM TO CART --}}
    <form action="{{ route('cart.store') }}" method="POST">
        @csrf
        <input type="hidden" name="item_id" value="{{ $item->id }}">
        <button class="text-md bg-blue-400 p-2 text-center text-white hover:bg-blue-600 w-full">
            {{-- <button type="submit"> --}}
                @if ($item->item_id) 
                    Telah masuk ke keranjang
                @else
                    Add to Cart
                @endif
            {{-- </button> --}}
        </button>
    </form>
</div>
