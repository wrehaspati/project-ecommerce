<x-app-layout>
    <x-slot name="header">
        <link href="css/homepage.css" rel="stylesheet" />
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
        class="container max-w-full bg-white mt-4 grid xl:grid-cols-4 handphone:flex handphone:flex-col tablet:grid-cols-2 lg:flex lg:flex-row tablet:gap-5 justify-center">

        <div id="conten" class="group laptop:ml-10 xl:ml-5 lg:w-fit">
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
            <div id="ele" class="bg-slate-300 w-72 relative z-1 overflow-hidden h-0 mb-10">
                <p class="font-serif text-black p-2 text-2xl mb-2">Aeron Strengh Necklace</p>
                <p class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Deserunt, repellat!
                </p>
                <p class="text-end">$601.50</p>
                <p class="bg-slate-500 w-72 p-2 hover:bg-slate-700 text-white"><a href="#" class="ml-[40%]">Buy
                        Now</a></p>
            </div>
        </div>
        <div id="asoka" class="group tablet:ml-0 laptop:ml-10 xl:ml-0 lg:w-fit">
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
            <div id="vat" class="bg-slate-300 w-72 relative z-1 overflow-hidden h-0 mb-10">
                <p class="font-serif text-black p-2 text-2xl mb-2">Asoka Soul Speed</p>
                <p class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Deserunt, repellat!
                </p>
                <p class="text-end">$301.50</p>
                <p class="bg-slate-500 w-72 p-2 hover:bg-slate-700 text-white"><a href="#" class="ml-[40%]">Buy
                        Now</a></p>
            </div>
        </div>
        <div id="conten" class="group tablet:ml-5 laptop:ml-10 xl:ml-0 tablet:hidden lg:grid lg:w-fit">
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
            <div id="ele" class="bg-slate-300 w-72 relative z-1 overflow-hidden h-0 mb-10">
                <p class="font-serif text-black p-2 text-2xl mb-2">Aeron Soul Speed</p>
                <p class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Deserunt, repellat!
                </p>
                <p class="text-end">$301.50</p>
                <p class="bg-slate-500 w-72 p-2 hover:bg-slate-700 text-white"><a href="#" class="ml-[40%]">Buy
                        Now</a></p>
            </div>
        </div>
        <div id="conten" class="group tablet:ml-5 laptop:ml-10 xl:ml-0 tablet:hidden xl:grid">
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
            <div id="ele" class="bg-slate-300 w-72 relative z-1 overflow-hidden h-0 mb-10">
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

    <div class="container max-w-full bg-white mt-4 mb-24">
        <div class="splide splide__month">
            <div class="splide__slider">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <x-item-card title="Testing" />
                        </li>
                        <li class="splide__slide">
                            <x-item-card title="Testing" />
                        </li>
                        <li class="splide__slide">
                            <x-item-card title="Testing" />
                        </li>
                        <li class="splide__slide">
                            <x-item-card title="Testing" />
                        </li>
                        <li class="splide__slide">
                            <x-item-card title="Testing" />
                        </li>
                        <li class="splide__slide">
                            <x-item-card title="Testing" />
                        </li>
                        <li class="splide__slide">
                            <x-item-card title="Testing" />
                        </li>
                        <li class="splide__slide">
                            <x-item-card title="Testing" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <x-slot name="footer">
        <script src="js/homepage.js"></script>
    </x-slot>
</x-app-layout>
