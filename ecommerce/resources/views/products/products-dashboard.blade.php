<x-branch-layout>
    <style>
        .material-symbols-rounded {
            font-variation-settings:
                'FILL'0,
                'wght'300,
                'GRAD'-25,
                'opsz'48
        }
    </style>

    {{-- Sidebar(Filter Mobile)  --}}
    <div id="background" class="absolute handphone:flex tablet:hidden w-full opacity-1 -z-1 h-full bg-black/50"></div>
    <div id="sidebar"
        class="fixed handphone:inline-block tablet:hidden w-[60%] h-[90%] overflow-scroll -z-1 -left-9 opacity-1 bg-white">
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
                    <li class="mt-4"><a href="#">Necklace Light</a></li>
                    <li class="mt-4"><a href="#">Necklace Dark</a></li>
                    <li class="mt-4"><a href="#">Liontin Purif</a></li>
                    <li class="mt-4"><a href="#">Alchemist Engine</a></li>
                    <li class="mt-4"><a href="#">Necklace Light</a></li>
                    <li class="mt-4"><a href="#">Necklace Dark</a></li>
                    <li class="mt-4"><a href="#">Liontin Purif</a></li>
                    <li class="mt-4"><a href="#">Alchemist Engine</a></li>
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
        class="container flex mac:justify-center flex-wrap overflow-scroll max-w-full bg-slate-300/20 h-1">
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
                    <li class="mt-4 hover:text-black"><a href="#">Necklace </a></li>
                    <li class="mt-4 hover:text-black"><a href="#">Necklace Dark</a></li>
                    <li class="mt-4 hover:text-black"><a href="#">Liontin Purif</a></li>
                    <li class="mt-4 hover:text-black"><a href="#">Alchemist</a></li>
                    <li class="mt-4 hover:text-black"><a href="#">Necklace Light</a></li>
                    <li class="mt-4 hover:text-black"><a href="#">Necklace Dark</a></li>
                    <li class="mt-4 hover:text-black"><a href="#">Liontin Purif</a></li>
                    <li class="mt-4 hover:text-black"><a href="#">Summoner</a></li>
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
    {{-- Content --}}
    <div
        class="container mac:justify-center flex mt-6 ml-5 handphone:max-w-[90%] tablet:max-w-[92%] laptop:max-w-[95%]">
        <div id="sort"
            class="grid grid-cols-2 tablet:grid-cols-3 laptop:grid-cols-4 lg:grid-cols-5 mac:grid-cols-6 gap-4">
            <x-content-product konten="Necklace" />
            <x-content-product konten="Ring" />
            <x-content-product konten="Liontin" />
            <x-content-product konten="Bracelet" />
            <x-content-product konten="Armada" />
            <x-content-product konten="Titan" />
            <x-content-product konten="Archer" />
            <x-content-product konten="Huntress" />
            <x-content-product konten="Lux" />
            <x-content-product konten="Sion" />
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
    </div>
    {{-- Sidebar Content --}}

</x-branch-layout>
