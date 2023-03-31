<x-app-layout>   
    {{-- Corousel --}}
    @include('homepage.partials.homepage-carousel')

    {{-- Category --}}
    {{-- @include('homepage.partials.homepage-categories') --}}

    {{-- Weekly product --}}
    @include('homepage.partials.homepage-weekly-product')

    <div class="container max-w-full bg-white mt-4">
        <div class="splide">
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
    <div
        class="container  max-w-full w-full tablet:max-w-[40rem] laptop:max-w-[50rem] lg:max-w-[78rem] xl:max-w-[90rem] pc:max-w-[150rem] ultra:max-w-full">
        <div class="flex justify-between">
            <h1 class="font-bold font-sans mb-2 text-lg">Monthly Product</h1>
            <a href="#" class="text-sm font-mono justify-end mt-2 flex">View all <img src="img/arrow.svg"
                    class="-mt-[7px] hidden tablet:flex" width="16%" alt=""></a>
        </div>
        <p class="w-full max-w-full bg-black/20 h-[2px] mb-2"></p>
    </div>

    <div class="container max-w-full bg-white mt-20">
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

    {{-- <div class="swiper swiper-item w-[95%] pc:mt-7">
        <div class="swiper-wrapper mt-5 pc:max-w-[80rem] ultra:max-w-[90rem]">
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
        <div class="swiper-wrapper mt-5 pc:max-w-[80rem] ultra:max-w-[90rem]">
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
    </div> --}}
</x-app-layout>
