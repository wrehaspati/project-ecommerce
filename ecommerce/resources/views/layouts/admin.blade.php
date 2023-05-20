<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>

        <!-- Scripts -->
        @stack('styles') 
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans antialiased overflow-hidden">

        <div class="w-full h-full bg-gray-200">
            <div class="flex flex-no-wrap static">
              <!-- Sidebar starts -->
                @include('layouts.admin-partials.admin-sidebar')

                @include('layouts.admin-partials.admin-mobile-sidebar')

                <!-- Sidebar ends -->
                <div class="w-full">
                    <!-- Navigation starts -->
                    {{-- @include('layouts.admin-partials.admin-navigation') --}}
                    <!-- Navigation ends -->
                    <!-- Remove class [ h-64 ] when adding a card block -->
                    <div class="container mx-auto {{-- py-10 --}} h-screen {{-- mid:w-11/12 mid:px-6 --}}">
                        <!-- Remove class [ border-dashed border-2 border-gray-300 ] to remove dotted border -->
                        <div class="w-full h-full rounded-lg overflow-y-scroll py-4">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
          
          
        </div>
        <script>
            function dropdownHandler(element) {
                let single = element.getElementsByTagName("ul")[0];
                single.classList.toggle("hidden");
            }

            // var sideBar = document.getElementById("mobile-nav");
            // function sidebarHandler() {
            //     sideBar.classList.toggle("hidden");
            // }

            function dropdownHandler(element) {
                let single = element.getElementsByTagName("ul")[0];
                single.classList.toggle("hidden");
            }
            let sideBar = document.getElementById("mobile-nav");
            let menu = document.getElementById("menu");
            let cross = document.getElementById("cross");
            const sidebarHandler = (check) => {
                if (check) {
                    sideBar.style.transform = "translateX(0px)";
                    menu.classList.add("hidden");
                } else {
                    sideBar.style.transform = "translateX(-100%)";
                    menu.classList.remove("hidden");
                }
            };
            function dropdownHandler(element) {
                let single = element.getElementsByTagName("ul")[0];
                single.classList.toggle("hidden");
            }
        </script>
        @stack('scripts')
        @livewireScripts
    </body>
</html>
