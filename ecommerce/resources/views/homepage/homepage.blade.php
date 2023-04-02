<x-app-layout>
    <x-slot name="header">
        <link href="css/homepage.css" rel="stylesheet" />
    </x-slot>
    {{-- Corousel --}}
    @include('homepage.partials.homepage-carousel')

    {{-- Category --}}
    @include('homepage.partials.homepage-categories')

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

    <div class="container max-w-full bg-white mt-4">
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
