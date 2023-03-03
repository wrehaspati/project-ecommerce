<x-app-layout>
    <x-slot name="main">

        {{-- Corousel --}}
        @include('homepage.partials.homepage-carousel')

        {{-- Category --}}
        @include('homepage.partials.homepage-categories')

        {{-- Weekly product --}}
        @include('homepage.partials.homepage-weekly-product')

        <!-- Slider main container -->
        <x-item-card/>
     
        {{-- Footer --}}
        @include('homepage.partials.homepage-footer')
    </x-slot>
</x-app-layout>
