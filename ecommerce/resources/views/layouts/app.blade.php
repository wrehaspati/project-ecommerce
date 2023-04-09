<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- CDN Slider --}}
    <script src=" https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js "></script>
    <link href=" https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css " rel="stylesheet">

    <!-- Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet" />
    
    <style>
        @font-face {
            font-family: 'Scriptina';
            font-style: normal;
            font-weight: 400;
            src: local('Scriptina'), url('https://fonts.cdnfonts.com/s/389/scriptina.woff') format('woff');
        }
        @font-face {
            font-family: 'Scriptina - Alternates';
            font-style: normal;
            font-weight: 400;
            src: local('Scriptina - Alternates'), url('https://fonts.cdnfonts.com/s/389/scriptina_alt.woff') format('woff');
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <!-- Page Heading -->
    @if (isset($header))
        {{ $header }}
    @endif
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <main class="bg-white md:pb-[#rem]">
            {{ $slot }}
        </main>
    </div>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    @livewireScripts
</body>
@if (isset($footer))
        {{ $footer }}
    @endif
@include('layouts.footer')

</html>
