<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
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
  <!-- Category ubah jadi flex biar bisa row -->
<div class="h-96 overflow-hidden">
    <div class="category text-center mb-4">
        <h1 class="font-serif text-3xl mb-1">Category</h1>
        <p class="bg-gradient-to-r w-28 m-auto from-purple-400 to-pink-500 rounded-xl h-1 overflow-hidden">Z</p>
    </div>

    <a href="#"><div class="flex w-1/5 ml-12 bg-black-pale h-2/5 overflow-hidden group">
        <div style="background-image: url('img/model.jpeg')" class="bg-cover group-hover:scale-105 cursor-pointer transition duration-300 w-full mix-blend-multiply group-hover:shadow-black/25">
            <p class="border-t-2 border-l-2 border-red-800 w-5 h-5 m-3 transition-all group-hover:-translate-x-1 group-hover:-translate-y-1"></p>
            <p class="border-t-2 border-r-2 ml-56 -mt-9 border-red-800 w-5 h-5 transition-all group-hover:translate-x-0 group-hover:-translate-y-1"></p>
            <p class="border-b-2 border-l-2 border-red-800 w-5 h-5 mt-20 ml-3 transition-all group-hover:translate-x-0 group-hover:translate-y-1"></p>
            <p class="border-r-2 border-b-2 border-red-800 w-5 h-5 -mt-5 ml-56 transition-all group-hover:translate-x-0 group-hover:translate-y-1"></p>
            <p class="font-sans text-center -mt-20 text-2xl text-blue-600 transition-all duration-500 group-hover:-mt-32 group-hover:opacity-0">Kalung</p>
            <p class="text-center text-2xl mt-4 opacity-1 group-hover:opacity-100 transition-all duration-500">See More</p>
        </div>
    </div>
    </a>
</div>
<div class="h-98">
  tester
</div>

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
