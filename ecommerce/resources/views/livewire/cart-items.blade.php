<div class="md:flex items-strech py-8 md:py-10 lg:py-8 border-t border-gray-50">
    <div class="md:w-4/12 2xl:w-1/4 w-full">
        @foreach($item->image->take(1) as $images)
            <x-image-control :$images class="h-full object-center object-cover md:block hidden"/>
        @endforeach
    </div>
    <div class="md:pl-3 md:w-8/12 2xl:w-3/4 flex flex-col justify-center">
        <p class="text-xs leading-3 text-gray-800 dark:text-white md:pt-0 pt-4"># Code Item</p>
        <div class="flex items-center justify-between w-full pt-1">
            <p class="text-base font-black leading-none text-gray-800 dark:text-white">
                {{ $item->name }}
            </p>
            <select aria-label="Select quantity" disabled
                class="py-2 px-1 border border-gray-200 mr-6 focus:outline-none dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
                <option disabled selected>Quantity</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
            </select>
        </div>
        <p class="text-xs leading-3 text-gray-600 dark:text-white pt-2">Size: -</p>
        <p class="text-xs leading-3 text-gray-600 dark:text-white py-4">Color: -</p>
        <p class="w-96 text-xs leading-3 text-gray-600 dark:text-white">Composition: -</p>
        <div class="flex items-center justify-between pt-5">
            <div class="flex itemms-center" >
                {{-- <form action="{{ route('wishlist.store') }}" method="POST" class="text-xs leading-3 underline text-gray-800 dark:text-white cursor-pointer">
                    @csrf
                    <input type="hidden" name="item_id" value="{{ $item->id }}">
                    <button type="submit" class="underline">Add to Wishlist</button>
                </form> --}}
                <button wire:click="$emitUp('delt', {{ $item->pivot->id }})"  wire:key="item-{{ $item->pivot->id }}" class="underline text-xs leading-3 underline text-red-500 pl-5 cursor-pointer">Remove</button>
            </div>
            <p class="text-base font-black leading-none text-gray-800 dark:text-white">@idr($item->display_price)</p>
        </div>
    </div>
</div>