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
            </div>
        </div>
        <div class="container max-w-full h-full">
            <div class="justify-center text-center">
                <h1 class="mt-4 font-serif"><a href="products?code=aeon">Aeon Collection</a></h1>
                <p class="bg-black/10 mt-3 h-[0.10rem] ml-[25%] w-1/2 mb-5"></p>
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
                class="h-40 text-4xl text-black mb-10">
                <p class="mx-[5%] relative top-10">AEON Collection</p>
            </h1>
            <div class="max-w-md w-3/4 relative left-[25%] grid grid-cols-1 tablet:grid tablet:grid-cols-2 tablet:left-[10%] tablet:gap-4 tablet:max-w-lg tablet:w-full laptop:max-w-2xl laptop:grid-cols-3 laptop:left-[5%] lg:grid-cols-4 lg:w-full lg:max-w-4xl lg:left-[10%] xl:max-w-5xl">
                <div class="w-2/3 mb-3 tablet:w-full">
                    <div class="group">
                        <div class="flex flex-row overflow-hidden">
                            <div class="flex-none w-[100%]">
                                <img src="img/silver.jpg" alt="">
                            </div>
                            <div class="w-full flex-1 -translate-x-12 tablet:translate-x-5 flex-col tablet:group-hover:-translate-x-12 duration-200 tablet:group-hover:ease-in-out"> 
                                <div class="mt-3 mb-2">
                                    <span class="material-symbols-rounded p-2 bg-slate-200/60 text-[20px] cursor-pointer">
                                    favorite
                                    </span>
                                </div>
                                <div class="mb-2">
                                    <span class="material-symbols-rounded p-2 bg-slate-200/60 text-[20px] cursor-pointer">
                                        compare_arrows
                                    </span>
                                </div>
                                <div>
                                    <span class="material-symbols-rounded p-2 bg-slate-200/60 text-[20px] cursor-pointer">
                                        search
                                    </span>
                                </div>
                            </div>        
                        </div>
                        <div class="overflow-hidden -mt-9 tablet:-mt-[2.19rem] relative z-10">
                            <p class="text-center text-lg bg-slate-400/60 text-white p-1 translate-y-[0.5px] tablet:translate-y-3 tablet:opacity-1 tablet:group-hover:opacity-100 tablet:group-hover:-translate-y-[0.04rem] tablet:duration-300"><a href="#">Buy Now</a></p>
                        </div>
                    </div>
                    <p class="font-serif text-lg tablet:text-xl">Stardust Pilar</p> 
                    <p class="font-mono text-end text-lg tablet:text-lg">$ 102.80</p>
                </div>
                <div class="w-2/3 mb-3 tablet:w-full">
                    <div class="group">
                        <div class="flex flex-row overflow-hidden">
                            <div class="flex-none w-[100%]">
                                <img src="img/silver.jpg" alt="">
                            </div>
                            <div class="w-full flex-1 -translate-x-12 tablet:translate-x-5 flex-col tablet:group-hover:-translate-x-12 duration-200 tablet:group-hover:ease-in-out"> 
                                <div class="mt-3 mb-2">
                                    <span class="material-symbols-rounded p-2 bg-slate-200/60 text-[20px] cursor-pointer">
                                    favorite
                                    </span>
                                </div>
                                <div class="mb-2">
                                    <span class="material-symbols-rounded p-2 bg-slate-200/60 text-[20px] cursor-pointer">
                                        compare_arrows
                                    </span>
                                </div>
                                <div>
                                    <span class="material-symbols-rounded p-2 bg-slate-200/60 text-[20px] cursor-pointer">
                                        search
                                    </span>
                                </div>
                            </div>        
                        </div>
                        <div class="overflow-hidden -mt-9 tablet:-mt-[2.19rem] relative z-10">
                            <p class="text-center text-lg bg-slate-400/60 text-white p-1 translate-y-[0.5px] tablet:translate-y-3 tablet:opacity-1 tablet:group-hover:opacity-100 tablet:group-hover:-translate-y-[0.04rem] tablet:duration-300"><a href="#">Buy Now</a></p>
                        </div>
                    </div>
                    <p class="font-serif text-lg tablet:text-xl">Stardust Pilar</p> 
                    <p class="font-mono text-end text-lg tablet:text-lg">$ 102.80</p>
                </div>
                <div class="w-2/3 mb-3 tablet:w-full">
                    <div class="group">
                        <div class="flex flex-row overflow-hidden">
                            <div class="flex-none w-[100%]">
                                <img src="img/silver.jpg" alt="">
                            </div>
                            <div class="w-full flex-1 -translate-x-12 tablet:translate-x-5 flex-col tablet:group-hover:-translate-x-12 duration-200 tablet:group-hover:ease-in-out"> 
                                <div class="mt-3 mb-2">
                                    <span class="material-symbols-rounded p-2 bg-slate-200/60 text-[20px] cursor-pointer">
                                    favorite
                                    </span>
                                </div>
                                <div class="mb-2">
                                    <span class="material-symbols-rounded p-2 bg-slate-200/60 text-[20px] cursor-pointer">
                                        compare_arrows
                                    </span>
                                </div>
                                <div>
                                    <span class="material-symbols-rounded p-2 bg-slate-200/60 text-[20px] cursor-pointer">
                                        search
                                    </span>
                                </div>
                            </div>        
                        </div>
                        <div class="overflow-hidden -mt-9 tablet:-mt-[2.19rem] relative z-10">
                            <p class="text-center text-lg bg-slate-400/60 text-white p-1 translate-y-[0.5px] tablet:translate-y-3 tablet:opacity-1 tablet:group-hover:opacity-100 tablet:group-hover:-translate-y-[0.04rem] tablet:duration-300"><a href="#">Buy Now</a></p>
                        </div>
                    </div>
                    <p class="font-serif text-lg tablet:text-xl">Stardust Pilar</p> 
                    <p class="font-mono text-end text-lg tablet:text-lg">$ 102.80</p>
                </div>
                <div class="w-2/3 mb-3 tablet:w-full">
                    <div class="group">
                        <div class="flex flex-row overflow-hidden">
                            <div class="flex-none w-[100%]">
                                <img src="img/silver.jpg" alt="">
                            </div>
                            <div class="w-full flex-1 -translate-x-12 tablet:translate-x-5 flex-col tablet:group-hover:-translate-x-12 duration-200 tablet:group-hover:ease-in-out"> 
                                <div class="mt-3 mb-2">
                                    <span class="material-symbols-rounded p-2 bg-slate-200/60 text-[20px] cursor-pointer">
                                    favorite
                                    </span>
                                </div>
                                <div class="mb-2">
                                    <span class="material-symbols-rounded p-2 bg-slate-200/60 text-[20px] cursor-pointer">
                                        compare_arrows
                                    </span>
                                </div>
                                <div>
                                    <span class="material-symbols-rounded p-2 bg-slate-200/60 text-[20px] cursor-pointer">
                                        search
                                    </span>
                                </div>
                            </div>        
                        </div>
                        <div class="overflow-hidden -mt-9 tablet:-mt-[2.19rem] relative z-10">
                            <p class="text-center text-lg bg-slate-400/60 text-white p-1 translate-y-[0.5px] tablet:translate-y-3 tablet:opacity-1 tablet:group-hover:opacity-100 tablet:group-hover:-translate-y-[0.04rem] tablet:duration-300"><a href="#">Buy Now</a></p>
                        </div>
                    </div>
                    <p class="font-serif text-lg tablet:text-xl">Stardust Pilar</p> 
                    <p class="font-mono text-end text-lg tablet:text-lg">$ 102.80</p>
                </div>
                <div class="w-2/3 mb-3 tablet:w-full">
                    <div class="group">
                        <div class="flex flex-row overflow-hidden">
                            <div class="flex-none w-[100%]">
                                <img src="img/silver.jpg" alt="">
                            </div>
                            <div class="w-full flex-1 -translate-x-12 tablet:translate-x-5 flex-col tablet:group-hover:-translate-x-12 duration-200 tablet:group-hover:ease-in-out"> 
                                <div class="mt-3 mb-2">
                                    <span class="material-symbols-rounded p-2 bg-slate-200/60 text-[20px] cursor-pointer">
                                    favorite
                                    </span>
                                </div>
                                <div class="mb-2">
                                    <span class="material-symbols-rounded p-2 bg-slate-200/60 text-[20px] cursor-pointer">
                                        compare_arrows
                                    </span>
                                </div>
                                <div>
                                    <span class="material-symbols-rounded p-2 bg-slate-200/60 text-[20px] cursor-pointer">
                                        search
                                    </span>
                                </div>
                            </div>        
                        </div>
                        <div class="overflow-hidden -mt-9 tablet:-mt-[2.19rem] relative z-10">
                            <p class="text-center text-lg bg-slate-400/60 text-white p-1 translate-y-[0.5px] tablet:translate-y-3 tablet:opacity-1 tablet:group-hover:opacity-100 tablet:group-hover:-translate-y-[0.04rem] tablet:duration-300"><a href="#">Buy Now</a></p>
                        </div>
                    </div>
                    <p class="font-serif text-lg tablet:text-xl">Stardust Pilar</p> 
                    <p class="font-mono text-end text-lg tablet:text-lg">$ 102.80</p>
                </div>
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
        <h1 style="background: url(img/asoka.jpg); background-position: center; background-size: cover"
            class="h-40 text-4xl text-black mb-10">
            <p class="mx-[5%] relative top-10">ASOKA Collection</p>
        </h1>
        <div class="max-w-md w-3/4 relative left-[25%] grid grid-cols-1 tablet:grid tablet:grid-cols-2 tablet:left-[10%] tablet:gap-4 tablet:max-w-lg tablet:w-full laptop:max-w-2xl laptop:grid-cols-3 laptop:left-[5%] lg:grid-cols-4 lg:w-full lg:max-w-4xl lg:left-[10%] xl:max-w-5xl">
            <div class="w-2/3 mb-3 tablet:w-full">
                <div class="group">
                    <div class="flex flex-row overflow-hidden">
                        <div class="flex-none w-[100%]">
                            <img src="img/asoka.jpg" alt="">
                        </div>
                        <div class="w-full flex-1 -translate-x-12 tablet:translate-x-5 flex-col tablet:group-hover:-translate-x-12 duration-200 tablet:group-hover:ease-in-out"> 
                            <div class="mt-3 mb-2">
                                <span class="material-symbols-rounded p-2 bg-slate-200/60 cursor-pointer">
                                favorite
                                </span>
                            </div>
                            <div class="mb-2">
                                <span class="material-symbols-rounded p-2 bg-slate-200/60 cursor-pointer">
                                    compare_arrows
                                </span>
                            </div>
                            <div>
                                <span class="material-symbols-rounded p-2 bg-slate-200/60 cursor-pointer">
                                    search
                                </span>
                            </div>
                        </div>        
                    </div>
                    <p class="text-center -mt-5 text-lg text-white p-1 bg-slate-400/70 z-10 -translate-y-4 tablet:translate-y-1 tablet:-z-1 tablet:opacity-1 tablet:group-hover:opacity-100 tablet:group-hover:-translate-y-4 duration-300 tablet:group-hover:ease-in-out tablet:group-hover:z-10"><a href="#">Buy Now</a></p>
                </div>
                <p class="font-serif text-xl">Envy</p> 
                <p class="font-mono text-end text-lg">$ 50.00</p>
            </div>
            <div class="w-2/3 mb-3 tablet:w-full">
                <div class="group">
                    <div class="flex flex-row overflow-hidden">
                        <div class="flex-none w-[100%]">
                            <img src="img/asoka2.jpg" alt="">
                        </div>
                        <div class="w-full flex-1 -translate-x-12 tablet:translate-x-5 flex-col tablet:group-hover:-translate-x-12 duration-200 tablet:group-hover:ease-in-out"> 
                            <div class="mt-3 mb-2">
                                <span class="material-symbols-rounded p-2 bg-slate-200/60 cursor-pointer">
                                favorite
                                </span>
                            </div>
                            <div class="mb-2">
                                <span class="material-symbols-rounded p-2 bg-slate-200/60 cursor-pointer">
                                    compare_arrows
                                </span>
                            </div>
                            <div>
                                <span class="material-symbols-rounded p-2 bg-slate-200/60 cursor-pointer">
                                    search
                                </span>
                            </div>
                        </div>        
                    </div>
                    <p class="text-center -mt-5 text-lg text-white p-1 bg-slate-400/70 z-10 -translate-y-4 tablet:translate-y-1 tablet:-z-1 tablet:opacity-1 tablet:group-hover:opacity-100 tablet:group-hover:-translate-y-4 duration-300 tablet:group-hover:ease-in-out tablet:group-hover:z-10"><a href="#">Buy Now</a></p>
                </div>
                <p class="font-serif text-xl">Sloth</p> 
                <p class="font-mono text-end text-lg">$ 10.00</p>
            </div>
            <div class="w-2/3 mb-3 tablet:w-full">
                <div class="group">
                    <div class="flex flex-row overflow-hidden">
                        <div class="flex-none w-[100%]">
                            <img src="img/asoka3.jpg" alt="">
                        </div>
                        <div class="w-full flex-1 -translate-x-12 tablet:translate-x-5 flex-col tablet:group-hover:-translate-x-12 duration-200 tablet:group-hover:ease-in-out"> 
                            <div class="mt-3 mb-2">
                                <span class="material-symbols-rounded p-2 bg-slate-200/60 cursor-pointer">
                                favorite
                                </span>
                            </div>
                            <div class="mb-2">
                                <span class="material-symbols-rounded p-2 bg-slate-200/60 cursor-pointer">
                                    compare_arrows
                                </span>
                            </div>
                            <div>
                                <span class="material-symbols-rounded p-2 bg-slate-200/60 cursor-pointer">
                                    search
                                </span>
                            </div>
                        </div>        
                    </div>
                    <p class="text-center -mt-5 text-lg text-white p-1 bg-slate-400/70 z-10 -translate-y-4 tablet:translate-y-1 tablet:-z-1 tablet:opacity-1 tablet:group-hover:opacity-100 tablet:group-hover:-translate-y-4 duration-300 tablet:group-hover:ease-in-out tablet:group-hover:z-10"><a href="#">Buy Now</a></p>
                </div>
                <p class="font-serif text-xl">Gluttonny</p> 
                <p class="font-mono text-end text-lg">$ 50.00</p>
            </div>
            <div class="w-2/3 mb-3 tablet:w-full">
                <div class="group">
                    <div class="flex flex-row overflow-hidden">
                        <div class="flex-none w-[100%]">
                            <img src="img/asoka4.jpg" alt="">
                        </div>
                        <div class="w-full flex-1 -translate-x-12 tablet:translate-x-5 flex-col tablet:group-hover:-translate-x-12 duration-200 tablet:group-hover:ease-in-out"> 
                            <div class="mt-3 mb-2">
                                <span class="material-symbols-rounded p-2 bg-slate-200/60 cursor-pointer">
                                favorite
                                </span>
                            </div>
                            <div class="mb-2">
                                <span class="material-symbols-rounded p-2 bg-slate-200/60 cursor-pointer">
                                    compare_arrows
                                </span>
                            </div>
                            <div>
                                <span class="material-symbols-rounded p-2 bg-slate-200/60 cursor-pointer">
                                    search
                                </span>
                            </div>
                        </div>        
                    </div>
                    <p class="text-center -mt-5 text-lg text-white p-1 bg-slate-400/70 z-10 -translate-y-4 tablet:translate-y-1 tablet:-z-1 tablet:opacity-1 tablet:group-hover:opacity-100 tablet:group-hover:-translate-y-4 duration-300 tablet:group-hover:ease-in-out tablet:group-hover:z-10"><a href="#">Buy Now</a></p>
                </div>
                <p class="font-serif text-xl">Pride</p> 
                <p class="font-mono text-end text-lg">$ 80.00</p>
            </div>
            <div class="w-2/3 mb-3 tablet:w-full">
                <div class="group">
                    <div class="flex flex-row overflow-hidden">
                        <div class="flex-none w-[100%]">
                            <img src="img/asoka5.jpg" alt="">
                        </div>
                        <div class="w-full flex-1 -translate-x-12 tablet:translate-x-5 flex-col tablet:group-hover:-translate-x-12 duration-200 tablet:group-hover:ease-in-out"> 
                            <div class="mt-3 mb-2">
                                <span class="material-symbols-rounded p-2 bg-slate-200/60 cursor-pointer">
                                favorite
                                </span>
                            </div>
                            <div class="mb-2">
                                <span class="material-symbols-rounded p-2 bg-slate-200/60 cursor-pointer">
                                    compare_arrows
                                </span>
                            </div>
                            <div>
                                <span class="material-symbols-rounded p-2 bg-slate-200/60 cursor-pointer">
                                    search
                                </span>
                            </div>
                        </div>        
                    </div>
                    <p class="text-center -mt-5 text-lg text-white p-1 bg-slate-400/70 z-10 -translate-y-4 tablet:translate-y-1 tablet:-z-1 tablet:opacity-1 tablet:group-hover:opacity-100 tablet:group-hover:-translate-y-4 duration-300 tablet:group-hover:ease-in-out tablet:group-hover:z-10"><a href="#">Buy Now</a></p>
                </div>
                <p class="font-serif text-xl">Wrath</p> 
                <p class="font-mono text-end text-lg">$ 500.00</p>
            </div>
        </div>
    </div>
    {{-- <div>
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
    </div> --}}
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
