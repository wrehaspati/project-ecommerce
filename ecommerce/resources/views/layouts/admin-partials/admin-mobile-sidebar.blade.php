<!--Mobile responsive sidebar-->
<div class="absolute w-full h-full z-40 transform -translate-x-full lg:hidden" id="mobile-nav">
    <div class="bg-gray-800 opacity-50 absolute h-full w-full lg:hidden" onclick="sidebarHandler(false)"></div>
    <div
        class="absolute z-40 sm:relative w-64 md:w-96 shadow pb-4 bg-gray-100 lg:hidden transition duration-150 ease-in-out h-full">
        <div class="flex flex-col justify-between h-full w-full">
            <div>
                <div class="flex items-center justify-between px-8">
                    <div class="h-16 w-full flex items-center">
                        {{-- <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_icons-svg1.svg"
                            alt="logo"> --}}
                            
                        <x-application-logo class="block w-full w-auto fill-current text-gray-800" />
                    </div>
                    <button aria-label="close sidebar" id="closeSideBar"
                        class="flex items-center justify-center h-10 w-10 focus:outline-none focus:ring-2 focus:ring-gray-800 rounded"
                        onclick="sidebarHandler(false)">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_icons-svg2.svg"
                            alt="cross">
                    </button>
                </div>
                
                <ul class="py-4">
                    <li class="pl-6 cursor-pointer text-sm leading-3 tracking-normal pb-4 pt-5 text-indigo-700 focus:text-indigo-700 focus:outline-none">
                        <a href="{{ url('admin') }}" class="flex items-center text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 {{ request()->is('admin') ? 'text-indigo-700' : 'text-gray-600' }}">
                            <i class="fa-solid fa-chart-line"></i>
                            <span class="ml-3" sidebar-toggle-item>Dashboard</span>
                        </a>
                    </li>
                    <li class="pl-6 cursor-pointer text-sm leading-3 tracking-normal pb-4 pt-5 text-indigo-700 focus:text-indigo-700 focus:outline-none">
                        <a href="{{ route('products.index') }}" class="flex items-center text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 {{ Request::segment(2) === 'products' ? 'text-indigo-700' : 'text-gray-600' }}">
                            <i class="fa-solid fa-gem"></i>
                            <span class="ml-3" sidebar-toggle-item>Products</span>
                        </a>
                    </li>
                    <li class="pl-6 cursor-pointer text-sm leading-3 tracking-normal pb-4 pt-5 text-indigo-700 focus:text-indigo-700 focus:outline-none">
                        <a href="{{ route('blogs.index') }}" class="flex items-center text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700  {{ Request::segment(2) === 'blogs' ? 'text-indigo-700' : 'text-gray-600' }}">
                            <i class="fa-solid fa-blog"></i>
                            <span class="ml-3" sidebar-toggle-item>Blogs</span>
                        </a>
                    </li>
                </ul>

            </div>
            <div class="w-full">
                <div class="flex justify-center mb-4 w-full px-6">
                    <div class="relative w-full">
                        <div class="text-gray-600 absolute ml-4 inset-0 m-auto w-4 h-4">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_icons-svg3.svg"
                                alt="Search">
                        </div>
                        <input
                            class="bg-gray-200 focus:outline-none rounded w-full text-sm text-gray-600 placeholder-gray-600 pl-10 py-2"
                            type="text" placeholder="Search" />
                    </div>
                </div>
                <div class="border-t border-gray-300">
                    <div class="w-full flex items-center justify-between px-6 pt-1">
                        <div class="flex items-center">
                            <div class="rounded-md w-8 h-8 bg-green-200 text-center leading-[2.2rem] font-black text-xl select-none">
                                {{ Str::title(Str::limit(Auth::user()->name, 1, $end = '')) }}
                            </div>
                            <p class="md:text-xl text-gray-800 text-base leading-4 ml-3">{{ Str::words(Auth::user()->name, 2, '') }}</p>
                        </div>
                        <ul class="flex">
                            <li class="cursor-pointer text-white pt-5 pb-3">
                                <a aria-label="open chats" href="javascript:void(0)">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_icons-svg4.svg"
                                        alt="chats">
                                </a>
                            </li>
                            <li aria-label="open notifications" class="cursor-pointer text-white pt-5 pb-3 pl-3">
                                <a aria-label="open notifications" href="javascript:void(0)">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_icons-svg5.svg"
                                        alt="notifications">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Mobile responsive sidebar-->
