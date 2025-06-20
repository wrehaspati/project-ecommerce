<nav class="h-16 flex items-center lg:items-stretch justify-end lg:justify-between bg-white shadow relative">
    <div class="hidden lg:flex w-full pr-6">
        <div class="w-1/2 h-full hidden lg:flex items-center pl-6 pr-24">
            <div class="relative w-full">
                <div class="text-gray-600 absolute ml-4 inset-0 m-auto w-4 h-4">
                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_icons-svg3.svg"
                        alt="Search">
                </div>
                <input
                    class="border border-gray-100 focus:outline-none focus:border-indigo-700 rounded w-full text-sm text-gray-600 placeholder-gray-600 bg-gray-100 pl-12 py-2"
                    type="text" placeholder="Search" />
            </div>
        </div>
        <div class="w-1/2 hidden lg:flex">
            <div class="w-full flex items-center pl-8 justify-end">
                <div class="h-full w-20 flex items-center justify-center border-r border-l">
                    <button aria-label="open notifications"
                        class="relative cursor-pointer text-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-800">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_icons-svg5.svg"
                            alt="notifications">
                        <div
                            class="w-2 h-2 rounded-full bg-red-400 border border-white absolute inset-0 mt-1 mr-1 m-auto">
                        </div>
                    </button>
                </div>
                <div class="h-full w-20 flex items-center justify-center border-r mr-4 cursor-pointer text-gray-600 ">
                    <button aria-label="open chats" class="focus:outline-none focus:ring-2 focus:ring-gray-800">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_icons-svg4.svg"
                            alt="chats">
                    </button>
                </div>
                <div class="flex items-center relative cursor-pointer" onclick="dropdownHandler(this)">
                    <div class="rounded-full">
                        <ul class="p-2 w-full border-r bg-white absolute rounded left-0 shadow mt-12 sm:mt-16 hidden">
                            <li
                                class="flex w-full justify-between text-gray-600 hover:text-indigo-700 cursor-pointer items-center">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user"
                                        width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <circle cx="12" cy="7" r="4" />
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                    </svg>
                                    <a href="javascript:void(0)" class="text-sm ml-2">My Profile</a>
                                </div>
                            </li>
                            <li
                                class="flex w-full justify-between text-gray-600 hover:text-indigo-700 cursor-pointer items-center mt-2">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout"
                                        width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <path
                                            d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                                        <path d="M7 12h14l-3 -3m0 6l3 -3" />
                                    </svg>
                                    <a href="javascript:void(0)" class="text-sm ml-2">Sign out</a>
                                </div>
                            </li>
                        </ul>
                        <div class="relative select-none">
                            <div class="rounded-full h-10 w-10 bg-green-200 text-center leading-[2.5rem] font-black text-xl">
                                {{ Str::limit(Auth::user()->name, 1, $end = '') }}
                            </div>
                            {{-- <img class="rounded-full h-10 w-10 object-cover"
                                src="https://tuk-cdn.s3.amazonaws.com/assets/components/sidebar_layout/sl_1.png"
                                alt="display avatar" role="img" /> --}}
                            <div
                                class="w-2 h-2 rounded-full bg-green-400 border border-white absolute inset-0 mb-0 mr-0 m-auto">
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-800 text-sm mx-3">{{ Auth::user()->name }}</p>
                    <button aria-label="open profile options"
                        class="cursor-pointer text-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-600">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_icons-svg6.svg"
                            alt="down">
                    </button>
                </div>
            </div>
        </div>
    </div>
    <button aria-label="Main Menu"
        class="text-gray-600 mr-8 visible lg:hidden relative focus:outline-none focus:ring-2 focus:ring-gray-600 "
        onclick="sidebarHandler(true)" id="menu">
        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_header_and_icons-svg7.svg" alt="toggler">
    </button>
</nav>
