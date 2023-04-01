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

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 md:bg-gray-100 antialiased">
    {{-- <div class="lg:flex">
        <div class="lg:w-1/2 xl:max-w-screen-sm">
            <div class="md:py-12 py-6 md:bg-indigo-100 lg:bg-white flex justify-center lg:justify-start lg:px-12">
                <div class="cursor-pointer flex items-center">
                    <div>
                        <div class="shrink-0 flex items-center">
                            <a href="{{ route('homepage') }}">
                                <x-application-logo class="block md:h-9 h-12 w-auto fill-current text-gray-800" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-10 px-12 sm:px-24 md:px-48 lg:px-12 lg:mt-16 xl:px-24 xl:max-w-2xl">
                @if (isset($header))
                    {{ $header }}
                @endif    
    
                <div class="mt-12">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div> --}}
    <!-- component -->
    <div class="md:py-6 md:mt-16">
        <div class="flex bg-white rounded-lg md:shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
            <div class="hidden lg:block lg:w-1/2 bg-cover"
                style="background-image:url(img/GALUNGAN_Sale_slider_1920x.webp);background-position: center;">
            </div>
            <div class="w-full p-8 lg:w-1/2">
                <div class="flex justify-center">
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('homepage') }}">
                            <x-application-logo class="block md:h-12 h-12 w-auto fill-current text-gray-800" />
                        </a>
                    </div>
                </div>
                @if(isset($header))
                <p class="font-serif text-xl text-gray-600 text-center mt-4">{{ $header }}</p>
                @endif
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>
