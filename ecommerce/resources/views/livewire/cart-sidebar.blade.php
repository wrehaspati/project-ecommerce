    <div class="hidden sm:flex sm:items-center text-gray-500 text-xs">
        <x-dropdown align="right" width="0" height="12">
            <x-slot name="trigger">
                <button type="button" style="background: transparent; !important"
                    class="bg-transparent inline-flex items-center px-3 py-2 text-xs leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                    <i class="fa-solid fa-cart-shopping"></i>
                    {{ __('MyCart') }}
                </button>
            </x-slot>

            <x-slot name="content">
                @php
                    $total_price = 0;
                @endphp
                <div class="max-h-[65vh] overflow-y-scroll p-6">
                    @foreach ($cart_items as $item)
                        @php
                            $total_price += $item->display_price;
                        @endphp
                        <div class="flex w-[20rem] bg-white relative border-b-2 border-gray-200 py-4"
                            wire:key="item-{{ $item->pivot->id }}">
                            <div class="flex gap-2 w-full">
                                <div class="block min-w-[5rem] min-h-[5rem] bg-cover bg-gray-100 rounded-md"
                                    style="background-image:url(img/kalung.png);background-position: center;">
                                </div>
                                <div class="flex flex-col justify-between w-full">
                                    <div class="flex pb-1 justify-between">
                                        <div class="flex text-sm"> {{ Str::limit($item->name, 50) }} </div>
                                        <div class="cursor-pointer select-none"
                                            wire:click="delete({{ $item->pivot->id }})"><i
                                                class="text-base fa-regular fa-trash-can hover:text-black hover:translate-y-1 transition ease-in-out delay-150"></i>
                                        </div>
                                    </div>
                                    <div class="flex pb-1 justify-between">
                                        <div class="select-none">{{ __('Quantity :') }} 1</div>
                                        <div class="font-semibold">@idr($item->display_price)</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @if (count($cart_items) === 0)
                        <div class="flex w-[20rem] bg-white p-6 relative">
                            <div class="font-serif text-center w-full font-semibold text-xs">
                                {{ __('Your Cart is Empty') }}
                            </div>
                        </div>
                    @endif
                    <div class="grid grid-cols-2 w-full pt-4 px-4">
                        <div class="text-sm font-serif font-semibold">Total</div>
                        <div class="text-sm font-sans font-bold text-end">@idr($total_price)</div>
                    </div>
                    <div class="w-full pt-4 px-4 text-center">
                        <button type="button"
                            class="text-white font-bold py-2 px-4 w-full rounded" style="background-color: rgb(75 85 99 / var(--tw-bg-opacity));">Checkout</button>
                        <p class="text-center w-full pt-3">or, <a href="{{ route('products.dashboard') }}"
                                class="hover:underline underline-offset-4 hover:text-gray-800">Continue Shopping</a></p>
                    </div>
                </div>
            </x-slot>
        </x-dropdown>
    </div>
