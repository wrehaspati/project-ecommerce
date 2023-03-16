<button onclick="checkoutHandler(false)" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
    <i class="fa-solid fa-cart-shopping"></i>
    {{ __('MyCart') }}
</button>

<style>
    /* width */
    #scroll::-webkit-scrollbar {
        width: 1px;
    }

    /* Track */
    #scroll::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    /* Handle */
    #scroll::-webkit-scrollbar-thumb {
        background: rgb(133, 132, 132);
    }
</style>

    <div class="absolute top-0 z-10 -left-12">
        <div class="w-full h-full bg-black dark:bg-gray-900 bg-opacity-90 top-0 overflow-y-auto overflow-x-hidden fixed sticky-0 hidden"
            id="chec-div">
            <div class="w-full absolute z-10 right-0 h-full overflow-x-hidden transform translate-x-0 transition ease-in-out duration-700"
                id="checkout">
                <div class="flex items-end lg:flex-row flex-col justify-end" id="cart">
                    <div class="lg:w-1/2 md:w-8/12 w-full lg:px-8 lg:py-14 md:px-6 px-4 md:py-8 py-4 bg-white dark:bg-gray-800 overflow-y-scroll overflow-x-hidden lg:h-screen h-auto"
                        id="scroll">
                        <div class="flex items-center text-gray-500 hover:text-gray-600 dark:text-white cursor-pointer"
                            onclick="checkoutHandler(false)">
                            <img class="dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/shopping-cart-1-svg1.svg"
                                alt="previous" />
                            <img class="dark:block hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/shopping-cart-1-svg1dark.svg"
                                alt="previous" />
                            <p class="text-sm pl-2 leading-none dark:hover:text-gray-200">Back</p>
                        </div>
                        <p class="lg:text-4xl text-3xl font-black leading-10 text-gray-800 dark:text-white pt-3">My Cart</p>

                        {{-- Items --}}
                        
                        @foreach ($cart_items as $item)
                         
                            <div class="md:flex items-strech py-8 md:py-10 lg:py-8 border-t border-gray-50">
                                <div class="md:w-4/12 2xl:w-1/4 w-full">
                                    @foreach($item->image->take(1) as $images)
                                    {{-- <img src="https://i.ibb.co/SX762kX/Rectangle-36-1.png" alt="Black Leather Bag"
                                        class="h-full object-center object-cover md:block hidden" />
                                    <img src="https://i.ibb.co/g9xsdCM/Rectangle-37.pngg" alt="Black Leather Bag"
                                        class="md:hidden w-full h-full object-center object-cover" /> --}}
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
                                        <div class="flex itemms-center">
                                            <p class="text-xs leading-3 underline text-gray-800 dark:text-white cursor-pointer">
                                                Add to favorites</p>
                                                <form action="{{ route('cart.destroy', $item->pivot->id) }}" method="POST" class="text-xs leading-3 underline text-red-500 pl-5 cursor-pointer">
                                                    @csrf

                                                    @method('DELETE')

                                                    <button type="submit" class="underline">Remove</button>
                                                </form>
                                        </div>
                                        <p class="text-base font-black leading-none text-gray-800 dark:text-white">@idr($item->display_price)</p>
                                    </div>
                                </div>
                            </div>
                            
                        @endforeach
                        
                    </div>
                    <div class="lg:w-96 md:w-8/12 w-full bg-gray-100 dark:bg-gray-900 h-full">
                        <div
                            class="flex flex-col lg:h-screen h-auto lg:px-8 md:px-7 px-4 lg:py-20 md:py-10 py-6 justify-between overflow-y-auto">
                            <div>
                                <p class="lg:text-4xl text-3xl font-black leading-9 text-gray-800 dark:text-white">Summary
                                </p>
                                <div class="flex items-center justify-between pt-16">
                                    <p class="text-base leading-none text-gray-800 dark:text-white">Subtotal</p>
                                    <p class="text-base leading-none text-gray-800 dark:text-white">$9,000</p>
                                </div>
                                <div class="flex items-center justify-between pt-5">
                                    <p class="text-base leading-none text-gray-800 dark:text-white">Shipping</p>
                                    <p class="text-base leading-none text-gray-800 dark:text-white">$30</p>
                                </div>
                                <div class="flex items-center justify-between pt-5">
                                    <p class="text-base leading-none text-gray-800 dark:text-white">Tax</p>
                                    <p class="text-base leading-none text-gray-800 dark:text-white">$35</p>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center pb-6 justify-between lg:pt-5 pt-20">
                                    <p class="text-2xl leading-normal text-gray-800 dark:text-white">Total</p>
                                    <p class="text-2xl font-bold leading-normal text-right text-gray-800 dark:text-white">
                                        $10,240</p>
                                </div>
                                <button onclick="checkoutHandler1(true)"
                                    class="text-base leading-none w-full py-5 bg-gray-800 border-gray-800 border focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-white dark:hover:bg-gray-700">Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


<script>
    let checkout = document.getElementById("checkout");
    let checdiv = document.getElementById("chec-div");
    let flag3 = true;
    const checkoutHandler = () => {
        if (!flag3) {
            // checkout.classList.add("translate-x-full");
            // checkout.classList.remove("translate-x-0");
            setTimeout(function() {
                checdiv.classList.add("hidden");
            }, 0);
            flag3 = true;
        } else {
            setTimeout(function() {
                // checkout.classList.remove("translate-x-full");
                // checkout.classList.add("translate-x-0");
            }, 0);
            checdiv.classList.remove("hidden");
            flag3 = false;
        }
    };
</script>
