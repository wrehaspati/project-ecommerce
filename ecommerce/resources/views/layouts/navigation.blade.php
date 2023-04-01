<style>
    /* width */
    #scroll::-webkit-scrollbar {
        width: 1px;
    }

    /* Track */
    #scroll::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    /* Handle */
    #scroll::-webkit-scrollbar-thumb {
        background: rgb(133, 132, 132);
    }
</style>

<nav class="border-b border-gray-100">
    <div class="mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex md:grid-cols-3 justify-between">
            {{-- search bar --}}
            <div class="xl:w-96 hidden md:block">
                <div class="flex justify-end h-full py-2 xl:w-96">
                    <div class="relative flex w-full flex-wrap items-stretch content-center">
                        <input type="search"
                            class="relative m-0 block w-[1%] min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 text-base font-normal text-neutral-700 outline-none transition duration-300 ease-in-out focus:border-primary-600 focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200"
                            placeholder="Search" aria-label="Search" aria-describedby="button-addon2" />
                        <span
                            class="input-group-text flex items-center whitespace-nowrap rounded px-3 py-1.5 text-center text-base font-normal text-neutral-700 dark:text-neutral-200"
                            id="basic-addon2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
            {{-- logo --}}
            <div class="hidden md:block">
                <a href="{{ route('homepage') }}">
                    <x-application-logo class="block h-14 pb-2 w-auto fill-current text-gray-800" />
                </a>
            </div>
            {{-- login --}}
            <div class="xl:w-96 hidden md:block">
                <div class="flex justify-end h-full">
                    <!-- Settings Dropdown -->
                    @auth
                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                {{-- <x-nav-link :href="route('cart.index')" :active="request()->routeIs('cart.index')">
                                <i class="fa-solid fa-cart-shopping"></i>
                                {{ __('MyCart') }}
                            </x-nav-link> --}}
                                <livewire:cart-sidebar />
                            </div>
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="bg-transparent inline-flex items-center px-3 py-2 text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>

                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    @else
                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}"
                                    class="font-semibold text-sm text-gray-500 hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                    in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="ml-4 text-sm font-semibold text-gray-500 hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                @endif
                            @endif
                        </div>
                    @endauth

                </div>
            </div>
        </div>
    </div>
    <!-- Logo -->
</nav>

<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto pr-4 md:px-6 lg:px-8">
        <div class="flex md:justify-center justify-between h-16 md:h-12">
            <div class="flex md:hidden content-center">
                <a href="{{ route('homepage') }}">
                    <x-application-logo class="block h-14 pt-2 w-auto fill-current text-gray-800" />
                </a>
            </div>
            <div class="flex">
                <!-- Navigation Links -->
                <div class="hidden space-x-8 md:-my-px md:ml-10 md:flex">
                    <x-nav-link :href="route('homepage')" :active="request()->routeIs('homepage')">
                        {{ __('Homepage') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 md:-my-px md:ml-10 md:flex">
                    <x-nav-link :href="route('products.dashboard')" :active="request()->routeIs('products.dashboard')">
                        {{ __('Collections') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 md:-my-px md:ml-10 md:flex">
                    <x-nav-link :href="route('learn')" :active="request()->routeIs('learn')">
                        {{ __('Learn') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 md:-my-px md:ml-10 md:flex">
                    <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                        {{ __('Contact') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 md:-my-px md:ml-10 md:flex">
                    <x-nav-link :href="'#'" :active="false">
                        {{ __('Currency') }}
                    </x-nav-link>
                </div>
            </div>



            <!-- Hamburger -->
            <div class="-mr-2 flex items-center md:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('homepage')" :active="request()->routeIs('homepage')">
                {{ __('Homepage') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('products.dashboard')" :active="request()->routeIs('products.dashboard')">
                {{ __('Collections') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('learn')" :active="request()->routeIs('learn')">
                {{ __('Learn') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('learn')" :active="request()->routeIs('contact')">
                {{ __('Contact') }}
            </x-responsive-nav-link>
        </div>
        @auth
        @else
            @if (Route::has('login'))
            <div class="border-t pt-2 pb-3 space-y-1 border-gray-200">
                <x-responsive-nav-link :href="route('login')" :active="false">
                    {{ __('Log in') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('register')" :active="false">
                    {{ __('Register') }}
                </x-responsive-nav-link>
            </div>
            @endif
        @endauth

        <!-- Responsive Settings Options -->
        @auth
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>
                    @if(Auth::user()->role=='admin')
                        <x-responsive-nav-link :href="route('profile.edit')">
                            {{ __('Admin') }}
                        </x-responsive-nav-link>
                    @endif

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        @endauth
    </div>
</nav>
