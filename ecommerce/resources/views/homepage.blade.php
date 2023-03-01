<x-app-layout>
    <x-slot name="main">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <style>
            .pagination div[class^="swiper-button"]::after{
                display: none
            }   
        </style>
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
        <h1 class="text-center ml-24 font-serif text-2xl">Weekly Product</h1>
    </div>

        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper text-center mb-5">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="card w-3/4 ml-28 h-80">
                    <div class="overflow-hidden group/primary">
                    <div class="flex flex-col top-5 opacity-1 -left-10 transition-all duration-300 group-hover/primary:left-4 group-hover/primary:opacity-100 h-0 shadow-xl shadow-black relative z-10">
                    <img src="img/heart.svg" width="13%" height="13%" class="bg-white p-2 cursor-pointer" alt="">
                    <img src="img/next.svg" width="13%" height="13%" class="bg-white p-2 cursor-pointer" alt="">
                </div>
                <div class="relative group/secondary transition-all duration-300 group-hover/primary:top-34 flex rounded-b-lg z-10 top-52 pb-2 bg-gradient-to-r from-purple-400 to-pink-800">
                    <p class="ml-30 mt-2 transition-all duration-300 group-hover/secondary:-mt-5 group-hover/secondary:opacity-1 text-white cursor-pointer">Add To Cart</p>
                    <img src="img/cart.svg" width="7%" height="5%" class="mt-1 opacity-1 ml-14 transition-all duration-300 group-hover/secondary:-ml-14 group-hover/secondary:opacity-100" alt="">
                </div>
                    <img src="img/model.jpeg" id="card1" class="card-img-top relative bottom-10 object-contain" alt="...">
                    <img src="img/model2.jpeg" id="card2" class="card-img-top relative bottom-10 object-cover" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Charm Necklace</h5>
                      <p class="card-text opacity-75 mb-3 text-sm">Dapat Menambah Regen sebesar 10HPS</p>
                      <div class="text-left flex flex-row font-mono ">
                        <p>Series :</p>
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
                      <p class="text-right opacity-80">RP.192.68</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card w-3/4 ml-20 h-80">
                    <div class="overflow-hidden group/primary">
                    <div class="flex flex-col top-5 opacity-1 -left-10 transition-all duration-300 group-hover/primary:left-4 group-hover/primary:opacity-100 h-0 shadow-xl shadow-black relative z-10">
                    <img src="img/heart.svg" width="13%" height="13%" class="bg-white p-2 cursor-pointer" alt="">
                    <img src="img/next.svg" width="13%" height="13%" class="bg-white p-2 cursor-pointer" alt="">
                </div>
                <div class="relative group/secondary transition-all duration-300 group-hover/primary:top-34 flex rounded-b-lg z-10 top-52 pb-2 bg-gradient-to-r from-purple-400 to-pink-800">
                    <p class="ml-30 mt-2 transition-all duration-300 group-hover/secondary:-mt-5 group-hover/secondary:opacity-1 text-white cursor-pointer">Add To Cart</p>
                    <img src="img/cart.svg" width="7%" height="5%" class="mt-1 opacity-1 ml-14 transition-all duration-300 group-hover/secondary:-ml-14 group-hover/secondary:opacity-100" alt="">
                </div>
                    <img src="img/model.jpeg" id="card3" class="card-img-top relative bottom-10" alt="">
                    <img src="img/model2.jpeg" id="card4" class="card-img-top relative bottom-10" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Charm Necklace</h5>
                      <p class="card-text opacity-75 mb-3 text-sm">Dapat Menambah Regen sebesar 10HPS</p>
                      <div class="text-left flex flex-row font-mono">
                        <p>Series :</p>
                        <div class=" ml-1 flex group hover:ring-1 transition-all duration-300 cursor-pointer hover:ring-red-400 ring-inset hover:p-2 hover:rounded-md">
                            <a class="flex" onclick="change1()">
                            <p class="bg-red-600 rounded-full w-5 h-5 "></p>
                            <p class="ml-1 -mt-1">Red</p>
                            </a>
                        </div>
                        <div class=" ml-3 flex group hover:ring-1 transition-all duration-300 cursor-pointer hover:ring-blue-400 ring-inset hover:p-2 hover:rounded-md">
                            <p class="bg-blue-600 rounded-full w-5 h-5 "></p>
                            <p class="ml-1 -mt-1">Blue</p>
                        </div>
                      </div>
                      <p class="text-right opacity-80">RP.192.68</p>
                    </div>
                </div>    
            </div> 
            <div class="swiper-slide">
                <div class="card w-3/4 ml-5 h-80">
                    <div class="overflow-hidden group/primary">
                    <div class="flex flex-col top-5 opacity-1 -left-10 transition-all duration-300 group-hover/primary:left-4 group-hover/primary:opacity-100 h-0 shadow-xl shadow-black relative z-10">
                    <img src="img/heart.svg" width="13%" height="13%" class="bg-white p-2 cursor-pointer" alt="">
                    <img src="img/next.svg" width="13%" height="13%" class="bg-white p-2 cursor-pointer" alt="">
                </div>
                <div class="relative group/secondary transition-all duration-300 group-hover/primary:top-34 flex rounded-b-lg z-10 top-52 pb-2 bg-gradient-to-r from-purple-400 to-pink-800">
                    <p class="ml-30 mt-2 transition-all duration-300 group-hover/secondary:-mt-5 group-hover/secondary:opacity-1 text-white cursor-pointer">Add To Cart</p>
                    <img src="img/cart.svg" width="7%" height="5%" class="mt-1 opacity-1 ml-14 transition-all duration-300 group-hover/secondary:-ml-14 group-hover/secondary:opacity-100" alt="">
                </div>
                    <img src="img/model.jpeg" id="card5" class="card-img-top relative bottom-10" alt="...">
                    <img src="img/model2.jpeg" id="card6" class="card-img-top relative bottom-10" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Charm Necklace</h5>
                      <p class="card-text opacity-75 mb-3 text-sm">Dapat Menambah Regen sebesar 10HPS</p>
                      <div class="text-left flex flex-row font-mono">
                        <p>Series :</p>
                        <div class=" ml-1 flex group hover:ring-1 transition-all duration-300 cursor-pointer hover:ring-red-400 ring-inset hover:p-2 hover:rounded-md">
                            <a class="flex" onclick="change2()">
                            <p class="bg-red-600 rounded-full w-5 h-5 "></p>
                            <p class="ml-1 -mt-1">Red</p>
                            </a>
                        </div>
                        <div class=" ml-3 flex group hover:ring-1 transition-all duration-300 cursor-pointer hover:ring-blue-400 ring-inset hover:p-2 hover:rounded-md">
                            <p class="bg-blue-600 rounded-full w-5 h-5 "></p>
                            <p class="ml-1 -mt-1">Blue</p>
                        </div>
                      </div>
                      <p class="text-right opacity-80">RP.192.68</p>
                    </div>
                </div>    
            </div>
            <div class="swiper-slide">
                <div class="card w-3/4 -ml-5 h-80">
                    <div class="overflow-hidden group/primary">
                    <div class="flex flex-col top-5 opacity-1 -left-10 transition-all duration-300 group-hover/primary:left-4 group-hover/primary:opacity-100 h-0 shadow-xl shadow-black relative z-10">
                    <img src="img/heart.svg" width="13%" height="13%" class="bg-white p-2 cursor-pointer" alt="">
                    <img src="img/next.svg" width="13%" height="13%" class="bg-white p-2 cursor-pointer" alt="">
                </div>
                <div class="relative group/secondary transition-all duration-300 group-hover/primary:top-34 flex rounded-b-lg z-10 top-52 pb-2 bg-gradient-to-r from-purple-400 to-pink-800">
                    <p class="ml-30 mt-2 transition-all duration-300 group-hover/secondary:-mt-5 group-hover/secondary:opacity-1 text-white cursor-pointer">Add To Cart</p>
                    <img src="img/cart.svg" width="7%" height="5%" class="mt-1 opacity-1 ml-14 transition-all duration-300 group-hover/secondary:-ml-14 group-hover/secondary:opacity-100" alt="">
                </div>
                    <img src="img/model.jpeg" id="card7" class="card-img-top relative bottom-10" alt="...">
                    <img src="img/model2.jpeg" id="card8" class="card-img-top relative bottom-10" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Charm Necklace</h5>
                      <p class="card-text opacity-75 mb-3 text-sm">Dapat Menambah Regen sebesar 10HPS</p>
                      <div class="text-left flex flex-row font-mono">
                        <p>Series :</p>
                        <div class=" ml-1 flex group hover:ring-1 transition-all duration-300 cursor-pointer hover:ring-red-400 ring-inset hover:p-2 hover:rounded-md">
                            <a class="flex" onclick="change3()">
                            <p class="bg-red-600 rounded-full w-5 h-5 "></p>
                            <p class="ml-1 -mt-1">Red</p>
                            </a>
                        </div>
                        <div class=" ml-3 flex group hover:ring-1 transition-all duration-300 cursor-pointer hover:ring-blue-400 ring-inset hover:p-2 hover:rounded-md">
                            <p class="bg-blue-600 rounded-full w-5 h-5 "></p>
                            <p class="ml-1 -mt-1">Blue</p>
                        </div>
                      </div>
                      <p class="text-right opacity-80">RP.192.68</p>
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
        <footer class="h-56 mt-5">
            <div class="bg-slate-300 flex flex-row">
                <div>
                    <img src="img/logo-projek.png" class="ml-5" alt="">
                </div>
                <div class="flex ml-32 mt-3 flex-col">
                    <h1 class="mb-1 text-xl">Information</h1>
                    <a href="" class="mb-1 opacity-70 transition-all duration-200 hover:opacity-100 hover:text-black">Test</a>
                    <a href="" class="mb-1 opacity-70 transition-all duration-200 hover:opacity-100 hover:text-black">test</a>
                    <a href="" class="mb-1 opacity-70 transition-all duration-200 hover:opacity-100 hover:text-black">test</a>
                    <a href="" class="mb-1 opacity-70 transition-all duration-200 hover:opacity-100 hover:text-black">test</a>
                    <a href="" class="mb-1 opacity-70 transition-all duration-200 hover:opacity-100 hover:text-black">test</a>
                </div>
                <div class="flex ml-32 mt-3 flex-col">
                    <h1 class="mb-2 text-xl">Contact Us</h1>
                    <a href="#" class="transition-all duration-300 hover:text-green-600 mb-2">
                        <img src="img/whatsapp.svg" width="20%" height="20%" alt=""><p class="ml-8 -mt-6">Betatester</p>
                    </a>
                    <a href="#" class="transition-all group duration-300 bg-clip-text hover:bg-gradient-to-r from-purple-700 to-pink-500">
                        <img src="img/instagram.svg" width="20%" height="20%" alt=""><p class="ml-8 -mt-6 group-hover:text-transparent">@Betatester</p>    
                    </a> 
                </div>
                <iframe class="ml-50" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.957904962603!2d115.26483181421966!3d-8.600040189709317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23e3a84e8a77f%3A0xdbd8a2a87abe8f3b!2sSunaka%20Jewelry!5e0!3m2!1sid!2sid!4v1677638003525!5m2!1sid!2sid" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>   
            </div>
        </footer>
        
        <script>
           const swiper = new Swiper('.swiper', {
            speed: 400,
            spaceBetween: 1,
            slidesPerView:3,
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
            function change1(){
                document.getElementById('card3').style.opacity="0";
                document.getElementById('card3').style.transition="all 0.7s";
                document.getElementById('card4').style.transform="translateY(-229px)";
                document.getElementById('card4').style.transition="all 0.5s";
            }
            function change2(){
                document.getElementById('card5').style.opacity="0";
                document.getElementById('card5').style.transition="all 0.7s";
                document.getElementById('card6').style.transform="translateY(-229px)";
                document.getElementById('card6').style.transition="all 0.5s";
            }
            function change3(){
                document.getElementById('card7').style.opacity="0";
                document.getElementById('card7').style.transition="all 0.7s";
                document.getElementById('card8').style.transform="translateY(-229px)";
                document.getElementById('card8').style.transition="all 0.5s";
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
