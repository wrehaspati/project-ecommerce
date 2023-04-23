<x-app-layout>
    <x-slot name="header">
        <link href="{{ url('css/homepage/homepage.css') }}" rel="stylesheet" />
    </x-slot>
    {{-- Corousel --}}
    @include('homepage.partials.homepage-carousel')

    {{-- Category --}}
    @include('homepage.partials.homepage-categories')

    {{-- Hero --}}
    @include('homepage.partials.homepage-hero')

    {{-- Highlight product --}}
    @include('homepage.partials.homepage-highlight-product')

    <div
        class="container max-w-full bg-white mt-4 grid xl:grid-cols-4 handphone:flex handphone:ml-[20%] handphone:flex-col tablet:ml-0 tablet:flex tablet:flex-row lg:flex lg:flex-row tablet:gap-5 justify-center">

        <div id="conten" class="group handphone:mb-5 laptop:ml-10 xl:ml-5 lg:w-fit">
            <div class="w-72">
                <img src="img/silver.jpg" class="relative" alt="">
                <img src="img/silver2.jpg" class="relative -mt-[100%] group-hover:animate-fade" alt="">

                <div class="grid grid-cols-2 relative z-1 bottom-30 -mt-[50%] ml-[55%]">
                    <div id="first"
                        class="bg-gray-700 rounded-sm text-white z-1 mx-auto relative right-10 overflow-hidden my-auto p-1 opacity-1">
                        <p id="ichi" class="font-serif w-24 text-center">
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
                        <p id="ni" class="font-serif w-24 text-center">
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
                        <p id="san" class="font-serif w-24 text-center">
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
            <div id="ele" class="bg-slate-300 w-72 relative z-1 overflow-hidden h-0 mt-4">
                <p class="font-serif text-black p-2 text-2xl mb-2">Aeron Strengh Necklace</p>
                <p class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Deserunt, repellat!
                </p>
                <p class="text-end">$601.50</p>
                <p class="bg-slate-500 w-72 p-2 hover:bg-slate-700 text-white"><a href="#" class="ml-[40%]">Buy
                        Now</a></p>
            </div>
        </div>
        <div id="asoka" class="group handphone:mb-5 tablet:ml-0 laptop:ml-10 xl:ml-0 lg:w-fit">
            <div class="w-72">
                <img src="img/asoka.jpg" class="relative" alt="">
                <img src="img/asoka2.jpg" class="relative -mt-[100%] group-hover:animate-fade" alt="">

                <div class="grid grid-cols-2 relative z-1 bottom-30 -mt-[50%] ml-[55%]">
                    <div id="asoka1"
                        class="bg-gray-700 rounded-sm text-white z-1 mx-auto relative right-10 overflow-hidden my-auto p-1 opacity-1">
                        <p id="asok1" class="font-serif w-24 text-center">
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
                        <p id="asok2" class="font-serif w-24 text-center">
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
                        <p id="asok3" class="font-serif w-24 text-center">
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
            <div id="vat" class="bg-slate-300 w-72 relative z-1 overflow-hidden h-0 mt-4">
                <p class="font-serif text-black p-2 text-2xl mb-2">Asoka Soul Speed</p>
                <p class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Deserunt, repellat!
                </p>
                <p class="text-end">$301.50</p>
                <p class="bg-slate-500 w-72 p-2 hover:bg-slate-700 text-white"><a href="#" class="ml-[40%]">Buy
                        Now</a></p>
            </div>
        </div>
        <div id="anggre"
            class="group tablet:ml-5 handphone:mb-5 laptop:ml-10 xl:ml-0 tablet:hidden lg:flex flex-col lg:w-fit">
            <div class="w-72">
                <img src="img/anggrek.jpg" class="relative" alt="">
                <img src="img/anggrek2.jpg" class="relative -mt-[100%] group-hover:animate-fade" alt="">

                <div class="grid grid-cols-2 relative z-1 bottom-30 -mt-[50%] ml-[55%]">
                    <div id="anggrek1"
                        class="bg-gray-700 rounded-sm text-white z-1 mx-auto relative right-10 overflow-hidden my-auto p-1 opacity-1">
                        <p id="anggr1" class="font-serif w-24 text-center">
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
                        <p id="anggr2" class="font-serif w-24 text-center">
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
                        <p id="anggr3" class="font-serif w-24 text-center">
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
            <div id="tora" class="bg-slate-300 w-72 relative z-1 overflow-hidden h-0 mt-4">
                <p class="font-serif text-black p-2 text-2xl mb-2">Anggrek ring</p>
                <p class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Deserunt, repellat!
                </p>
                <p class="text-end">$301.50</p>
                <p class="bg-slate-500 w-72 p-2 hover:bg-slate-700 text-white"><a href="#" class="ml-[40%]">Buy
                        Now</a></p>
            </div>
        </div>
        <div id="ayun" class="group tablet:ml-5 laptop:ml-10 xl:ml-0 tablet:hidden xl:flex flex-col">
            <div class="w-72">
                <img src="img/ayung.jpg" class="relative" alt="">
                <img src="img/ayung2.jpg" class="relative -mt-[100%] group-hover:animate-fade" alt="">

                <div class="grid grid-cols-2 relative z-1 bottom-30 -mt-[50%] ml-[55%]">
                    <div id="ayung1"
                        class="bg-gray-700 rounded-sm text-white z-1 mx-auto relative right-10 overflow-hidden my-auto p-1 opacity-1">
                        <p id="ayun1" class="font-serif w-24 text-center">
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
                        <p id="ayun2" class="font-serif w-24 text-center">
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
                        <p id="ayun3" class="font-serif w-24 text-center">
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
            <div id="vio" class="bg-slate-300 w-72 relative z-1 overflow-hidden h-0 mt-4">
                <p class="font-serif text-black p-2 text-2xl mb-2">Aeron Soul Speed</p>
                <p class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Deserunt, repellat!
                </p>
                <p class="text-end">$301.50</p>
                <p class="bg-slate-500 w-72 p-2 hover:bg-slate-700 text-white"><a href="#" class="ml-[40%]">Buy
                        Now</a></p>
            </div>
        </div>
    </div>

    {{-- Latest product --}}
    @include('homepage.partials.homepage-latest-product')

    <div
        class="container max-w-full bg-white mt-4 grid xl:grid-cols-4 handphone:flex handphone:ml-[20%] handphone:flex-col tablet:ml-0 tablet:flex tablet:flex-row lg:flex lg:flex-row tablet:gap-5 justify-center">

        <div id="silve" class="group handphone:mb-5 laptop:ml-10 xl:ml-5 lg:w-fit">
            <div class="w-72">
                <img src="img/silverG.jpg" class="relative" alt="">
                <img src="img/silverG2.jpg" class="relative -mt-[100%] group-hover:animate-fade" alt="">

                <div class="grid grid-cols-2 relative z-1 bottom-30 -mt-[50%] ml-[55%]">
                    <div id="silver1"
                        class="bg-gray-700 rounded-sm text-white z-1 mx-auto relative right-10 overflow-hidden my-auto p-1 opacity-1">
                        <p id="silve1" class="font-serif w-24 text-center">
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
                        <p id="silve2" class="font-serif w-24 text-center">
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
                        <p id="silve3" class="font-serif w-24 text-center">
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
            <div id="equ" class="bg-slate-300 w-72 relative z-1 overflow-hidden h-0 mt-4">
                <p class="font-serif text-black p-2 text-2xl mb-2">Silver Lucky Ring</p>
                <p class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Deserunt, repellat!
                </p>
                <p class="text-end">$601.50</p>
                <p class="bg-slate-500 w-72 p-2 hover:bg-slate-700 text-white"><a href="#" class="ml-[40%]">Buy
                        Now</a></p>
            </div>
        </div>
        <div id="bhinek" class="group handphone:mb-5 tablet:ml-0 laptop:ml-10 xl:ml-0 lg:w-fit">
            <div class="w-72">
                <img src="img/bhineka.jpg" class="relative" alt="">
                <img src="img/bhineka2.jpg" class="relative -mt-[100%] group-hover:animate-fade" alt="">

                <div class="grid grid-cols-2 relative z-1 bottom-30 -mt-[50%] ml-[55%]">
                    <div id="bhineka1"
                        class="bg-gray-700 rounded-sm text-white z-1 mx-auto relative right-10 overflow-hidden my-auto p-1 opacity-1">
                        <p id="bhinek1" class="font-serif w-24 text-center">
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
                        <p id="bhinek2" class="font-serif w-24 text-center">
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
                        <p id="bhinek3" class="font-serif w-24 text-center">
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
            <div id="dor" class="bg-slate-300 w-72 relative z-1 overflow-hidden h-0 mt-4">
                <p class="font-serif text-black p-2 text-2xl mb-2">Bhineka Gathering Speed</p>
                <p class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Deserunt, repellat!
                </p>
                <p class="text-end">$301.50</p>
                <p class="bg-slate-500 w-72 p-2 hover:bg-slate-700 text-white"><a href="#" class="ml-[40%]">Buy
                        Now</a></p>
            </div>
        </div>
        <div id="bati"
            class="group tablet:ml-5 handphone:mb-5 laptop:ml-10 xl:ml-0 tablet:hidden lg:flex flex-col lg:w-fit">
            <div class="w-72">
                <img src="img/batik.jpg" class="relative" alt="">
                <img src="img/batik2.jpg" class="relative -mt-[100%] group-hover:animate-fade" alt="">

                <div class="grid grid-cols-2 relative z-1 bottom-30 -mt-[50%] ml-[55%]">
                    <div id="batik1"
                        class="bg-gray-700 rounded-sm text-white z-1 mx-auto relative right-10 overflow-hidden my-auto p-1 opacity-1">
                        <p id="bati1" class="font-serif w-24 text-center">
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
                        <p id="bati2" class="font-serif w-24 text-center">
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
                        <p id="bati3" class="font-serif w-24 text-center">
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
            <div id="kha" class="bg-slate-300 w-72 relative z-1 overflow-hidden h-0 mt-4">
                <p class="font-serif text-black p-2 text-2xl mb-2">Anggrek ring</p>
                <p class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Deserunt, repellat!
                </p>
                <p class="text-end">$301.50</p>
                <p class="bg-slate-500 w-72 p-2 hover:bg-slate-700 text-white"><a href="#" class="ml-[40%]">Buy
                        Now</a></p>
            </div>
        </div>
        <div id="batu" class="group tablet:ml-5 laptop:ml-10 xl:ml-0 tablet:hidden xl:flex flex-col">
            <div class="w-72">
                <img src="img/batur.jpg" class="relative" alt="">
                <img src="img/batur2.jpg" class="relative -mt-[100%] group-hover:animate-fade" alt="">

                <div class="grid grid-cols-2 relative z-1 bottom-30 -mt-[50%] ml-[55%]">
                    <div id="batur1"
                        class="bg-gray-700 rounded-sm text-white z-1 mx-auto relative right-10 overflow-hidden my-auto p-1 opacity-1">
                        <p id="batu1" class="font-serif w-24 text-center">
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
                        <p id="batu2" class="font-serif w-24 text-center">
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
                        <p id="batu3" class="font-serif w-24 text-center">
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
            <div id="tul" class="bg-slate-300 w-72 relative z-1 overflow-hidden h-0 mt-4">
                <p class="font-serif text-black p-2 text-2xl mb-2">Aeron Soul Speed</p>
                <p class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Deserunt, repellat!
                </p>
                <p class="text-end">$301.50</p>
                <p class="bg-slate-500 w-72 p-2 hover:bg-slate-700 text-white"><a href="#" class="ml-[40%]">Buy
                        Now</a></p>
            </div>
        </div>
    </div>
    <x-slot name="footer">
        <script src="{{ url('js/homepage/homepage.js') }}"></script>
    </x-slot>
</x-app-layout>
