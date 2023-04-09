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
