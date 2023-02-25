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
    @livewireStyles
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    {{-- <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" /> --}}

</head>

<body class="font-sans antialiased dark:bg-slate-800">

    <!-- Page Content -->
    <div class="flex flex-col md:flex-row">
        <nav aria-label="alternative nav">
            <div class="bg-gray-800 dark:bg-zinc-800 shadow-xl h-20 fixed relative bottom-0 md:h-screen z-10 w-full md:w-[10vw] content-center">

                <div
                    class=" md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                    <ul class="list-reset flex flex-row md:flex-col pt-3 md:py-3 px-1 md:px-2 text-center md:text-left">
                        <li class="mr-3 flex-1">
                            <a href="{{ url('admin') }}"
                                class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-white-600 text-center">
                                <span
                                    class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Admin
                                    Dashboard
                                </span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                            <a href="{{ url('admin/database/item') }}"
                                class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 {{ Request::path() == 'admin/database/item' ? 'border-blue-600' : 'border-gray-800 hover:border-pink-500' }}">
                                <i
                                    class="fas fa-tasks pr-0 md:pr-3 {{ Request::path() == 'admin/database/item' ? 'text-blue-600' : '' }}"></i><span
                                    class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Managing
                                    Items</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                            <a href="{{ url('admin/database/user') }}"
                                class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 {{ Request::path() == 'admin/database/user' ? 'border-blue-600' : 'border-gray-800 hover:border-pink-500' }}">
                                <i
                                    class="fas fa-user pr-0 md:pr-3 {{ Request::path() == 'admin/database/user' ? 'text-blue-600' : '' }}"></i><span
                                    class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Managing
                                    Users</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                            <a href="{{ url('admin/messages') }}"
                                class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 {{ Request::path() == 'admin/messages' ? 'border-blue-600' : 'border-gray-800 hover:border-pink-500' }}">
                                <i
                                    class="fa fa-envelope pr-0 md:pr-3 {{ Request::path() == 'admin/messages' ? 'text-blue-600' : '' }}"></i><span
                                    class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Messages</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                            <a href="{{ url('admin/analytics') }}"
                                class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 {{ Request::path() == 'admin/analytics' ? 'border-blue-600' : 'border-gray-800 hover:border-pink-500' }}">
                                <i
                                    class="fas fa-chart-area pr-0 md:pr-3 {{ Request::path() == 'admin/analytics' ? 'text-blue-600' : '' }}"></i><span
                                    class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Analytics</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                            <a href="{{ url('admin/payments') }}"
                                class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 {{ Request::path() == 'admin/payments' ? 'border-blue-600' : 'border-gray-800 hover:border-pink-500' }}">
                                <i
                                    class="fa fa-wallet pr-0 md:pr-3 {{ Request::path() == 'admin/payments' ? 'text-blue-600' : '' }}"></i><span
                                    class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Payments</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section>
            <div id="main" class="main-content flex-1 pb-24 md:pb-5 md:h-screen md:w-[90vw] p-5 dark:text-white">
                <main>
                    {{ $slot }}
                </main>
            </div>
        </section>
    </div>
    <style>
        [x-cloak] { display: none !important; }
    </style>
    @livewireScripts
</body>
</html>
