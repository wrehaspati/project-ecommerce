<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

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
                <div class="group posting flex h-full overflow-hidden">
                    <div class="slider1" id="banner1">
                        <img src="img/Only.png" class="bg-cover absolute z-10" alt="">
                    </div>
                    <div class="slider2 " id="banner2">
                        <img src="img/buy.png" class="bg-cover absolute z-0" alt="">
                    </div>
                    <a href="#" id="frst" onclick="next()" class="absolute z-20 carosel top-2/4 -right-10 transition ease-out group-hover:duration-200 group-hover:-translate-x-12 hover:bg-black hover:text-white"><span class="material-symbols-rounded transition ease-out hover:text-white duration-200 text-5xl">chevron_right</span></a>
                    <a href="#" id="scnd" onclick="prev()" class="absolute z-20 carosel top-2/4 -left-10  transition ease-out group-hover:duration-200 group-hover:translate-x-12  hover:bg-black hover:text-white"><span class="material-symbols-rounded transition ease-out hover:text-white duration-200 text-5xl">chevron_left</span></a>
                </div>
                {{-- {{ $slot }} --}}
            </main>
        </div>
        <script>
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
        </script>
        {{-- <script src="js/script.js"></script> --}}
    </body>
</html>
