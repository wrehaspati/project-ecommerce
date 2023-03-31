<x-app-layout>
    <div class="min-h-screen bg-slate-50/50 flex flex-col justify-center">
        <div class="flex flex-col justify-center select-none">
            <div class="flex justify-center mt-12">
                <p class="text-md md:text-5xl text-black/60 text-pinkish-tan" style="font-family: 'Scriptina', sans-serif;">Find Us</p>
            </div>
            <div class="flex justify-center mt-3 mb-8">
                <h1 class="font-serif laptop:text-4xl text-xl">Store Locations</h1>
            </div>
        </div>
        <div class="md:mx-16">
            <div class="flex flex-col laptop:flex-row laptop:flex-wrap laptop:p-0 justify-center">
                <div class="flex flex-row p-2">
                    <div class="my-auto">
                        <span class="material-symbols-rounded text-black/60">location_on</span>
                    </div>
                    <div class="ml-3">
                        <h1 class="text-lg text-pinkish-tan">Sunaka Jewelry Flagship Store</h1>
                        <p>Jln.Tukad Ikan Mas Sari Gang 205 No 402 Badung Kuta</p>
                        <p class="text-black/70">
                            <span class="material-symbols-rounded text-base relative top-[2.5px]">
                                schedule
                            </span>
                            Opening Hours: 10.00-11.00
                        </p>
                    </div>
                </div>
                <div class="flex flex-row p-2 ml-10">
                    <div class="my-6 text-black/50">
                        <span class="material-symbols-rounded">
                            call
                        </span>
                        <p>
                            <span class="material-symbols-rounded">
                                mail
                            </span>
                        </p>
                    </div>
                    <div class="ml-3">
                        <h1>Contact</h1>
                        <p class="text-black/80 mb-[0.35rem]">Mobile:(+62)081201904</p>
                        <p class="text-black/80">Mail:Tester@sunaka.com</p>
                    </div>
                </div>
                <div class="flex flex-row p-2">
                    <div class="my-auto">
                        <span class="material-symbols-rounded text-black/60">location_on</span>
                    </div>
                    <div class="ml-3">
                        <h1 class="text-lg text-pinkish-tan">Sunaka Jewelry Ubud Store</h1>
                        <p>Jln.Tukad Ikan Mujuair Mesra Gang 2 No 40 Denpasar Bali</p>
                        <p class="text-black/70">
                            <span class="material-symbols-rounded text-base relative top-[2.5px]">
                                schedule
                            </span>
                            Opening Hours: 12.00-11.00
                        </p>
                    </div>
                </div>
                <div class="flex flex-row p-2 ml-5">
                    <div class="my-6 text-black/50">
                        <span class="material-symbols-rounded">
                            call
                        </span>
                        <p>
                            <span class="material-symbols-rounded">
                                mail
                            </span>
                        </p>
                    </div>
                    <div class="ml-3">
                        <h1>Contact</h1>
                        <p class="text-black/80 mb-[0.35rem]">Mobile:(+62)081201904</p>
                        <p class="text-black/80">Mail:Tester@sunaka.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col justify-center select-none pt-16 mt-3 mb-8">
        <div class="flex mx-auto">
            <h2 class="font-serif laptop:text-4xl text-xl">Our Workshop</h2>
        </div>
        <div class="flex mx-auto">
            <p class="font-serif laptop:text-lg italic text-pinkish-tan text-xl">Place where the finest Jewelry were made</p>
        </div>
    </div>
    <section
        class="text-gray-600 body-font relative flex flex-col md:min-h-screen">
        <div class="md:absolute md:inset-0 md:bg-gray-300 h-[100vw] md:h-full order-last md:mt-0 mt-14">
            <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map"
                scrolling="no"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d829.335512493164!2d115.27025092008812!3d-8.595346350664595!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23e3a84abd837%3A0x20c252fa7f77bf06!2sJl.%20Jaga%20Raga%20No.28b%2C%20Celuk%2C%20Kec.%20Sukawati%2C%20Kabupaten%20Gianyar%2C%20Bali%2080582!5e0!3m2!1sid!2sid!4v1680246419259!5m2!1sid!2sid"
                style=""></iframe>
        </div>
        
        <div class="max-w-[99%] px-5 md:py-24 mx-left flex">
            <div
                class="md:w-[30vw] bg-white rounded-md p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md mb-10">
                    <div class="flex justify-center mb-4 mt-5">
                        <h1 class="text-lg laptop:text-3xl text-black/80 font-serif"> Get In Touch</h1>
                    </div>
                    <div class="w-full ultra:my-50">
                        <form action="#" method="POST" class="w-full p-3">
                            <div class="flex handphone:hidden laptop:flex justify-between gap-4">
                                <input type="text" placeholder="firstname"
                                    class="w-full bg-transparent mt-3 border-b-2 border-[0px] border-black/50 focus:ring-0 focus:ring-black focus:border-b-black">
                                <input type="text" placeholder="lastname" name="" id=""
                                    class="w-full bg-transparent mt-3 border-b-2 border-[0px] border-black/50 focus:ring-0 focus:ring-black focus:border-b-black">
                            </div>
                            <input type="email" placeholder="example@email.com" name="" id=""
                                class="w-full bg-transparent handphone:inline-block laptop:w-full mt-3 border-b-2 border-[0px] border-black/50 focus:ring-0 focus:ring-black focus:border-b-black">
                            <input type="text" placeholder="subject"
                                class="w-full bg-transparent mt-3 border-b-2 border-[0px] border-black/50 focus:ring-0 focus:ring-black focus:border-b-black">
                            <textarea name="" placeholder="Messege" id="" cols="30" rows="2"
                                class="w-full bg-transparent mt-3 border-b-2 border-[0px] border-black/50 focus:ring-0 focus:ring-black focus:border-b-black">
                            </textarea>
                            <button type="submit"
                                class="p-2 ml-[25%] mt-5 font-serif bg-black text-white w-1/2 hover:transition-all duration-200 hover:bg-white hover:text-black border border-black">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="max-w-[95%] px-5 md:py-24 mx-auto flex">
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
                                <textarea name="message" class="transition-all flex items-center border mt-1 rounded px-4 w-full bg-gray-50"
                                    id="" cols="30" rows="4"></textarea>
                                <label for="soda">Quantity</label>
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
                                </div>
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
        </div> --}}

    </section>

    <div class="contaianer tablet:mt-[10%] laptop:mt-[30%] laptop:ml-[10%] handphone:inline-block lg:hidden">
        <div class="flex justify-center mb-4 mt-5">
            <h1 class="text-lg laptop:text-3xl text-black/80">Get In Touch</h1>
        </div>
        <div class="w-full">
            <form action="#" method="POST" class="w-full p-3">
                <div class="flex handphone:hidden laptop:flex">
                    <input type="text" placeholder="Agus"
                        class="w-full laptop:w-1/2 border-b-2 border-[0px] border-black/50 focus:ring-0 focus:ring-black focus:border-b-black">
                    <input type="email" placeholder="Tester2@gmail.com" name="" id=""
                        class="w-full laptop:ml-12 laptop:w-1/2 mt-3 border-b-2 border-[0px] border-black/50 focus:ring-0 focus:ring-black focus:border-b-black">
                </div>
                <input type="text" placeholder="Agus"
                    class="w-full laptop:hidden handphone:inline-block laptop:w-1/2 border-b-2 border-[0px] border-black/50 focus:ring-0 focus:ring-black focus:border-b-black">
                <input type="email" placeholder="Tester2@gmail.com" name="" id=""
                    class="w-full laptop:hidden handphone:inline-block laptop:ml-12 laptop:w-1/2 mt-3 border-b-2 border-[0px] border-black/50 focus:ring-0 focus:ring-black focus:border-b-black">
                <input type="text" placeholder="Subject"
                    class="w-full mt-3 border-b-2 border-[0px] border-black/50 focus:ring-0 focus:ring-black focus:border-b-black">
                <textarea name="" placeholder="Messege" id="" cols="30" rows="2"
                    class="w-full mt-3 border-b-2 border-[0px] border-black/50 focus:ring-0 focus:ring-black focus:border-b-black">
                </textarea>
                <button type="submit"
                    class="p-2 ml-[25%] mt-5 font-serif bg-black text-white w-1/2 hover:transition-all duration-200 hover:bg-white hover:text-black border border-black">Submit</button>
            </form>
        </div>
    </div>
</x-app-layout>
