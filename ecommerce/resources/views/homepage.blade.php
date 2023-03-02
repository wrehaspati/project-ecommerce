<x-app-layout>
    <x-slot name="main">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}
        <style>
            .pagination div[class^="swiper-button"]::after{
                display: none
            }   
        </style>

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
        <div class="h-60 mb-20 overflow-hidden">
            <div class="category text-center mb-4">
                <h1 class="font-serif text-3xl mb-1">Category</h1>
                <p class="bg-gradient-to-r w-28 m-auto from-purple-400 to-pink-500 rounded-xl h-1 overflow-hidden">Z</p>
        </div>
        <div class="flex flex-row flex-wrap">
            <x-category>
                Kalung
            </x-category>
            <x-category>
                Cincin
            </x-category>
            <x-category>
                Gelang
            </x-category>
        </div>
    </div>
    <div class="h-20"> 
        <h1 class="text-center font-serif text-2xl">Weekly Product</h1>
    </div>

        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper text-center">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="card mb-5 ml-30 w-3/12 h-80">
                    <div class="overflow-hidden group/primary">
                    <div class="flex flex-col top-5 opacity-1 -left-10 transition-all duration-300 group-hover/primary:left-4 group-hover/primary:opacity-100 h-0 shadow-xl shadow-black relative z-10">
                    <img src="img/heart.svg" width="13%" height="13%" class="bg-white p-2 cursor-pointer" alt="">
                    <img src="img/next.svg" width="13%" height="13%" class="bg-white p-2 cursor-pointer" alt="">
                </div>
                <div class="relative group/secondary transition-all duration-300 group-hover/primary:top-40 flex rounded-b-lg z-10 top-52 pb-2 bg-gradient-to-r from-purple-400 to-pink-800">
                    <p class="ml-30 mt-2 transition-all duration-300 group-hover/secondary:-mt-5 group-hover/secondary:opacity-1 text-white cursor-pointer">Add To Cart</p>
                    <img src="img/cart.svg" width="7%" height="5%" class="mt-1 opacity-1 ml-14 transition-all duration-300 group-hover/secondary:-ml-14 group-hover/secondary:opacity-100" alt="">
                </div>
                    <img src="img/model.jpeg" id="card1" class="card-img-top relative bottom-10" alt="...">
                    <img src="img/model2.jpeg" id="card2" class="card-img-top relative bottom-10" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Charm Necklace</h5>
                      <p class="card-text opacity-75 mb-3 text-sm">Dapat Menambah Regen sebesar 10HPS</p>
                      <div class="text-left flex flex-row font-mono">
                        <p>Available :</p>
                        <div class=" ml-1 flex group hover:ring-1 transition-all duration-300 cursor-pointer hover:ring-red-400 ring-inset hover:p-2 hover:rounded-md">
                            <a class="flex" onclick="change()">
                            <p class="bg-red-600 rounded-full w-5 h-5 "></p>
                            <p class="ml-1 -mt-1">Red</p>
                            </a>
                        </div>
                        <div class=" ml-3 flex group hover:ring-1 transition-all duration-300 cursor-pointer hover:ring-blue-400 ring-inset hover:p-2 hover:rounded-md">
                            <p class="bg-blue-600 rounded-full w-5 h-5 "></p>
                            <p class="ml-1 -mt-1">Blue</p>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card mb-5 ml-30 w-3/12 h-80">
                    <div class="overflow-hidden group/primary">
                    <div class="flex flex-col top-5 opacity-1 -left-10 transition-all duration-300 group-hover/primary:left-4 group-hover/primary:opacity-100 h-0 shadow-xl shadow-black relative z-10">
                    <img src="img/heart.svg" width="13%" height="13%" class="bg-white p-2 cursor-pointer" alt="">
                    <img src="img/next.svg" width="13%" height="13%" class="bg-white p-2 cursor-pointer" alt="">
                </div>
                <div class="relative group/secondary transition-all duration-300 group-hover/primary:top-40 flex rounded-b-lg z-10 top-52 pb-2 bg-gradient-to-r from-purple-400 to-pink-800">
                    <p class="ml-30 mt-2 transition-all duration-300 group-hover/secondary:-mt-5 group-hover/secondary:opacity-1 text-white cursor-pointer">Add To Cart</p>
                    <img src="img/cart.svg" width="7%" height="5%" class="mt-1 opacity-1 ml-14 transition-all duration-300 group-hover/secondary:-ml-14 group-hover/secondary:opacity-100" alt="">
                </div>
                    <img src="img/model.jpeg" id="card1" class="card-img-top relative bottom-10" alt="...">
                    <img src="img/model2.jpeg" id="card2" class="card-img-top relative bottom-10" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Charm Necklace</h5>
                      <p class="card-text opacity-75 mb-3 text-sm">Dapat Menambah Regen sebesar 10HPS</p>
                      <div class="text-left flex flex-row font-mono">
                        <p>Available :</p>
                        <div class=" ml-1 flex group hover:ring-1 transition-all duration-300 cursor-pointer hover:ring-red-400 ring-inset hover:p-2 hover:rounded-md">
                            <a class="flex" onclick="change()">
                            <p class="bg-red-600 rounded-full w-5 h-5 "></p>
                            <p class="ml-1 -mt-1">Red</p>
                            </a>
                        </div>
                        <div class=" ml-3 flex group hover:ring-1 transition-all duration-300 cursor-pointer hover:ring-blue-400 ring-inset hover:p-2 hover:rounded-md">
                            <p class="bg-blue-600 rounded-full w-5 h-5 "></p>
                            <p class="ml-1 -mt-1">Blue</p>
                        </div>
                      </div>
                    </div>
                </div>    
            </div> 
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        
            <div class="pagination">
                 <!-- If we need navigation buttons -->
                <div class="swiper-button-prev ml-10"><img src="img/prev.svg" alt=""></div>
                <div class="swiper-button-next mr-10"><img src="img/next.svg" alt=""></div>
            </div>
        </div>
        <div class="h-64 invisible">a</div>
        <script>
           const swiper = new Swiper('.swiper', {
            speed: 400,
            spaceBetween: 1,
            slidesPerView:1,
            pagination: {
                el:'.swiper-pagination',
                type: 'bullets',
                clickable:true
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            });
            function change(){
                document.getElementById('card1').style.opacity="0";
                document.getElementById('card1').style.transition="all 0.7s";
                document.getElementById('card2').style.transform="translateY(-229px)";
                document.getElementById('card2').style.transition="all 0.5s";
            }
        </script>
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
