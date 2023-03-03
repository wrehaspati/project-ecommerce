<x-app-layout>
    <x-slot name="main">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}
        <style>
            .pagination div[class^="swiper-button"]::after{
                display: none
            }   
            .cad{
                position: relative;
                width: 450px;
                height: 220px;
            }
            .cad .liner{
                position: absolute;
                inset: 0;
                width: 400px;
                background: black;
                overflow: hidden;
            }
            .cad .liner::before{
                content: '';
                position: absolute;
                top: 50%;
                left: 50%;
                transition: 0.5s;
                transform: translate(-50%,-50%);
                width: 600px;
                height: 120px;
                background: linear-gradient(transparent,rgb(245, 15, 15),rgb(237, 56, 46),transparent);
                animation: puter 3s linear infinite;
            }
            .cad .liner::after{
                content: '';
                border-radius:5px; 
                position: absolute;
                inset: 3px;
                background: linear-gradient(to right,rgb(16, 0, 0),rgb(70, 4, 14));
            }
            @keyframes puter{
                0%{
                    transform: translate(-50%,-50%) rotate(0deg);
                }
                100%{
                    transform: translate(-50%,-50%) rotate(360deg);
                }
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
        <div class="flex flex-row">
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
            <div class="swiper-wrapper text-center mb-5">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="flex w-full ml-5">
                    <div class="cad group/first text-white">
                        <img class="absolute z-10 top-16 left-4 flex hover:scale-125 transition-all duration-100" id="fist" width="40%" src="img/kalung.png" alt="">
                        <img class="absolute z-10 opacity-1 flex top-16 left-4 hover:scale-125 transition-all duration-100" id="okeh" width="40%" src="img/kalung-item.png" alt="">
                        <p class="flex absolute -right-9 font-serif uppercase font-bold top-5 text-xl z-10">Lucky Necklace</p>
                        <p class="flex absolute font-mono right-16 text-lg font-bold top-11 z-10">$ 1.230.21</p>
                        <p class="flex absolute z-10 left-1/2 bottom-1/2 font-serif text-xs uppercase">Variant</p>
                        <div class="flex flex-row absolute z-10 w-3/5 left-1/2 bottom-1/3 text-xs">
                            <div class="bg-slate-600 w-2/3 h-5 rounded-full flex hover:ring-gray-900 hover:ring-inset hover:ring-2 hover:shadow-xl hover:shadow-white/50 transition-all duration-300">
                                <p class="bg-black w-3 h-3 mt-1 ml-1 rounded-full"></p>
                                <a onclick="morph()" style="margin-top: 2px;margin-left: 4px;" class="cursor-pointer">Vanta Black</a>
                            </div>
                            <div class="bg-slate-600 ml-1 w-2/3 h-5 rounded-full flex hover:ring-red-500 hover:ring-inset hover:ring-2 hover:shadow-xl hover:shadow-red-600/40 transition-all duration-300">
                                <p class="bg-red-900 w-3 h-3 mt-1 ml-1 rounded-full"></p>
                                <a onclick="morphin()" style="margin-top: 2px;margin-left: 4px;" class="cursor-pointer">Red Blood</a>
                            </div>
                        </div>
                        <div class="flex absolute z-10 left-1/2 bottom-4 group/second w-2/5 text-sm overflow-hidden">
                            <p class="absolute left-1 z-10 flex group-hover/second:-translate-x-32 transition-all duration-700 bg-black -translate-x-80 rotate-45 w-96 h-96 "></p>
                            <div class="bg-red-800 w-full p-2">
                                <a class="ml-5 font-bold after:absolute relative z-10 after:content-['-'] after:group-hover/second:bg-white after:group-hover/second:delay-700 after:group-hover/second:duration-400 after:group-hover/second:transition-all after:text-white after:h-2 after:bg-black after:-right-4 after:-bottom-3" href="">
                                <img src="img/cart.svg" class="flex absolute -top-1 w-5" alt="">
                                    Add To Cart
                                </a>
                            </div>
                        </div>
                        <div class="flex absolute bottom-4 -right-10 z-10 text-sm">
                            <a href="#"><img width="50%" height="50%" src="img/heart.svg" alt=""></a>
                        </div>
                        <div class="liner before:group-hover/first:opacity-100 before:opacity-1 before:rounded-xl transition-all duration-500 rounded-lg">a</div>
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
                <div class="w-1/2">
                    <img src="img/logo-projek.png" class="ml-5 flex w-full" alt="">
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
            breakpoints: {
                '768': {
                    slidesPerView:4,
                    spaceBetween:1,
                },
                '640': {
                    slidesPerView:3,
                    spaceBetween:1,
                },
                '320': {
                    slidesPerView:2,
                    spaceBetween:1,
                }
            }
            });

            function morph(){
                document.getElementById('fist').style.transition="all 1s";
                document.getElementById('fist').style.opacity="0";
                document.getElementById('okeh').style.transition="all 3s";
                document.getElementById('okeh').style.opacity="1";
            }
            function morphin(){
                document.getElementById('fist').style.transition="all 3s";
                document.getElementById('fist').style.opacity="1";
                document.getElementById('okeh').style.transition="all 1s";
                document.getElementById('okeh').style.opacity="0";
            }

            // button =document.getElementById('satu');
            // button.addEventListener('click',function(){
            // const x = window.matchMedia('(min-width: 400px)')
            // handphone(x) // Call listener function at run time
            // x.addListener(handphone) // Attach listener function on state changes

            // function handphone(x) {
            // if (x.matches) { // If media query matches 
            //         document.getElementById('card1').style.opacity="0";
            //         document.getElementById('card1').style.transition="all 0.7s";
            //         document.getElementById('card2').style.transform="translateY(-165px)";
            //         document.getElementById('card2').style.transition="all 0.5s";
                
            //         window.matchMedia('(orientation: landscape)').addEventListener("change",e =>{
            //         const portrait = e.matches;
                    
            //         if(portrait==true){
            //         document.getElementById('card1').style.opacity="0";
            //         document.getElementById('card1').style.transition="all 0.7s";
            //         document.getElementById('card2').style.transform="translateY(-170px)";
            //         document.getElementById('card2').style.transition="all 0.5s";
            //         }
            //         else{
            //         document.getElementById('card1').style.opacity="0";
            //         document.getElementById('card1').style.transition="all 0.7s";
            //         document.getElementById('card2').style.transform="translateY(-165px)";
            //         document.getElementById('card2').style.transition="all 0.5s";    
            //         }
            //     });
            // } 
            //     else{
            //         console.log("Lebih dari 400px")
            //     }
            // }
            // });
            
            // buton =document.getElementById('dua');
            // buton.addEventListener('click',function(){
            // const x = window.matchMedia('(min-width: 400px)')
            // hp(x) // Call listener function at run time
            // x.addListener(hp) // Attach listener function on state changes

            // function hp(x) {
            // if (x.matches) { // If media query matches 
            //         document.getElementById('card1').style.opacity="1";
            //         document.getElementById('card1').style.transition="all 0.5s";
            //         document.getElementById('card2').style.transform="translateY(170px)";
            //         document.getElementById('card2').style.transition="all 0.7s";
                
            //         window.matchMedia('(orientation: portrait)').addEventListener("change",e =>{
            //         const portrait = e.matches;
                    
            //         if(portrait==true){
            //         document.getElementById('card1').style.opacity="1";
            //         document.getElementById('card1').style.transition="all 0.5s";
            //         document.getElementById('card2').style.transform="translateY(170px)";
            //         document.getElementById('card2').style.transition="all 0.7s";
            //         }
            //         else{
            //         document.getElementById('card1').style.opacity="1";
            //         document.getElementById('card1').style.transition="all 0.5s";
            //         document.getElementById('card2').style.transform="translateY(170px)";
            //         document.getElementById('card2').style.transition="all 0.7s";
            //         }
            //     });
            // } 
            //     else{
            //         console.log("Lebih dari 400px")
            //     }
            // }
            // });
            

            
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
