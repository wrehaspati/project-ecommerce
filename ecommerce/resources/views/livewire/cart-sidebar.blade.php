{{-- <button onclick="checkoutHandler(false)" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
    <i class="fa-solid fa-cart-shopping"></i>
    {{ __('MyCart') }}
</button> --}}
<div>
    <button type="button" x-on:click="open = ! open" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
        <i class="fa-solid fa-cart-shopping"></i>
        {{ __('MyCart') }}
    </button>

        <div class="absolute top-0 z-10 left-0" :class="{'block': open, 'hidden': ! open}">
            <div class="w-full h-full bg-black dark:bg-gray-900 bg-opacity-90 top-0 overflow-y-auto overflow-x-hidden fixed sticky-0"
                id="chec-div">
                <div class="w-full absolute z-10 right-0 h-full overflow-x-hidden transform translate-x-0 transition ease-in-out duration-700"
                    id="checkout">
                    <div class="flex items-end lg:flex-row flex-col justify-end" id="cart">
                        <div class="lg:w-1/2 md:w-8/12 w-full lg:px-8 lg:py-14 md:px-6 px-4 md:py-8 py-4 bg-white dark:bg-gray-800 overflow-y-scroll overflow-x-hidden lg:h-screen h-auto"
                            id="scroll">
                            <div class="flex items-center text-gray-500 hover:text-gray-600 dark:text-white cursor-pointer"
                            x-on:click="open = ! open">
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
                            
                                <livewire:cart-items :item="$item" :wire:key="$item->pivot->id"/>
                                
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
                                    <button 
                                        class="text-base leading-none w-full py-5 bg-gray-800 border-gray-800 border focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-white dark:hover:bg-gray-700">Checkout</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

</div>



{{-- <script>
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
</script> --}}
