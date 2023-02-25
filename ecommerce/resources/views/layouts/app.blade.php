<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Boostrap CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                <div id="carouselExampleDark" class="carousel carousel-dark slide group">
                    <div class="carousel-indicators">
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
                {{-- <div class="group posting flex h-full mb-32">
                    <div class="slider1" id="banner1">
                        <img src="img/Only.png" class="bg-cover" alt="">
                    </div>
                    <div class="slider2 hidden" id="banner2">
                        <img src="img/buy.png" class="bg-cover" alt="">
                    </div>
                    <a href="#" id="frst" onclick="next()" class="absolute z-20 carosel top-2/4 -right-10 transition ease-out group-hover:duration-200 group-hover:-translate-x-12 hover:bg-black hover:text-white"><span class="material-symbols-rounded transition ease-out hover:text-white duration-200 text-5xl">chevron_right</span></a>
                    <a href="#" id="scnd" onclick="prev()" class="absolute z-20 carosel top-2/4 -left-10  transition ease-out group-hover:duration-200 group-hover:translate-x-12  hover:bg-black hover:text-white"><span class="material-symbols-rounded transition ease-out hover:text-white duration-200 text-5xl">chevron_left</span></a>
                </div> --}}
                <section class="inline-block relative">
                    <div class="category">
                        <h1>Category</h1>
                    </div>
                </section>
                {{-- {{ $slot }} --}}
            </main>
        </div>
        {{-- <script>
        function next(){
            document.getElementById("banner1").style.transition="1s all";
            document.getElementById("banner1").style.visibility="hidden";
            document.getElementById("banner1").style.zIndex="10";
            document.getElementById("banner2").style.zIndex="20";
            document.getElementById("frst").style.visibility="hidden";
            document.getElementById("banner2").style.visibility="visible";
            document.getElementById("scnd").style.visibility="visible";

        }
        function prev(){
            document.getElementById("banner2").style.transition="1s all";
            document.getElementById("banner2").style.visibility="hidden";
            document.getElementById("banner2").style.zIndex="10";
            document.getElementById("banner1").style.zIndex="20";
            document.getElementById("scnd").style.visibility="hidden";
            document.getElementById("frst").style.visibility="visible";
            document.getElementById("banner1").style.visibility="visible";
        }
        </script> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        {{-- <script src="js/script.js"></script> --}}
    </body>
</html>
