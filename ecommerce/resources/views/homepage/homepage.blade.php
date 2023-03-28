<x-app-layout>
    <div id="contain"
        class="absolute bg-black/50 opacity-1 z-10 h-[240%] mac:h-[100%] pc:h-[120%] overflow-x-hidden w-full"></div>
    <div id="popup"
        class="flex tablet:flex-row miniphone:flex-col miniphone:top-[10%] miniphone:left-[14%] miniphone:max-w-[20rem] handphone:top-44 handphone:left-24 tablet:h-fit tablet:left-[15%] tablet:max-w-[35rem] laptop:max-w-[40rem] lg:left-[30%] lg:top-34 mac:-ml-96 mac:-mt-20 pc:left-[35%] pc:top-[15%] pc:translate-x-[50%] pc:translate-y-[50%] handphone:flex-col h-[20rem] max-w-[25rem] fixed -z-1 opacity-1 left-20 top-52 rounded-xl bg-gradient-to-br from-black to bg-red-900">
        <img id="close" src="img/close.svg"
            class="border cursor-pointer w-[12%] tablet:w-[7%] laptop:w-[5%] lg:w-[8%] rounded-full absolute right-2 top-2  border-white"
            alt="">
        <div class="object-cover">
            <img src="img/model4.jpg"
                class="rounded-lg tablet:w-[26rem] w-[17rem] lg:w-[30rem] mac:w-[40rem] pc:w-[50rem]" alt="">
        </div>
        <div class="text-white font-mono tablet:mt-4 laptop:mt-10 lg:absolute lg:w-full lg:bottom-0 lg:z-10 p-2">
            <p class="text-xl font-bold mac:text-xl pc:text-4xl">BIG Sale</p>
            <p class="text-sm tablet:text-lg mb-3 mac:text-lg pc:text-3xl">Get 75% Discount only This Month</p>
            <button class="bg-red-500 w-full rounded-md p-2">
                <a href="#" class="pc:text-4xl mac:text-xl">Go Now</a>
            </button>
            <button id="close" class="bg-gray-400 w-full mt-2 hidden tablet:block rounded-md p-2">
                <a href="#" class="pc:text-4xl mac:text-xl">Maybe Later</a>
            </button>
        </div>
    </div>
    {{-- Corousel --}}
    @include('homepage.partials.homepage-carousel')

    {{-- Category --}}
    @include('homepage.partials.homepage-categories')

    {{-- Weekly product --}}
    @include('homepage.partials.homepage-weekly-product')

    <div class="swiper swiper-item w-[95%] pc:mt-7">
        <div class="swiper-wrapper mt-5 pc:max-w-[80rem]">
            <x-item-card title="Kibutsuji" />
            <x-item-card title="Muzan" />
            <x-item-card title="Freind" />
            <x-item-card title="Axolot" />
            <x-item-card title="tester" />
            <x-item-card title="testing" />
            <x-item-card title="some" />
            <x-item-card title="Ketse" />
            <x-item-card title="Diff" />
        </div>
        <div class="swiper-pagination relative top-1 mb-10"></div>
        <div class="pagination">
            <div class="swiper-button-prev ml-5"><img src="img/prev.svg" class="handphone:-ml-7" alt=""></div>
            <div class="swiper-button-next mr-5"><img src="img/next.svg"
                    class="handphone:ml-10 tablet:ml-2 laptop:mr-10" alt=""></div>
        </div>
    </div>
    <div
        class="container max-w-full w-full tablet:max-w-[40rem] laptop:max-w-[50rem] lg:max-w-[78rem] xl:max-w-[90rem] pc:max-w-[150rem] ultra:max-w-full">
        <div class="flex justify-between">
            <h1 class="font-bold font-sans mb-2 text-lg">Monthly Product</h1>
            <a href="#" class="text-sm font-mono justify-end mt-2 flex">View all <img src="img/arrow.svg"
                    class="-mt-[7px] hidden tablet:flex" width="16%" alt=""></a>
        </div>
        <p class="w-full bg-black/20 h-[2px] mb-2"></p>
    </div>
    <div class="swiper swiper-item w-[95%] pc:mt-7">
        <div class="swiper-wrapper mt-5 pc:max-w-[80rem]">
            <x-item-card title="hmm" />
            <x-item-card title="apa" />
            <x-item-card title="men" />
            <x-item-card title="tak" />
            <x-item-card title="tulis" />
            <x-item-card title="disini" />
            <x-item-card title="welp" />
            <x-item-card title="disini" />
            <x-item-card title="welp" />
        </div>
        <div class="swiper-pagination relative top-1"></div>
        <div class="pagination">
            <div class="swiper-button-prev ml-5"><img src="img/prev.svg" class="handphone:-ml-7" alt=""></div>
            <div class="swiper-button-next mr-5"><img src="img/next.svg"
                    class="handphone:ml-10 tablet:ml-2 laptop:mr-10" alt=""></div>
        </div>
    </div>
</x-app-layout>
