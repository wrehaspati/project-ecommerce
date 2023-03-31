<x-app-layout>
    <div class="min-h-screen bg-slate-50/50 flex flex-col justify-center">
        <div class="flex flex-col justify-center select-none">
            <div class="flex justify-center mt-12">
                <p class="text-5xl md:text-7xl lg:text-5xl text-black/60 text-pinkish-tan" style="font-family: 'Scriptina', sans-serif;">Find Us</p>
            </div>
            <div class="flex justify-center mt-3 mb-8">
                <h1 class="font-serif text-3xl laptop:text-4xl text-xl">Store Locations</h1>
            </div>
        </div>
        <div class="md:mx-16">
            <div class="flex flex-col lg:flex-row lg:flex-wrap lg:p-0 px-[20vw] justify-center">

                <div class="lg:flex lg:flex-row min-w-full justify-between lg:px-44">
                    <div class="flex md:flex-row p-2">
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
                    <div class="flex flex-row p-2">
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
                            <h3 class="text-pinkish-tan lg:text-black">Contact</h3>
                            <p class="text-black/80 mb-[0.35rem]">Mobile:(+62)081201904</p>
                            <p class="text-black/80">Mail:Tester@sunaka.com</p>
                        </div>
                    </div>
                </div>

                <div class="lg:flex lg:flex-row min-w-full justify-between lg:px-44">
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
                    <div class="flex flex-row p-2">
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
                            <h3  class="text-pinkish-tan lg:text-black">Contact</h3>
                            <p class="text-black/80 mb-[0.35rem]">Mobile:(+62)081201904</p>
                            <p class="text-black/80">Mail:Tester@sunaka.com</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="flex flex-col justify-center select-none pt-16 mt-3 mb-8">
        <div class="flex mx-auto">
            <h2 class="font-serif lg:text-4xl text-3xl">Our Workshop</h2>
        </div>
        <div class="flex mx-auto">
            <p class="font-serif laptop:text-lg italic text-pinkish-tan text-medium text-center">Place where the finest Jewelry were made</p>
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
        
        <div class="max-w-[99%] px-5 md:py-24 mx-left flex hidden lg:block">
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

    </section>

    <div class="contaianer lg:hidden py-20">
        <div class="flex justify-center mb-4 mt-12">
            <h1 class="text-lg text-[1.875rem] text-black/80 font-serif"> Get In Touch</h1>
        </div>
        <div class="w-full">
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
</x-app-layout>
