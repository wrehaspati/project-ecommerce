<x-app-layout>

        {{-- Corousel --}}
        @include('homepage.partials.homepage-carousel')

        {{-- Category --}}
        @include('homepage.partials.homepage-categories')

        {{-- Weekly product --}}
        @include('homepage.partials.homepage-weekly-product')

        <!-- Slider main container -->
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
                <div class="swiper-pagination relative bottom-0 mb-10"></div>
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
                <div class="swiper-pagination relative bottom-0"></div>
                <div class="pagination">
                <div class="swiper-button-prev ml-5"><img src="img/prev.svg" class="handphone:-ml-7" alt=""></div>
                <div class="swiper-button-next mr-5"><img src="img/next.svg" class="handphone:ml-10 tablet:ml-2 laptop:mr-10" alt=""></div>
                </div>
            </div>
</x-app-layout>
