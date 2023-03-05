<x-app-layout>

        {{-- Corousel --}}
        @include('homepage.partials.homepage-carousel')

        {{-- Category --}}
        @include('homepage.partials.homepage-categories')

        {{-- Weekly product --}}
        @include('homepage.partials.homepage-weekly-product')

        <!-- Slider main container -->
        <x-item-card/>

</x-app-layout>
