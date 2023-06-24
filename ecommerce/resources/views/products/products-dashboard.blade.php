<x-app-layout>
    <style>
        .material-symbols-rounded {
            font-variation-settings:
                'FILL'0,
                'wght'300,
                'GRAD'-25,
                'opsz'48
        }
    </style>
    <?php 
    if(!isset($_GET['code'])){    
    ?>
    {{-- Sidebar(Filter Mobile)  --}}
    <div id="background" class="absolute handphone:flex tablet:hidden w-full opacity-1 -z-1 h-full bg-black/50"></div>
    <div id="sidebar"
        class="fixed handphone:inline-block tablet:hidden w-[60%] h-[100%] overflow-scroll -z-1 -left-9 opacity-1 bg-white">
        <button id="close" class="relative top-2 left-[80%]">
            <span class="material-symbols-rounded text-[2.5rem]">close</span>
        </button>
        <div class="ml-5">
            <h1 class="font-serif text-lg mb-2">Search</h1>
            <a href="#"><span
                    class="material-symbols-rounded absolute top-[5.2rem] left-52 text-black/60">search</span></a><input
                type="text"
                class="border-0 border-b-[1.5px] focus:outline-none focus:ring-0 focus:border-black border-black/60 rounded-md mb-9"
                placeholder="Necklace of Darkness">
            <h1 class="font-serif text-lg">Categories</h1>
            <div class="overflow-scroll w-[85%] h-52 mb-8">
                <ul class="mt-2 ml-4 text-black/80">
                    <li class="mt-4"><a href="products?code=aeon">Aeon</a></li>
                    <li class="mt-4"><a href="#">Anggrek</a></li>
                    <li class="mt-4"><a href="products?code=asoka">Asoka</a></li>
                    <li class="mt-4"><a href="#">Ayung</a></li>
                    <li class="mt-4"><a href="#">Batik</a></li>
                    <li class="mt-4"><a href="#">Batur</a></li>
                    <li class="mt-4"><a href="#">Bhineka</a></li>
                    <li class="mt-4"><a href="#">Birth Stone</a></li>
                </ul>
            </div>
            <h1 class="font-seirf text-lg mb-2">Types</h1>
            <div class="mb-5">
                <ul class="mt-2 ml-4 text-black/80">
                    <li class="mt-4"><a href="#">Necklace</a></li>
                    <li class="mt-4"><a href="#">Liontin</a></li>
                    <li class="mt-4"><a href="#">Ring</a></li>
                </ul>
            </div>
        </div>
    </div>
    {{-- Filter --}}
    <div class="container max-w-full bg-slate-300">
        <div class="flex p-4">
            <span id="single"
                class="material-symbols-rounded cursor-pointer hidden text-slate-700 hover:text-black">grid_view</span>
            <span id="multiple"
                class="material-symbols-rounded cursor-pointer ml-3 hidden text-slate-700 hover:text-black">view_list</span>
            <a href="#" id="filter"
                class="text-md handphone:inline-block tablet:hidden font-serif ml-auto"><span
                    class="material-symbols-rounded">filter_alt</span><span class="relative -top-1">Filters</span></a>
            <a href="#" id="filter2" class="text-md font-serif handphone:hidden tablet:hidden  ml-auto"><span
                    class="material-symbols-rounded">filter_alt</span><span class="relative -top-1">Filters</span></a>
            <a href="#" id="filter3" class="text-md font-serif handphone:hidden tablet:hidden ml-auto"><span
                    class="material-symbols-rounded">filter_alt</span><span class="relative -top-1">Filters</span></a>
        </div>
    </div>
    {{-- Sidebar(Fitur Tablet ++) --}}
    <div id="siding"
        class="container flex mac:justify-center flex-wrap overflow-scroll max-w-full bg-slate-300/20 h-0">
        <div class="p-4">
            <h1 class="font-serif text-xl ml-3">Search</h1>
            <a href="#"><span
                    class="material-symbols-rounded relative left-[95%] top-2 text-black/60">search</span></a><input
                type="text"
                class="border-0 bg-transparent relative -top-1 -left-4 border-b-[1.5px] focus:outline-none focus:ring-0 focus:border-black border-black/60 rounded-md mb-9"
                placeholder="Necklace of Darkness">
        </div>
        <div class="p-4 overflow-hidden lg:ml-7">
            <h1 class="font-serif text-xl">Categories</h1>
            <div class="overflow-scroll text-sm h-32 w-[8rem]">
                <ul class="mt-2 ml-4 text-black/75">
                    <li class="mt-4 hover:text-black"><a href="products?code=aeon">Aeon</a></li>
                    <li class="mt-4 hover:text-black"><a href="#">Anggrek</a></li>
                    <li class="mt-4 hover:text-black"><a href="products?code=asoka">Asoka</a></li>
                    <li class="mt-4 hover:text-black"><a href="#">Ayung</a></li>
                    <li class="mt-4 hover:text-black"><a href="#">Batik</a></li>
                    <li class="mt-4 hover:text-black"><a href="#">Batur</a></li>
                    <li class="mt-4 hover:text-black"><a href="#">Bhineka</a></li>
                    <li class="mt-4 hover:text-black"><a href="#">Birth Stone</a></li>
                </ul>
            </div>
        </div>
        <div class="p-4 overflow-hidden lg:ml-7">
            <h1 class="font-serif text-xl">Color</h1>
            <div class="overflow-scroll h-32 w-[9rem]">
                <ul class="mt-2 ml-4 text-sm text-black/80">
                    <li class="mt-4"><span class="bg-red-400 pl-4 rounded-[100%] w-full"></span><a href="#"
                            class="ml-1 hover:text-red-400">Red
                            Rose</a></li>
                    <li class="mt-4"><span class="bg-blue-400 pl-4 rounded-[100%] w-full"></span><a href="#"
                            class="ml-1 hover:text-blue-400">Blue
                            Sky</a></li>
                    <li class="mt-4"><span class="bg-yellow-400 pl-4 rounded-[100%] w-full"></span><a
                            href="#" class="ml-1 hover:text-yellow-400">Liontin Purif</a></li>
                    <li class="mt-4"><span class="bg-green-400 pl-4 rounded-[100%] w-full"></span><a href="#"
                            class="ml-1 hover:text-green-400">Hunter</a></li>
                    <li class="mt-4"><span class="bg-purple-400 pl-4 rounded-[100%] w-full"></span><a
                            href="#" class="ml-1 hover:text-purple-400">Necklace Light</a></li>
                    <li class="mt-4"><span class="bg-pink-400 pl-4 rounded-[100%] w-full"></span><a href="#"
                            class="ml-1 hover:text-pink-400">Necklace Dark</a></li>
                    <li class="mt-4"><span class="bg-black pl-4 rounded-[100%] w-full"></span><a href="#"
                            class="ml-1">Liontin Purif</a></li>
                    <li class="mt-4"><span class="bg-white pl-4 rounded-[100%] w-full"></span><a href="#"
                            class="ml-1">Alchemist </a></li>
                </ul>
            </div>
        </div>
        <div class="p-4 overflow-hidden lg:ml-7">
            <h1 class="font-serif text-xl">Types</h1>
            <div class="overflow-scroll text-sm h-32 w-[8rem]">
                <ul class="mt-2 ml-4 text-black/80">
                    <li class="mt-4"><a href="#">Necklace </a></li>
                    <li class="mt-4"><a href="#">Bracelet</a></li>
                    <li class="mt-4"><a href="#">Ring</a></li>
                    <li class="mt-4"><a href="#">Liontin</a></li>
                    <li class="mt-4"><a href="#">Earring</a></li>
                </ul>
            </div>
        </div>
        <div class="p-4 overflow-hidden lg:ml-7">
            <h1 class="font-serif text-xl">Informations</h1>
            <div class="overflow-scroll text-sm h-32 w-[8rem]">
                <ul class="mt-2 ml-4 text-black/80">
                    <li class="mt-4"><a href="#">Wholesale </a></li>
                    <li class="mt-4"><a href="#">Customer Service</a></li>
                    <li class="mt-4"><a href="#">Privacy </a></li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        {{-- Content --}}
        <div class="container max-w-full h-full">
            <div class="justify-center text-center">
                <h1 class="mt-4 font-serif"><a href="products?code=aeon">Aeon Collection</a></h1>
                <p class="bg-black/10 mt-3 h-[0.10rem] ml-[25%] w-1/2 mb-5"></p>
                <div
                    class="container max-w-full bg-white mt-4 grid xl:grid-cols-4 handphone:flex handphone:ml-[17%] handphone:flex-col tablet:ml-0 tablet:flex tablet:flex-row lg:flex lg:flex-row tablet:gap-5 justify-center">

                    <div id="conten" class="group handphone:mb-5 laptop:ml-10 xl:ml-5 lg:w-fit">
                        <div class="w-72">
                            <img src="img/silver.jpg" class="relative" alt="">
                            <img src="img/silver2.jpg" class="relative -mt-[100%] group-hover:animate-fade"
                                alt="">

                            <div class="grid grid-cols-2 relative z-1 bottom-30 -mt-[50%] ml-[55%]">
                                <div id="first"
                                    class="bg-gray-700 rounded-sm text-white z-1 mx-auto relative right-10 overflow-hidden my-auto p-1 opacity-1">
                                    <p id="ichi" class="font-serif cursor-default w-24 text-center">
                                        Wishlist</p>
                                </div>
                                <div class="ml-5">
                                    <span id="satu"
                                        class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300">
                                        favorite
                                    </span>
                                </div>
                                <div id="second"
                                    class="bg-gray-700 rounded-sm text-white relative right-10 mx-auto overflow-hidden my-auto p-1 opacity-1">
                                    <p id="ni" class="font-serif cursor-default w-24 text-center">
                                        Compare</p>
                                </div>
                                <div class="ml-5">
                                    <span id="dua"
                                        class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300 group-hover:delay-75">
                                        compare_arrows
                                    </span>
                                </div>
                                <div id="third"
                                    class="bg-gray-700 rounded-sm text-white z-1 mx-auto relative right-10 overflow-hidden my-auto p-1 opacity-1">
                                    <p id="san" class="font-serif cursor-default w-24 text-center">
                                        Quick View</p>
                                </div>
                                <div class="ml-5">
                                    <span id="tiga"
                                        class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300 group-hover:delay-100">
                                        search
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div id="ele"
                            class="bg-slate-300 w-72 relative z-1 overflow-hidden text-start h-0 mt-4">
                            <p class="font-serif text-black p-2 text-2xl mb-2">Aeron Strengh Necklace</p>
                            <p class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Deserunt, repellat!
                            </p>
                            <p class="text-end">$601.50</p>
                            <p class="bg-slate-500 w-72 p-2 hover:bg-slate-700 text-white"><a href="#"
                                    class="ml-[40%]">Buy
                                    Now</a></p>
                        </div>
                    </div>
                    <div id="asoka" class="group handphone:mb-5 tablet:ml-0 laptop:ml-10 xl:ml-0 lg:w-fit">
                        <div class="w-72">
                            <img src="img/silver3.jpg" class="relative" alt="">
                            <img src="img/silver4.jpg" class="relative -mt-[100%] group-hover:animate-fade"
                                alt="">

                            <div class="grid grid-cols-2 relative z-1 bottom-30 -mt-[50%] ml-[55%]">
                                <div id="asoka1"
                                    class="bg-gray-700 rounded-sm text-white z-1 mx-auto relative right-10 overflow-hidden my-auto p-1 opacity-1">
                                    <p id="asok1" class="font-serif cursor-default w-24 text-center">
                                        Wishlist</p>
                                </div>
                                <div class="ml-5">
                                    <span id="subasoka1"
                                        class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300">
                                        favorite
                                    </span>
                                </div>
                                <div id="asoka2"
                                    class="bg-gray-700 rounded-sm text-white relative right-10 mx-auto overflow-hidden my-auto p-1 opacity-1">
                                    <p id="asok2" class="font-serif cursor-default w-24 text-center">
                                        Compare</p>
                                </div>
                                <div class="ml-5">
                                    <span id="subasoka2"
                                        class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300 group-hover:delay-75">
                                        compare_arrows
                                    </span>
                                </div>
                                <div id="asoka3"
                                    class="bg-gray-700 rounded-sm text-white z-1 mx-auto relative right-10 overflow-hidden my-auto p-1 opacity-1">
                                    <p id="asok3" class="font-serif cursor-default w-24 text-center">
                                        Quick View</p>
                                </div>
                                <div class="ml-5">
                                    <span id="subasoka3"
                                        class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300 group-hover:delay-100">
                                        search
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div id="vat"
                            class="bg-slate-300 w-72 relative z-1 overflow-hidden text-start h-0 mt-4">
                            <p class="font-serif text-black p-2 text-2xl mb-2">Aeron Ring Speed</p>
                            <p class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Deserunt, repellat!
                            </p>
                            <p class="text-end">$301.50</p>
                            <p class="bg-slate-500 w-72 p-2 hover:bg-slate-700 text-white"><a href="#"
                                    class="ml-[40%]">Buy
                                    Now</a></p>
                        </div>
                    </div>
                    <div id="anggre"
                        class="group tablet:ml-5 handphone:mb-5 laptop:ml-10 xl:ml-0 tablet:hidden lg:flex flex-col lg:w-fit">
                        <div class="w-72">
                            <img src="img/silver5.jpg" class="relative" alt="">
                            <img src="img/silver6.jpg" class="relative -mt-[100%] group-hover:animate-fade"
                                alt="">

                            <div class="grid grid-cols-2 relative z-1 bottom-30 -mt-[50%] ml-[55%]">
                                <div id="anggrek1"
                                    class="bg-gray-700 rounded-sm text-white z-1 mx-auto relative right-10 overflow-hidden my-auto p-1 opacity-1">
                                    <p id="anggr1" class="font-serif cursor-default w-24 text-center">
                                        Wishlist</p>
                                </div>
                                <div class="ml-5">
                                    <span id="subanggr1"
                                        class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300">
                                        favorite
                                    </span>
                                </div>
                                <div id="anggrek2"
                                    class="bg-gray-700 rounded-sm text-white relative right-10 mx-auto overflow-hidden my-auto p-1 opacity-1">
                                    <p id="anggr2" class="font-serif cursor-default w-24 text-center">
                                        Compare</p>
                                </div>
                                <div class="ml-5">
                                    <span id="subanggr2"
                                        class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300 group-hover:delay-75">
                                        compare_arrows
                                    </span>
                                </div>
                                <div id="anggrek3"
                                    class="bg-gray-700 rounded-sm text-white z-1 mx-auto relative right-10 overflow-hidden my-auto p-1 opacity-1">
                                    <p id="anggr3" class="font-serif cursor-default w-24 text-center">
                                        Quick View</p>
                                </div>
                                <div class="ml-5">
                                    <span id="subanggr3"
                                        class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300 group-hover:delay-100">
                                        search
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div id="tora"
                            class="bg-slate-300 w-72 relative z-1 overflow-hidden text-start h-0 mt-4">
                            <p class="font-serif text-black p-2 text-2xl mb-2">Aeron ring</p>
                            <p class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Deserunt, repellat!
                            </p>
                            <p class="text-end">$301.50</p>
                            <p class="bg-slate-500 w-72 p-2 hover:bg-slate-700 text-white"><a href="#"
                                    class="ml-[40%]">Buy
                                    Now</a></p>
                        </div>
                    </div>
                    <div id="ayun" class="group tablet:ml-5 laptop:ml-10 xl:ml-0 tablet:hidden xl:flex flex-col">
                        <div class="w-72">
                            <img src="img/silver7.jpg" class="relative" alt="">
                            <img src="img/silver8.jpg" class="relative -mt-[100%] group-hover:animate-fade"
                                alt="">

                            <div class="grid grid-cols-2 relative z-1 bottom-30 -mt-[50%] ml-[55%]">
                                <div id="ayung1"
                                    class="bg-gray-700 rounded-sm text-white z-1 mx-auto relative right-10 overflow-hidden my-auto p-1 opacity-1">
                                    <p id="ayun1" class="font-serif cursor-default w-24 text-center">
                                        Wishlist</p>
                                </div>
                                <div class="ml-5">
                                    <span id="subayun1"
                                        class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300">
                                        favorite
                                    </span>
                                </div>
                                <div id="ayung2"
                                    class="bg-gray-700 rounded-sm text-white relative right-10 mx-auto overflow-hidden my-auto p-1 opacity-1">
                                    <p id="ayun2" class="font-serif cursor-default w-24 text-center">
                                        Compare</p>
                                </div>
                                <div class="ml-5">
                                    <span id="subayun2"
                                        class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300 group-hover:delay-75">
                                        compare_arrows
                                    </span>
                                </div>
                                <div id="ayung3"
                                    class="bg-gray-700 rounded-sm text-white z-1 mx-auto relative right-10 overflow-hidden my-auto p-1 opacity-1">
                                    <p id="ayun3" class="font-serif cursor-default w-24 text-center">
                                        Quick View</p>
                                </div>
                                <div class="ml-5">
                                    <span id="subayun3"
                                        class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300 group-hover:delay-100">
                                        search
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div id="vio"
                            class="bg-slate-300 w-72 relative z-1 overflow-hidden text-start h-0 mt-4">
                            <p class="font-serif text-black p-2 text-2xl mb-2">Aeron Agility Earring</p>
                            <p class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Deserunt, repellat!
                            </p>
                            <p class="text-end">$301.50</p>
                            <p class="bg-slate-500 w-72 p-2 hover:bg-slate-700 text-white"><a href="#"
                                    class="ml-[40%]">Buy
                                    Now</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="justify-center text-center">
            <h1 class="mt-4 font-serif"><a href="products?code=asoka">Asoka Collection</a></h1>
            <p class="bg-black/10 mt-3 h-[0.10rem] ml-[25%] w-1/2 mb-5"></p>
            <div
                class="container max-w-full bg-white mt-4 grid xl:grid-cols-4 handphone:flex handphone:ml-[17%] handphone:flex-col tablet:ml-0 tablet:flex tablet:flex-row lg:flex lg:flex-row tablet:gap-5 justify-center">

                <div id="silve" class="group handphone:mb-5 laptop:ml-10 xl:ml-5 lg:w-fit">
                    <div class="w-72">
                        <img src="img/asoka.jpg" class="relative" alt="">
                        <img src="img/asoka2.jpg" class="relative -mt-[100%] group-hover:animate-fade"
                            alt="">

                        <div class="grid grid-cols-2 relative z-1 bottom-30 -mt-[50%] ml-[55%]">
                            <div id="silver1"
                                class="bg-gray-700 rounded-sm text-white z-1 mx-auto relative right-10 overflow-hidden my-auto p-1 opacity-1">
                                <p id="silve1" class="font-serif cursor-default w-24 text-center">
                                    Wishlist</p>
                            </div>
                            <div class="ml-5">
                                <span id="subsilve1"
                                    class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300">
                                    favorite
                                </span>
                            </div>
                            <div id="silver2"
                                class="bg-gray-700 rounded-sm text-white relative right-10 mx-auto overflow-hidden my-auto p-1 opacity-1">
                                <p id="silve2" class="font-serif cursor-default w-24 text-center">
                                    Compare</p>
                            </div>
                            <div class="ml-5">
                                <span id="subsilve2"
                                    class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300 group-hover:delay-75">
                                    compare_arrows
                                </span>
                            </div>
                            <div id="silver3"
                                class="bg-gray-700 rounded-sm text-white z-1 mx-auto relative right-10 overflow-hidden my-auto p-1 opacity-1">
                                <p id="silve3" class="font-serif cursor-default w-24 text-center">
                                    Quick View</p>
                            </div>
                            <div class="ml-5">
                                <span id="subsilve3"
                                    class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300 group-hover:delay-100">
                                    search
                                </span>
                            </div>
                        </div>
                    </div>
                    <div id="equ" class="bg-slate-300 w-72 relative z-1 overflow-hidden text-start h-0 mt-4">
                        <p class="font-serif text-black p-2 text-2xl mb-2">Asoka Magic</p>
                        <p class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Deserunt, repellat!
                        </p>
                        <p class="text-end">$601.50</p>
                        <p class="bg-slate-500 w-72 p-2 hover:bg-slate-700 text-white"><a href="#"
                                class="ml-[40%]">Buy
                                Now</a></p>
                    </div>
                </div>
                <div id="bhinek" class="group handphone:mb-5 tablet:ml-0 laptop:ml-10 xl:ml-0 lg:w-fit">
                    <div class="w-72">
                        <img src="img/asoka3.jpg" class="relative" alt="">
                        <img src="img/asoka8.jpg" class="relative -mt-[100%] group-hover:animate-fade"
                            alt="">

                        <div class="grid grid-cols-2 relative z-1 bottom-30 -mt-[50%] ml-[55%]">
                            <div id="bhineka1"
                                class="bg-gray-700 rounded-sm text-white z-1 mx-auto relative right-10 overflow-hidden my-auto p-1 opacity-1">
                                <p id="bhinek1" class="font-serif cursor-default w-24 text-center">
                                    Wishlist</p>
                            </div>
                            <div class="ml-5">
                                <span id="subbhinek1"
                                    class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300">
                                    favorite
                                </span>
                            </div>
                            <div id="bhineka2"
                                class="bg-gray-700 rounded-sm text-white relative right-10 mx-auto overflow-hidden my-auto p-1 opacity-1">
                                <p id="bhinek2" class="font-serif cursor-default w-24 text-center">
                                    Compare</p>
                            </div>
                            <div class="ml-5">
                                <span id="subbhinek2"
                                    class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300 group-hover:delay-75">
                                    compare_arrows
                                </span>
                            </div>
                            <div id="bhineka3"
                                class="bg-gray-700 rounded-sm text-white z-1 mx-auto relative right-10 overflow-hidden my-auto p-1 opacity-1">
                                <p id="bhinek3" class="font-serif cursor-default w-24 text-center">
                                    Quick View</p>
                            </div>
                            <div class="ml-5">
                                <span id="subbhinek3"
                                    class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300 group-hover:delay-100">
                                    search
                                </span>
                            </div>
                        </div>
                    </div>
                    <div id="dor" class="bg-slate-300 w-72 relative z-1 overflow-hidden text-start h-0 mt-4">
                        <p class="font-serif text-black p-2 text-2xl mb-2">Asoka Speed</p>
                        <p class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Deserunt, repellat!
                        </p>
                        <p class="text-end">$301.50</p>
                        <p class="bg-slate-500 w-72 p-2 hover:bg-slate-700 text-white"><a href="#"
                                class="ml-[40%]">Buy
                                Now</a></p>
                    </div>
                </div>
                <div id="bati"
                    class="group tablet:ml-5 handphone:mb-5 laptop:ml-10 xl:ml-0 tablet:hidden lg:flex flex-col lg:w-fit">
                    <div class="w-72">
                        <img src="img/asoka4.jpg" class="relative" alt="">
                        <img src="img/asoka5.jpg" class="relative -mt-[100%] group-hover:animate-fade"
                            alt="">

                        <div class="grid grid-cols-2 relative z-1 bottom-30 -mt-[50%] ml-[55%]">
                            <div id="batik1"
                                class="bg-gray-700 rounded-sm text-white z-1 mx-auto relative right-10 overflow-hidden my-auto p-1 opacity-1">
                                <p id="bati1" class="font-serif cursor-default w-24 text-center">
                                    Wishlist</p>
                            </div>
                            <div class="ml-5">
                                <span id="subbati1"
                                    class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300">
                                    favorite
                                </span>
                            </div>
                            <div id="batik2"
                                class="bg-gray-700 rounded-sm text-white relative right-10 mx-auto overflow-hidden my-auto p-1 opacity-1">
                                <p id="bati2" class="font-serif cursor-default w-24 text-center">
                                    Compare</p>
                            </div>
                            <div class="ml-5">
                                <span id="subbati2"
                                    class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300 group-hover:delay-75">
                                    compare_arrows
                                </span>
                            </div>
                            <div id="batik3"
                                class="bg-gray-700 rounded-sm text-white z-1 mx-auto relative right-10 overflow-hidden my-auto p-1 opacity-1">
                                <p id="bati3" class="font-serif cursor-default w-24 text-center">
                                    Quick View</p>
                            </div>
                            <div class="ml-5">
                                <span id="subbati3"
                                    class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300 group-hover:delay-100">
                                    search
                                </span>
                            </div>
                        </div>
                    </div>
                    <div id="kha" class="bg-slate-300 w-72 relative z-1 overflow-hidden text-start h-0 mt-4">
                        <p class="font-serif text-black p-2 text-2xl mb-2">Asoka ring</p>
                        <p class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Deserunt, repellat!
                        </p>
                        <p class="text-end">$301.50</p>
                        <p class="bg-slate-500 w-72 p-2 hover:bg-slate-700 text-white"><a href="#"
                                class="ml-[40%]">Buy
                                Now</a></p>
                    </div>
                </div>
                <div id="batu" class="group tablet:ml-5 laptop:ml-10 xl:ml-0 tablet:hidden xl:flex flex-col">
                    <div class="w-72">
                        <img src="img/asoka6.jpg" class="relative" alt="">
                        <img src="img/asoka7.jpg" class="relative -mt-[100%] group-hover:animate-fade"
                            alt="">

                        <div class="grid grid-cols-2 relative z-1 bottom-30 -mt-[50%] ml-[55%]">
                            <div id="batur1"
                                class="bg-gray-700 rounded-sm text-white z-1 mx-auto relative right-10 overflow-hidden my-auto p-1 opacity-1">
                                <p id="batu1" class="font-serif cursor-default w-24 text-center">
                                    Wishlist</p>
                            </div>
                            <div class="ml-5">
                                <span id="subbatu1"
                                    class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300">
                                    favorite
                                </span>
                            </div>
                            <div id="batur2"
                                class="bg-gray-700 rounded-sm text-white relative right-10 mx-auto overflow-hidden my-auto p-1 opacity-1">
                                <p id="batu2" class="font-serif cursor-default w-24 text-center">
                                    Compare</p>
                            </div>
                            <div class="ml-5">
                                <span id="subbatu2"
                                    class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300 group-hover:delay-75">
                                    compare_arrows
                                </span>
                            </div>
                            <div id="batur3"
                                class="bg-gray-700 rounded-sm text-white z-1 mx-auto relative right-10 overflow-hidden my-auto p-1 opacity-1">
                                <p id="batu3" class="font-serif cursor-default w-24 text-center">
                                    Quick View</p>
                            </div>
                            <div class="ml-5">
                                <span id="subbatu3"
                                    class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300 group-hover:delay-100">
                                    search
                                </span>
                            </div>
                        </div>
                    </div>
                    <div id="tul" class="bg-slate-300 w-72 relative z-1 overflow-hidden text-start h-0 mt-4">
                        <p class="font-serif text-black p-2 text-2xl mb-2">Asoka Speed necklace</p>
                        <p class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Deserunt, repellat!
                        </p>
                        <p class="text-end">$301.50</p>
                        <p class="bg-slate-500 w-72 p-2 hover:bg-slate-700 text-white"><a href="#"
                                class="ml-[40%]">Buy
                                Now</a></p>
                    </div>
                </div>
            </div>
        </div>
        <?php 
    }else if(isset($_GET['code'])){
        if($_GET['code'] == 'aeon'){
    ?>
        {{-- Detailed Content AEON --}}
        {{-- Sidebar(Filter Mobile)  --}}
        <div id="background" class="absolute handphone:flex tablet:hidden w-full opacity-1 -z-1 h-full bg-black/50">
        </div>
        <div id="sidebar"
            class="fixed handphone:inline-block tablet:hidden w-[60%] h-[100%] overflow-scroll -z-1 -left-9 opacity-1 bg-white">
            <button id="close" class="relative top-2 left-[80%]">
                <span class="material-symbols-rounded text-[2.5rem]">close</span>
            </button>
            <div class="ml-5">
                <h1 class="font-serif text-lg mb-2">Search</h1>
                <a href="#"><span
                        class="material-symbols-rounded absolute top-[5.2rem] left-52 text-black/60">search</span></a><input
                    type="text"
                    class="border-0 border-b-[1.5px] focus:outline-none focus:ring-0 focus:border-black border-black/60 rounded-md mb-9"
                    placeholder="Necklace of Darkness">
                <h1 class="font-serif text-lg">Categories</h1>
                <div class="overflow-scroll w-[85%] h-52 mb-8">
                    <ul class="mt-2 ml-4 text-black/80">
                        <li class="mt-4"><a href="products?code=aeon">Aeon</a></li>
                        <li class="mt-4"><a href="#">Anggrek</a></li>
                        <li class="mt-4"><a href="products?code=asoka">Asoka</a></li>
                        <li class="mt-4"><a href="#">Ayung</a></li>
                        <li class="mt-4"><a href="#">Batik</a></li>
                        <li class="mt-4"><a href="#">Batur</a></li>
                        <li class="mt-4"><a href="#">Bhineka</a></li>
                        <li class="mt-4"><a href="#">Birth Stone</a></li>
                    </ul>
                </div>
                <h1 class="font-seirf text-lg mb-2">Types</h1>
                <div class="mb-5">
                    <ul class="mt-2 ml-4 text-black/80">
                        <li class="mt-4"><a href="#">Necklace</a></li>
                        <li class="mt-4"><a href="#">Liontin</a></li>
                        <li class="mt-4"><a href="#">Ring</a></li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- Filter --}}
        <div class="container max-w-full bg-slate-300">
            <div class="flex p-4">
                <span id="single"
                    class="material-symbols-rounded cursor-pointer text-slate-700 hover:text-black">grid_view</span>
                <span id="multiple"
                    class="material-symbols-rounded cursor-pointer ml-3 text-slate-700 hover:text-black">view_list</span>
                <a href="#" id="filter"
                    class="text-md handphone:inline-block tablet:hidden font-serif ml-auto"><span
                        class="material-symbols-rounded">filter_alt</span><span
                        class="relative -top-1">Filters</span></a>
                <a href="#" id="filter2"
                    class="text-md font-serif handphone:hidden tablet:hidden  ml-auto"><span
                        class="material-symbols-rounded">filter_alt</span><span
                        class="relative -top-1">Filters</span></a>
                <a href="#" id="filter3"
                    class="text-md font-serif handphone:hidden tablet:hidden ml-auto"><span
                        class="material-symbols-rounded">filter_alt</span><span
                        class="relative -top-1">Filters</span></a>
            </div>
        </div>
        {{-- Sidebar(Fitur Tablet ++) --}}
        <div id="siding"
            class="container flex mac:justify-center flex-wrap overflow-scroll max-w-full bg-slate-300/20 h-0">
            <div class="p-4">
                <h1 class="font-serif text-xl ml-3">Search</h1>
                <a href="#"><span
                        class="material-symbols-rounded relative left-[95%] top-2 text-black/60">search</span></a><input
                    type="text"
                    class="border-0 bg-transparent relative -top-1 -left-4 border-b-[1.5px] focus:outline-none focus:ring-0 focus:border-black border-black/60 rounded-md mb-9"
                    placeholder="Necklace of Darkness">
            </div>
            <div class="p-4 overflow-hidden lg:ml-7">
                <h1 class="font-serif text-xl">Categories</h1>
                <div class="overflow-scroll text-sm h-32 w-[8rem]">
                    <ul class="mt-2 ml-4 text-black/75">
                        <li class="mt-4 hover:text-black"><a href="products?code=aeon">Aeon</a></li>
                        <li class="mt-4 hover:text-black"><a href="#">Anggrek</a></li>
                        <li class="mt-4 hover:text-black"><a href="products?code=asoka">Asoka</a></li>
                        <li class="mt-4 hover:text-black"><a href="#">Ayung</a></li>
                        <li class="mt-4 hover:text-black"><a href="#">Batik</a></li>
                        <li class="mt-4 hover:text-black"><a href="#">Batur</a></li>
                        <li class="mt-4 hover:text-black"><a href="#">Bhineka</a></li>
                        <li class="mt-4 hover:text-black"><a href="#">Birth Stone</a></li>
                    </ul>
                </div>
            </div>
            <div class="p-4 overflow-hidden lg:ml-7">
                <h1 class="font-serif text-xl">Color</h1>
                <div class="overflow-scroll h-32 w-[9rem]">
                    <ul class="mt-2 ml-4 text-sm text-black/80">
                        <li class="mt-4"><span class="bg-red-400 pl-4 rounded-[100%] w-full"></span><a
                                href="#" class="ml-1 hover:text-red-400">Red
                                Rose</a></li>
                        <li class="mt-4"><span class="bg-blue-400 pl-4 rounded-[100%] w-full"></span><a
                                href="#" class="ml-1 hover:text-blue-400">Blue
                                Sky</a></li>
                        <li class="mt-4"><span class="bg-yellow-400 pl-4 rounded-[100%] w-full"></span><a
                                href="#" class="ml-1 hover:text-yellow-400">Liontin Purif</a></li>
                        <li class="mt-4"><span class="bg-green-400 pl-4 rounded-[100%] w-full"></span><a
                                href="#" class="ml-1 hover:text-green-400">Hunter</a></li>
                        <li class="mt-4"><span class="bg-purple-400 pl-4 rounded-[100%] w-full"></span><a
                                href="#" class="ml-1 hover:text-purple-400">Necklace Light</a></li>
                        <li class="mt-4"><span class="bg-pink-400 pl-4 rounded-[100%] w-full"></span><a
                                href="#" class="ml-1 hover:text-pink-400">Necklace Dark</a></li>
                        <li class="mt-4"><span class="bg-black pl-4 rounded-[100%] w-full"></span><a href="#"
                                class="ml-1">Liontin Purif</a></li>
                        <li class="mt-4"><span class="bg-white pl-4 rounded-[100%] w-full"></span><a href="#"
                                class="ml-1">Alchemist </a></li>
                    </ul>
                </div>
            </div>
            <div class="p-4 overflow-hidden lg:ml-7">
                <h1 class="font-serif text-xl">Types</h1>
                <div class="overflow-scroll text-sm h-32 w-[8rem]">
                    <ul class="mt-2 ml-4 text-black/80">
                        <li class="mt-4"><a href="#">Necklace </a></li>
                        <li class="mt-4"><a href="#">Bracelet</a></li>
                        <li class="mt-4"><a href="#">Ring</a></li>
                        <li class="mt-4"><a href="#">Liontin</a></li>
                        <li class="mt-4"><a href="#">Earring</a></li>
                    </ul>
                </div>
            </div>
            <div class="p-4 overflow-hidden lg:ml-7">
                <h1 class="font-serif text-xl">Informations</h1>
                <div class="overflow-scroll text-sm h-32 w-[8rem]">
                    <ul class="mt-2 ml-4 text-black/80">
                        <li class="mt-4"><a href="#">Wholesale </a></li>
                        <li class="mt-4"><a href="#">Customer Service</a></li>
                        <li class="mt-4"><a href="#">Privacy </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div>
            <h1 style="background: url(img/silver2.jpg); background-position: center; background-size: cover"
                class="h-40 text-4xl text-black">
                <p class="mx-[5%] relative top-10">AEON Collection</p>
            </h1>
            <div
                class="container max-w-full bg-white mt-4 grid xl:grid-cols-4 handphone:flex handphone:ml-[17%] handphone:flex-col tablet:ml-0 tablet:flex tablet:flex-row lg:flex lg:flex-row tablet:gap-5 justify-center">

                <div id="conten" class="group handphone:mb-5 laptop:ml-10 xl:ml-5 lg:w-fit">
                    <div class="w-72">
                        <img src="img/silver.jpg" class="relative" alt="">
                        <img src="img/silver2.jpg" class="relative -mt-[100%] group-hover:animate-fade"
                            alt="">

                        <div class="grid grid-cols-2 relative z-1 bottom-30 -mt-[50%] ml-[55%]">
                            <div id="first"
                                class="bg-gray-700 rounded-sm text-white z-1 mx-auto relative right-10 overflow-hidden my-auto p-1 opacity-1">
                                <p id="ichi" class="font-serif cursor-default w-24 text-center">
                                    Wishlist</p>
                            </div>
                            <div class="ml-5">
                                <span id="satu"
                                    class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300">
                                    favorite
                                </span>
                            </div>
                            <div id="second"
                                class="bg-gray-700 rounded-sm text-white relative right-10 mx-auto overflow-hidden my-auto p-1 opacity-1">
                                <p id="ni" class="font-serif cursor-default w-24 text-center">
                                    Compare</p>
                            </div>
                            <div class="ml-5">
                                <span id="dua"
                                    class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300 group-hover:delay-75">
                                    compare_arrows
                                </span>
                            </div>
                            <div id="third"
                                class="bg-gray-700 rounded-sm text-white z-1 mx-auto relative right-10 overflow-hidden my-auto p-1 opacity-1">
                                <p id="san" class="font-serif cursor-default w-24 text-center">
                                    Quick View</p>
                            </div>
                            <div class="ml-5">
                                <span id="tiga"
                                    class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300 group-hover:delay-100">
                                    search
                                </span>
                            </div>
                        </div>
                    </div>
                    <div id="ele" class="bg-slate-300 w-72 relative z-1 overflow-hidden text-start h-0 mt-4">
                        <p class="font-serif text-black p-2 text-2xl mb-2">Aeron Strengh Necklace</p>
                        <p class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Deserunt, repellat!
                        </p>
                        <p class="text-end">$601.50</p>
                        <p class="bg-slate-500 w-72 p-2 hover:bg-slate-700 text-white"><a href="#"
                                class="ml-[40%]">Buy
                                Now</a></p>
                    </div>
                </div>
                <div id="asoka" class="group handphone:mb-5 tablet:ml-0 laptop:ml-10 xl:ml-0 lg:w-fit">
                    <div class="w-72">
                        <img src="img/silver3.jpg" class="relative" alt="">
                        <img src="img/silver4.jpg" class="relative -mt-[100%] group-hover:animate-fade"
                            alt="">

                        <div class="grid grid-cols-2 relative z-1 bottom-30 -mt-[50%] ml-[55%]">
                            <div id="asoka1"
                                class="bg-gray-700 rounded-sm text-white z-1 mx-auto relative right-10 overflow-hidden my-auto p-1 opacity-1">
                                <p id="asok1" class="font-serif cursor-default w-24 text-center">
                                    Wishlist</p>
                            </div>
                            <div class="ml-5">
                                <span id="subasoka1"
                                    class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300">
                                    favorite
                                </span>
                            </div>
                            <div id="asoka2"
                                class="bg-gray-700 rounded-sm text-white relative right-10 mx-auto overflow-hidden my-auto p-1 opacity-1">
                                <p id="asok2" class="font-serif cursor-default w-24 text-center">
                                    Compare</p>
                            </div>
                            <div class="ml-5">
                                <span id="subasoka2"
                                    class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300 group-hover:delay-75">
                                    compare_arrows
                                </span>
                            </div>
                            <div id="asoka3"
                                class="bg-gray-700 rounded-sm text-white z-1 mx-auto relative right-10 overflow-hidden my-auto p-1 opacity-1">
                                <p id="asok3" class="font-serif cursor-default w-24 text-center">
                                    Quick View</p>
                            </div>
                            <div class="ml-5">
                                <span id="subasoka3"
                                    class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300 group-hover:delay-100">
                                    search
                                </span>
                            </div>
                        </div>
                    </div>
                    <div id="vat" class="bg-slate-300 w-72 relative z-1 overflow-hidden text-start h-0 mt-4">
                        <p class="font-serif text-black p-2 text-2xl mb-2">Aeron Ring Speed</p>
                        <p class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Deserunt, repellat!
                        </p>
                        <p class="text-end">$301.50</p>
                        <p class="bg-slate-500 w-72 p-2 hover:bg-slate-700 text-white"><a href="#"
                                class="ml-[40%]">Buy
                                Now</a></p>
                    </div>
                </div>
                <div id="anggre"
                    class="group tablet:ml-5 handphone:mb-5 laptop:ml-10 xl:ml-0 tablet:hidden lg:flex flex-col lg:w-fit">
                    <div class="w-72">
                        <img src="img/silver5.jpg" class="relative" alt="">
                        <img src="img/silver6.jpg" class="relative -mt-[100%] group-hover:animate-fade"
                            alt="">

                        <div class="grid grid-cols-2 relative z-1 bottom-30 -mt-[50%] ml-[55%]">
                            <div id="anggrek1"
                                class="bg-gray-700 rounded-sm text-white z-1 mx-auto relative right-10 overflow-hidden my-auto p-1 opacity-1">
                                <p id="anggr1" class="font-serif cursor-default w-24 text-center">
                                    Wishlist</p>
                            </div>
                            <div class="ml-5">
                                <span id="subanggr1"
                                    class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300">
                                    favorite
                                </span>
                            </div>
                            <div id="anggrek2"
                                class="bg-gray-700 rounded-sm text-white relative right-10 mx-auto overflow-hidden my-auto p-1 opacity-1">
                                <p id="anggr2" class="font-serif cursor-default w-24 text-center">
                                    Compare</p>
                            </div>
                            <div class="ml-5">
                                <span id="subanggr2"
                                    class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300 group-hover:delay-75">
                                    compare_arrows
                                </span>
                            </div>
                            <div id="anggrek3"
                                class="bg-gray-700 rounded-sm text-white z-1 mx-auto relative right-10 overflow-hidden my-auto p-1 opacity-1">
                                <p id="anggr3" class="font-serif cursor-default w-24 text-center">
                                    Quick View</p>
                            </div>
                            <div class="ml-5">
                                <span id="subanggr3"
                                    class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300 group-hover:delay-100">
                                    search
                                </span>
                            </div>
                        </div>
                    </div>
                    <div id="tora" class="bg-slate-300 w-72 relative z-1 overflow-hidden text-start h-0 mt-4">
                        <p class="font-serif text-black p-2 text-2xl mb-2">Aeron ring</p>
                        <p class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Deserunt, repellat!
                        </p>
                        <p class="text-end">$301.50</p>
                        <p class="bg-slate-500 w-72 p-2 hover:bg-slate-700 text-white"><a href="#"
                                class="ml-[40%]">Buy
                                Now</a></p>
                    </div>
                </div>
                <div id="ayun" class="group tablet:ml-5 laptop:ml-10 xl:ml-0 tablet:hidden xl:flex flex-col">
                    <div class="w-72">
                        <img src="img/silver7.jpg" class="relative" alt="">
                        <img src="img/silver8.jpg" class="relative -mt-[100%] group-hover:animate-fade"
                            alt="">

                        <div class="grid grid-cols-2 relative z-1 bottom-30 -mt-[50%] ml-[55%]">
                            <div id="ayung1"
                                class="bg-gray-700 rounded-sm text-white z-1 mx-auto relative right-10 overflow-hidden my-auto p-1 opacity-1">
                                <p id="ayun1" class="font-serif cursor-default w-24 text-center">
                                    Wishlist</p>
                            </div>
                            <div class="ml-5">
                                <span id="subayun1"
                                    class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300">
                                    favorite
                                </span>
                            </div>
                            <div id="ayung2"
                                class="bg-gray-700 rounded-sm text-white relative right-10 mx-auto overflow-hidden my-auto p-1 opacity-1">
                                <p id="ayun2" class="font-serif cursor-default w-24 text-center">
                                    Compare</p>
                            </div>
                            <div class="ml-5">
                                <span id="subayun2"
                                    class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300 group-hover:delay-75">
                                    compare_arrows
                                </span>
                            </div>
                            <div id="ayung3"
                                class="bg-gray-700 rounded-sm text-white z-1 mx-auto relative right-10 overflow-hidden my-auto p-1 opacity-1">
                                <p id="ayun3" class="font-serif cursor-default w-24 text-center">
                                    Quick View</p>
                            </div>
                            <div class="ml-5">
                                <span id="subayun3"
                                    class="material-symbols-rounded p-1 text-2xl bg-slate-100 mb-2 cursor-pointer ml-3 opacity-1 group-hover:opacity-100 group-hover:ml-0 transition-all group-hover:duration-300 group-hover:delay-100">
                                    search
                                </span>
                            </div>
                        </div>
                    </div>
                    <div id="vio" class="bg-slate-300 w-72 relative z-1 overflow-hidden text-start h-0 mt-4">
                        <p class="font-serif text-black p-2 text-2xl mb-2">Aeron Agility Earring</p>
                        <p class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Deserunt, repellat!
                        </p>
                        <p class="text-end">$301.50</p>
                        <p class="bg-slate-500 w-72 p-2 hover:bg-slate-700 text-white"><a href="#"
                                class="ml-[40%]">Buy
                                Now</a></p>
                    </div>
                </div>
            </div>





            {{-- @foreach ($items as $item)
                        <x-content-product :$item />
                    @endforeach --}}

        </div>
    </div>
    <?php 
    }else if($_GET['code'] == 'asoka'){
    ?>
    {{-- Detailed Content Asoka --}}
    {{-- Sidebar(Filter Mobile)  --}}
    <div id="background" class="absolute handphone:flex tablet:hidden w-full opacity-1 -z-1 h-full bg-black/50">
    </div>
    <div id="sidebar"
        class="fixed handphone:inline-block tablet:hidden w-[60%] h-[100%] overflow-scroll -z-1 -left-9 opacity-1 bg-white">
        <button id="close" class="relative top-2 left-[80%]">
            <span class="material-symbols-rounded text-[2.5rem]">close</span>
        </button>
        <div class="ml-5">
            <h1 class="font-serif text-lg mb-2">Search</h1>
            <a href="#"><span
                    class="material-symbols-rounded absolute top-[5.2rem] left-52 text-black/60">search</span></a><input
                type="text"
                class="border-0 border-b-[1.5px] focus:outline-none focus:ring-0 focus:border-black border-black/60 rounded-md mb-9"
                placeholder="Necklace of Darkness">
            <h1 class="font-serif text-lg">Categories</h1>
            <div class="overflow-scroll w-[85%] h-52 mb-8">
                <ul class="mt-2 ml-4 text-black/80">
                    <li class="mt-4"><a href="products?code=aeon">Aeon</a></li>
                    <li class="mt-4"><a href="#">Anggrek</a></li>
                    <li class="mt-4"><a href="products?code=asoka">Asoka</a></li>
                    <li class="mt-4"><a href="#">Ayung</a></li>
                    <li class="mt-4"><a href="#">Batik</a></li>
                    <li class="mt-4"><a href="#">Batur</a></li>
                    <li class="mt-4"><a href="#">Bhineka</a></li>
                    <li class="mt-4"><a href="#">Birth Stone</a></li>
                </ul>
            </div>
            <h1 class="font-seirf text-lg mb-2">Types</h1>
            <div class="mb-5">
                <ul class="mt-2 ml-4 text-black/80">
                    <li class="mt-4"><a href="#">Necklace</a></li>
                    <li class="mt-4"><a href="#">Liontin</a></li>
                    <li class="mt-4"><a href="#">Ring</a></li>
                </ul>
            </div>
        </div>
    </div>
    {{-- Filter --}}
    <div class="container max-w-full bg-slate-300">
        <div class="flex p-4">
            <span id="single"
                class="material-symbols-rounded cursor-pointer text-slate-700 hover:text-black">grid_view</span>
            <span id="multiple"
                class="material-symbols-rounded cursor-pointer ml-3 text-slate-700 hover:text-black">view_list</span>
            <a href="#" id="filter"
                class="text-md handphone:inline-block tablet:hidden font-serif ml-auto"><span
                    class="material-symbols-rounded">filter_alt</span><span class="relative -top-1">Filters</span></a>
            <a href="#" id="filter2" class="text-md font-serif handphone:hidden tablet:hidden  ml-auto"><span
                    class="material-symbols-rounded">filter_alt</span><span class="relative -top-1">Filters</span></a>
            <a href="#" id="filter3" class="text-md font-serif handphone:hidden tablet:hidden ml-auto"><span
                    class="material-symbols-rounded">filter_alt</span><span class="relative -top-1">Filters</span></a>
        </div>
    </div>
    {{-- Sidebar(Fitur Tablet ++) --}}
    <div id="siding"
        class="container flex mac:justify-center flex-wrap overflow-scroll max-w-full bg-slate-300/20 h-0">
        <div class="p-4">
            <h1 class="font-serif text-xl ml-3">Search</h1>
            <a href="#"><span
                    class="material-symbols-rounded relative left-[95%] top-2 text-black/60">search</span></a><input
                type="text"
                class="border-0 bg-transparent relative -top-1 -left-4 border-b-[1.5px] focus:outline-none focus:ring-0 focus:border-black border-black/60 rounded-md mb-9"
                placeholder="Necklace of Darkness">
        </div>
        <div class="p-4 overflow-hidden lg:ml-7">
            <h1 class="font-serif text-xl">Categories</h1>
            <div class="overflow-scroll text-sm h-32 w-[8rem]">
                <ul class="mt-2 ml-4 text-black/75">
                    <li class="mt-4 hover:text-black"><a href="products?code=aeon">Aeon</a></li>
                    <li class="mt-4 hover:text-black"><a href="#">Anggrek</a></li>
                    <li class="mt-4 hover:text-black"><a href="products?code=asoka">Asoka</a></li>
                    <li class="mt-4 hover:text-black"><a href="#">Ayung</a></li>
                    <li class="mt-4 hover:text-black"><a href="#">Batik</a></li>
                    <li class="mt-4 hover:text-black"><a href="#">Batur</a></li>
                    <li class="mt-4 hover:text-black"><a href="#">Bhineka</a></li>
                    <li class="mt-4 hover:text-black"><a href="#">Birth Stone</a></li>
                </ul>
            </div>
        </div>
        <div class="p-4 overflow-hidden lg:ml-7">
            <h1 class="font-serif text-xl">Color</h1>
            <div class="overflow-scroll h-32 w-[9rem]">
                <ul class="mt-2 ml-4 text-sm text-black/80">
                    <li class="mt-4"><span class="bg-red-400 pl-4 rounded-[100%] w-full"></span><a href="#"
                            class="ml-1 hover:text-red-400">Red
                            Rose</a></li>
                    <li class="mt-4"><span class="bg-blue-400 pl-4 rounded-[100%] w-full"></span><a href="#"
                            class="ml-1 hover:text-blue-400">Blue
                            Sky</a></li>
                    <li class="mt-4"><span class="bg-yellow-400 pl-4 rounded-[100%] w-full"></span><a
                            href="#" class="ml-1 hover:text-yellow-400">Liontin Purif</a></li>
                    <li class="mt-4"><span class="bg-green-400 pl-4 rounded-[100%] w-full"></span><a href="#"
                            class="ml-1 hover:text-green-400">Hunter</a></li>
                    <li class="mt-4"><span class="bg-purple-400 pl-4 rounded-[100%] w-full"></span><a
                            href="#" class="ml-1 hover:text-purple-400">Necklace Light</a></li>
                    <li class="mt-4"><span class="bg-pink-400 pl-4 rounded-[100%] w-full"></span><a href="#"
                            class="ml-1 hover:text-pink-400">Necklace Dark</a></li>
                    <li class="mt-4"><span class="bg-black pl-4 rounded-[100%] w-full"></span><a href="#"
                            class="ml-1">Liontin Purif</a></li>
                    <li class="mt-4"><span class="bg-white pl-4 rounded-[100%] w-full"></span><a href="#"
                            class="ml-1">Alchemist </a></li>
                </ul>
            </div>
        </div>
        <div class="p-4 overflow-hidden lg:ml-7">
            <h1 class="font-serif text-xl">Types</h1>
            <div class="overflow-scroll text-sm h-32 w-[8rem]">
                <ul class="mt-2 ml-4 text-black/80">
                    <li class="mt-4"><a href="#">Necklace </a></li>
                    <li class="mt-4"><a href="#">Bracelet</a></li>
                    <li class="mt-4"><a href="#">Ring</a></li>
                    <li class="mt-4"><a href="#">Liontin</a></li>
                    <li class="mt-4"><a href="#">Earring</a></li>
                </ul>
            </div>
        </div>
        <div class="p-4 overflow-hidden lg:ml-7">
            <h1 class="font-serif text-xl">Informations</h1>
            <div class="overflow-scroll text-sm h-32 w-[8rem]">
                <ul class="mt-2 ml-4 text-black/80">
                    <li class="mt-4"><a href="#">Wholesale </a></li>
                    <li class="mt-4"><a href="#">Customer Service</a></li>
                    <li class="mt-4"><a href="#">Privacy </a></li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <h1 class="text-center mt-3">Asoka Collection</h1>
        <div
            class="container mac:justify-center flex mt-6 ml-5 handphone:max-w-[90%] tablet:max-w-[92%] laptop:max-w-[95%]">
            <div id="sort"
                class="grid grid-cols-2 tablet:grid-cols-3 laptop:grid-cols-4 lg:grid-cols-5 mac:grid-cols-6 gap-4">

                @foreach ($items as $item)
                    <x-content-product :$item />
                @endforeach
            </div>
        </div>
    </div>
    <?php 
        }
    }
    ?>

    {{-- <div
        class="container mac:justify-center flex mt-6 ml-5 handphone:max-w-[90%] tablet:max-w-[92%] laptop:max-w-[95%]">
        <div id="sort"
            class="grid grid-cols-2 tablet:grid-cols-3 laptop:grid-cols-4 lg:grid-cols-5 mac:grid-cols-6 gap-4">

            @foreach ($items as $item)
                <x-content-product :$item />
            @endforeach

        </div>
    </div>
    <div id="solo"
        class="container hidden mt-6 ml-10 handphone:max-w-[80%] tablet:max-w-[82%] laptop:max-w-[85%] lg:max-w-[90%]">
        <div class="grid grid-cols-1 tablet:grid-cols-1 gap-10">
            <x-detail-produk
                content="Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Quisquam neque repellat, non ex cumque, quis obcaecati tempora porro hic consequatur impedit
            facere nisi numquam repudiandae ullam corrupti. Non accusamus a incidunt nulla eos, cumque sint
            et. Eos harum unde dolorem deserunt tempora accusantium, quod dolore molestias, voluptate quis
            et aperiam." />
            <x-detail-produk
                content="Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Quisquam neque repellat, non ex cumque, quis obcaecati tempora porro hic consequatur impedit
            facere nisi numquam repudiandae ullam corrupti. Non accusamus a incidunt nulla eos, cumque sint
            et. Eos harum unde dolorem deserunt tempora accusantium, quod dolore molestias, voluptate quis
            et aperiam." />
            <x-detail-produk
                content="Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Quisquam neque repellat, non ex cumque, quis obcaecati tempora porro hic consequatur impedit
            facere nisi numquam repudiandae ullam corrupti. Non accusamus a incidunt nulla eos, cumque sint
            et. Eos harum unde dolorem deserunt tempora accusantium, quod dolore molestias, voluptate quis
            et aperiam." />
        </div>
    </div> --}}
    {{-- Sidebar Content --}}

    <x-slot name="footer">
        <script src="js/product/product.js"></script>
    </x-slot>
</x-app-layout>
