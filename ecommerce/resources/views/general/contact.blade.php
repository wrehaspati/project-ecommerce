<x-app-layout>
    <section class="text-gray-600 body-font relative flex flex-col">
        <div class="md:absolute md:inset-0 md:bg-gray-300 h-[100vw] md:h-full order-last md:mt-0 mt-14">
            <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map"
                scrolling="no"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.0070117438972!2d115.26965899999998!3d-8.595322999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23e3a84abd837%3A0x20c252fa7f77bf06!2sJl.%20Jaga%20Raga%20No.28b%2C%20Celuk%2C%20Kec.%20Sukawati%2C%20Kabupaten%20Gianyar%2C%20Bali%2080582!5e0!3m2!1sid!2sid!4v1680101044875!5m2!1sid!2sid"
                style=""></iframe>
        </div>
        <div class="max-w-[95%] px-5 md:py-24 mx-auto flex">
            <div
                class="md:w-2/5 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">


                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                    <div class="text-gray-600 h-full grid grid-flow-row auto-rows-max gap-5">
                        <div>
                            <p class="font-medium text-lg">Customer Service</p>
                            <p>Phone / SMS / Whatsapp: +62811 3960 4855 sales@sunakajewelry.com</p>
                        </div>
                        <div>
                            <p class="font-medium text-lg">Partnership</p>
                            <p>Phone / SMS / Whatsapp: +62811 3960 4855 info@sunakajewelry.com</p>
                        </div>
                        <div>
                            <p class="font-medium text-lg">Workshop</p>
                            <p>
                                Address: Jalan Jagaraga No. 28B, Celuk, Sukawati, Gianyar, Bali, Indonesia, 80582.
                                <br /> Phone : +62 361 298254
                                <br /> Operational : Sunday – Saturday, 09.00 am until 05.00 pm
                            </p>
                        </div>
                    </div>

                    <div class="lg:col-span-2">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                            <div class="md:col-span-5">
                                <label for="full_name">Full Name</label>
                                <input type="text" name="full_name" id="full_name"
                                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                            </div>

                            <div class="md:col-span-5">
                                <label for="email">Email Address</label>
                                <input type="text" name="email" id="email"
                                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                    placeholder="email@domain.com" />
                            </div>

                            <div class="md:col-span-3">
                                <label for="address">Address / Street</label>
                                <input type="text" name="address" id="address"
                                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                    placeholder="" />
                            </div>

                            <div class="md:col-span-2">
                                <label for="city">City</label>
                                <input type="text" name="city" id="city"
                                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                    placeholder="" />
                            </div>

                            <div class="md:col-span-2">
                                <label for="country">Country / region</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="country" id="country" placeholder="Country"
                                        class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent"
                                        value="" />
                                    <button tabindex="-1"
                                        class="cursor-pointer outline-none focus:outline-none transition-all text-gray-300 hover:text-red-600">
                                        <svg class="w-4 h-4 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                    <button tabindex="-1" for="show_more"
                                        class="cursor-pointer outline-none focus:outline-none border-l border-gray-200 transition-all text-gray-300 hover:text-blue-600">
                                        <svg class="w-4 h-4 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="18 15 12 9 6 15"></polyline>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="md:col-span-2">
                                <label for="state">State / province</label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input name="state" id="state" placeholder="State"
                                        class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent"
                                        value="" />
                                    <button tabindex="-1"
                                        class="cursor-pointer outline-none focus:outline-none transition-all text-gray-300 hover:text-red-600">
                                        <svg class="w-4 h-4 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <line x1="18" y1="6" x2="6" y2="18">
                                            </line>
                                            <line x1="6" y1="6" x2="18" y2="18">
                                            </line>
                                        </svg>
                                    </button>
                                    <button tabindex="-1" for="show_more"
                                        class="cursor-pointer outline-none focus:outline-none border-l border-gray-200 transition-all text-gray-300 hover:text-blue-600">
                                        <svg class="w-4 h-4 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="18 15 12 9 6 15"></polyline>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="md:col-span-1">
                                <label for="zipcode">Zipcode</label>
                                <input type="text" name="zipcode" id="zipcode"
                                    class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                    placeholder="" value="" />
                            </div>

                            <div class="md:col-span-5">
                                <div class="inline-flex items-center">
                                    <input type="checkbox" name="billing_same" id="billing_same"
                                        class="form-checkbox" />
                                    <label for="billing_same" class="ml-2">My billing address is
                                        different than above.</label>
                                </div>
                            </div>

                            <div class="md:col-span-5">
                                <label for="message">Message</label>
                                <textarea name="message" class="transition-all flex items-center border mt-1 rounded px-4 w-full bg-gray-50" id="" cols="30" rows="4"></textarea>
                                {{-- <label for="soda">Quantity</label>
                                <div
                                    class="h-10 w-28 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <button tabindex="-1" for="show_more"
                                        class="cursor-pointer outline-none focus:outline-none border-r border-gray-200 transition-all text-gray-500 hover:text-blue-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-2"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <input name="soda" id="soda" placeholder="0"
                                        class="px-2 text-center appearance-none outline-none text-gray-800 w-full bg-transparent"
                                        value="0" />
                                    <button tabindex="-1" for="show_more"
                                        class="cursor-pointer outline-none focus:outline-none border-l border-gray-200 transition-all text-gray-500 hover:text-blue-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-2 fill-current"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div> --}}
                            </div>

                            <div class="md:col-span-5 text-right">
                                <div class="inline-flex items-end">
                                    <button
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
</x-app-layout>
