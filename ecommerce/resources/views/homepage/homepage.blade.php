<x-app-layout>
    <div id="contain" class="absolute bg-black/50 opacity-1 z-10 h-[300%] w-full"></div>
    <div id="popup" class="flex tablet:flex-row tablet:h-fit tablet:left-[15%] tablet:max-w-[35rem] laptop:max-w-[40rem] lg:left-[30%] lg:top-34 handphone:flex-col h-[20rem] max-w-[25rem] fixed -z-1 opacity-1 left-20 top-52 rounded-xl bg-gradient-to-br from-black to bg-red-900">
        <img id="close" src="img/close.svg" class="border cursor-pointer w-[12%] tablet:w-[7%] laptop:w-[5%] lg:w-[8%] rounded-full absolute right-2 top-2  border-white" alt="">
        <div class="object-cover">
            <img src="img/model4.jpg" class="rounded-lg tablet:w-[26rem] w-[17rem] lg:w-[30rem]" alt="">
        </div>
        <div class="text-white font-mono tablet:mt-4 laptop:mt-10 lg:absolute lg:w-full lg:bottom-0 lg:z-10 p-2">
            <p class="text-xl font-bold">BIG Sale</p>
            <p class="text-sm tablet:text-lg mb-3">Get 75% Discount only This Month</p>
            <button class="bg-red-500 w-full rounded-md p-2">
                <a href="#">Go Now</a>
            </button>
            <button id="close" class="bg-gray-400 w-full mt-2 hidden tablet:block rounded-md p-2">
                <a href="#">Maybe Later</a>
            </button>
        </div>
    </div>
        {{-- Corousel --}}
        @include('homepage.partials.homepage-carousel')

        {{-- Category --}}
        @include('homepage.partials.homepage-categories')

        {{-- Weekly product --}}
        @include('homepage.partials.homepage-weekly-product')

        <div class="swiper swiper-item">
                <div class="swiper-wrapper">
                    <x-item-card title="Kibutsuji"/>
                    <x-item-card title="Muzan"/>
                    <x-item-card title="Freind"/>
                    <x-item-card title="Axolot"/>
                    <x-item-card title="tester"/>
                    <x-item-card title="testing"/>
                    <x-item-card title="some"/>
                </div>
                <div class="swiper-pagination relative top-1 mb-10"></div>
                <div class="pagination">
                <div class="swiper-button-prev ml-5"><img src="img/prev.svg" class="handphone:-ml-7" alt=""></div>
                <div class="swiper-button-next mr-5"><img src="img/next.svg" class="handphone:ml-10 tablet:ml-2 laptop:mr-10" alt=""></div>
                </div>
            </div>
            <div class="container max-w-lg tablet:max-w-[40rem] laptop:max-w-[50rem] lg:max-w-[78rem]">
                <div class="flex justify-between">
                    <h1 class="font-bold font-sans mb-2 text-lg">Monthly Product</h1>
                    <a href="#" class="text-sm font-mono justify-end mt-2 flex">View all <img src="img/arrow.svg"  class="-mt-[7px] hidden tablet:flex" width="16%" alt=""></a>
                </div>
                <p class="w-full bg-black/20 h-[2px] mb-2"></p>
            </div>
            <div class="swiper swiper-item">
                <div class="swiper-wrapper">
                    <x-item-card title="hmm"/>
                    <x-item-card title="apa"/>
                    <x-item-card title="men"/>
                    <x-item-card title="tak"/>
                    <x-item-card title="tulis"/>
                    <x-item-card title="disini"/>
                    <x-item-card title="welp"/>
                </div>
                <div class="swiper-pagination relative top-1"></div>
                <div class="pagination">
                <div class="swiper-button-prev ml-5"><img src="img/prev.svg" class="handphone:-ml-7" alt=""></div>
                <div class="swiper-button-next mr-5"><img src="img/next.svg" class="handphone:ml-10 tablet:ml-2 laptop:mr-10" alt=""></div>
                </div>
            </div>
</x-app-layout>
