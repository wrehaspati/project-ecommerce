<div style="min-height: 700px" class="absolute lg:relative min-w-[5rem] max-w-[5rem] h-screen shadow bg-white hidden lg:block">
    <div class="flex flex-col justify-between h-screen">
        <ul>
            <li class="w-full flex justify-center p-4">
                <a href="{{ url('/') }}" class="bg-gray-100 p-2 rounded-lg">
                    <img src="{{ url(asset('img/logo-only.png')) }}" width="30rem" height="30rem">
                </a>
            </li>
            <li class="pt-8 w-full flex items-center text-center p-4">
                <a href="{{ url('admin/') }}" class="rounded-lg w-full">
                    <i class="fi fi-ss-home w-full hover:text-indigo-700 {{ request()->is('admin') ? 'text-indigo-700' : 'text-gray-500' }}"></i>
                </a>
            </li>
            <li class="w-full flex items-center text-center p-4">
                <a href="#" class="h-full rounded-lg w-full">
                    <i class="fi fi-ss-chart-simple w-full text-gray-500 hover:text-indigo-700"></i>
                </a>
            </li>

            <div class="static" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
                <div class="absolute min-w-[15rem] min-h-[15rem] p-4 rounded-md shadow-lg z-50 bg-white" style="left:6rem" 
                    x-show="open"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95">
                    <h2 class="border-b border-gray-200 pb-1"><i class="fi fi-ss-layers w-full text-gray-500 font-semibold">  Database Layer</i></h2>
                    <ul>
                        <li class="py-2">
                            <a href="{{ route('products.index') }}" class="hover:text-indigo-700">
                                > Products Managements
                            </a>
                        </li>
                        <li class="pb-2">
                            <a href="#" class="hover:text-indigo-700">
                                > Stock Managements
                            </a>
                        </li>
                    </ul>
                </div>
                <li class="w-full flex items-center text-center p-4">
                    <button @click="open = ! open" class="rounded-lg w-full">
                        <i class="fi fi-ss-layers w-full text-gray-500 hover:text-indigo-700 {{ Request::segment(2) === 'products' ? 'text-indigo-700' : 'text-gray-600' }}"></i>
                    </button>
                </li>
            </div>

            <li class="w-full flex items-center text-center p-4">
                <a href="#" class="rounded-lg w-full">
                    <i class="fi fi-ss-checkbox w-full text-gray-500 hover:text-indigo-700"></i>
                </a>
            </li>
            <li class="w-full flex items-center text-center p-4">
                <a href="#" class="rounded-lg w-full">
                    <i class="fi fi-ss-flag w-full text-gray-500 hover:text-indigo-700"></i>
                </a>
            </li>
            <li class="w-full flex items-center text-center p-4">
                <a href="#" class="rounded-lg w-full">
                    <i class="fi fi-ss-users w-full text-gray-500 hover:text-indigo-700"></i>
                </a>
            </li>
        </ul>
        
        <ul>
            <li class="w-full flex items-center text-center p-4">
                <a href="#" class="rounded-lg w-full">
                    <i class="fi fi-ss-life-ring w-full text-gray-500 hover:text-indigo-700"></i>
                </a>
            </li>
            <li class="w-full flex items-center text-center p-4">
                <a href="#" class="rounded-lg w-full">
                    <i class="fi fi-ss-settings w-full text-gray-500 hover:text-indigo-700"></i>
                </a>
            </li>
            <li class="w-full flex justify-center text-center p-4 border-t-1">
                <a href="{{ route('profile.edit') }}" class="relative select-none pl-1">
                    <div class="rounded-lg h-10 w-10 bg-gray-200 text-center leading-[2.5rem] font-black text-xl">
                        {{ Str::limit(Auth::user()->name, 1, $end = '') }}
                    </div>
                    <div
                        class="w-2 h-2 rounded-full bg-green-400 border border-white absolute inset-0 mb-0 mr-0 m-auto">
                    </div>
                </a>
            </li>
        </ul>
    </div>

    {{-- <ul class="py-4 pl-5">
        <li>
            <a href="{{ url('admin') }}" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 {{ request()->is('admin') ? 'text-indigo-700' : 'text-gray-600' }}">
                <i class="fa-solid fa-chart-line"></i>
                <span class="ml-3" sidebar-toggle-item>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('products.index') }}" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 {{ Request::segment(2) === 'products' ? 'text-indigo-700' : 'text-gray-600' }}">
                <i class="fa-solid fa-gem"></i>
                <span class="ml-3" sidebar-toggle-item>Products</span>
            </a>
        </li>
        <li>
            <a href="{{ route('blogs.index') }}" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700  {{ Request::segment(2) === 'blogs' ? 'text-indigo-700' : 'text-gray-600' }}">
                <i class="fa-solid fa-blog"></i>
                <span class="ml-3" sidebar-toggle-item>Blogs</span>
            </a>
        </li>
    </ul> --}}
</div>
