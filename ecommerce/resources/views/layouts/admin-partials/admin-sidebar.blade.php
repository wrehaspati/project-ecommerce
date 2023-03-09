<div style="min-height: 700px" class="absolute lg:relative w-64 h-screen shadow bg-gray-100 hidden lg:block">
    <div class="h-16 w-full flex items-center px-8">
        {{-- <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_icons-svg1.svg" alt="logo"> --}}
        <x-application-logo class="block w-full w-auto fill-current text-gray-800" />
    </div>
    <ul class="py-6">
        <li
            class="pl-6 cursor-pointer text-sm leading-3 tracking-normal pb-4 pt-5 focus:text-indigo-700 focus:outline-none {{ request()->is('admin') ? 'text-indigo-700' : 'text-gray-600' }}">
            <div class="flex items-center">
                <div>
                    <i class="fa-solid fa-chart-line"></i>
                </div>
                <a href="{{ url('admin') }}" class="ml-2">&nbsp; Dashboard</a>
            </div>
        </li>
        <li
            class="pl-6 cursor-pointer text-sm leading-3 tracking-normal mt-4 mb-4 py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none {{ Request::segment(2) === 'products' ? 'text-indigo-700' : 'text-gray-600' }}">
            <div class="flex items-center">
                <i class="fa-solid fa-gem"></i>
                <a href="{{ route('show.items') }}" class="ml-2">&nbsp; Products</a>
            </div>
        </li>
        <li
            class="pl-6 cursor-pointer text-sm leading-3 tracking-normal mt-4 mb-4 py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none {{ Request::segment(2) === 'blogs' ? 'text-indigo-700' : 'text-gray-600' }}">
            <div class="flex items-center">
                <i class="fa-solid fa-gem"></i>
                <a href="{{ route('show.blog') }}" class="ml-2">&nbsp; Blogs</a>
            </div>
        </li>
        <li
            class="pl-6 cursor-pointer text-sm leading-3 tracking-normal mb-4 py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none {{ request()->is('admin/b/') ? 'text-indigo-700' : 'text-gray-600' }}">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-compass" width="20"
                    height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <polyline points="8 16 10 10 16 8 14 14 8 16" />
                    <circle cx="12" cy="12" r="9" />
                </svg>
                <a href="javascript:void(0)" class="ml-2">&nbsp; Performance</a>
            </div>
        </li>
        <li
            class="pl-6 cursor-pointer text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none {{ request()->is('admin/c/') ? 'text-indigo-700' : 'text-gray-600' }}">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-code" width="20"
                    height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <polyline points="7 8 3 12 7 16" />
                    <polyline points="17 8 21 12 17 16" />
                    <line x1="14" y1="4" x2="10" y2="20" />
                </svg>
                <a href="javascript:void(0)" class="ml-2">&nbsp; Deliverables</a>
            </div>
        </li>
    </ul>
</div>
