<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
 {{-- {{ $slot }} --}}
        <div id="carouselExampleDark" class="carousel carousel-dark slide group overflow-hidden mb-10">
            <div class="carousel-indicators transistion duration-200 translate-y-11 group-hover:-translate-y-1">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/Many.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/buy.png" class="d-block w-100" alt="...">
            </div>
            </div>
            <button class="carousel-control-prev -translate-x-36 transition ease-out group-hover:duration-200 group-hover:-translate-x-12 hover:text-black" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next translate-x-36 transition ease-out group-hover:duration-200 group-hover:translate-x-12  hover:text-white" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
         <!-- Category -->
        <div class="h-96 overflow-hidden">
            <div class="category text-center mb-4">
                <h1 class="font-serif text-3xl mb-1">Category</h1>
                <p class="bg-gradient-to-r w-28 m-auto from-purple-400 to-pink-500 rounded-xl h-1 overflow-hidden">Z</p>
        </div>
        <div class="flex flex-row flex-wrap">
            <x-category>
                Kalung
            </x-category>
            <x-category class="bg-model">
                Cincin
            </x-category>
            <x-category>
                Gelang
            </x-category>
        </div>
    </x-slot>
    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
                    @foreach ($Items as $item) 
                        <x-item-card :item="$item"/>
                    @endforeach
                </div>
            </div>
        </div>
    </div> --}}
</x-app-layout>
