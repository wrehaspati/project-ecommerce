<div style="min-height: 700px" class="absolute lg:relative w-64 h-screen shadow bg-gray-100 hidden lg:block">
    <div class="h-16 w-full flex items-center px-8 pt-1">
        {{-- <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_icons-svg1.svg" alt="logo"> --}}
        <x-application-logo class="block w-full w-auto fill-current text-gray-800" />
    </div>
    <ul class="py-4 pl-5">
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
    </ul>
</div>
