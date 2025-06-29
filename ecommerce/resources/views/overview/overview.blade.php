<x-app-layout>
    <x-slot name="header">  
        @include('overview.partials.overview-message')
    </x-slot>

    <div class="py-6 min-h-screen">
        <!-- Breadcrumbs -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center space-x-2 text-gray-400 text-sm">
                <a href="#" class="hover:underline hover:text-gray-600">Dashboard</a>
                <span>
                    <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </span>
                <a href="#" class="hover:underline hover:text-gray-600">Collections</a>
                <span>
                    <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </span>
                <span>{{ $item->name }}</span>
            </div>
        </div>
        <!-- ./ Breadcrumbs -->

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
            <div class="flex flex-col md:flex-row -mx-4">
                <div class="md:flex-1 px-4">
                    <div x-data="{ image: 1 }" x-cloak>
                        <div class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4">
                            @php
                                $iteration = 1;
                            @endphp
                            @foreach ($item->image as $images)
                                <div x-show="image === {{ $iteration }}"
                                    class="h-64 md:h-80 inline-block rounded-lg bg-gray-100 mb-4 flex items-center justify-center object-fill"
                                    onmousemove="zoom(event)"
                                    style="cursor:zoom-in; background-image: url({{ url('storage/images') . '/' . $images->image }})">
                                    <div class="w-full h-full bg-gray-100 hover:opacity-0 ">
                                        <img class="object-contain h-full w-full"
                                            src="
                                          @if ($images->image) @if (Str::contains($images->image, 'http'))
                                                  {{ $images->image }}
                                              @else
                                                  {{ url('storage/images') . '/' . $images->image }} @endif
                                          @endif
                                      " />
                                    </div>
                                </div>
                                @php
                                    $iteration++;
                                @endphp
                            @endforeach
                            {{-- <div x-show="image === 1"
                                    class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                                    <span class="text-5xl">1</span>
                                </div>

                                <div x-show="image === 2"
                                    class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                                    <span class="text-5xl">2</span>
                                </div>

                                <div x-show="image === 3"
                                    class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                                    <span class="text-5xl">3</span>
                                </div>

                                <div x-show="image === 4"
                                    class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                                    <span class="text-5xl">4</span>
                                </div> --}}
                        </div>

                        <div class="flex -mx-2 mb-4">
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($item->image as $images)
                                {{-- <template x-for="i in 4"> --}}
                                <div class="flex px-2">
                                    <button x-on:click="image = {{ $i }}"
                                        :class="{ 'ring-2 ring-indigo-300 ring-inset': image === {{ $i }} }"
                                        class="relevant focus:outline-none {{-- w-full --}} rounded-lg h-24 md:h-32 bg-gray-100 flex items-center justify-center">
                                        <span x-text="{{ $i }}" class="text-2xl absolute text-white"></span>
                                        <img class="object-cover h-full w-full rounded-lg"
                                            src="
                                                @if ($images->image) @if (Str::contains($images->image, 'http'))
                                                        {{ $images->image }}
                                                    @else
                                                        {{ url('storage/images') . '/' . $images->image }} @endif
                                                @endif
                                            " />
                                    </button>
                                </div>
                                {{-- </template> --}}
                                @php
                                    $i++;
                                @endphp
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="md:flex-1 px-4">
                    <h2 class="mb-2 leading-tight tracking-tight font-bold text-gray-800 text-2xl md:text-3xl">
                        {{ $item->name }}</h2>
                    <p class="text-gray-500 text-sm">By
                        <a href="{{ route('contact') }}" class="{{-- text-indigo-600 --}} text-yellow-500 hover:underline">
                            {{ __('Sunaka Workshop') }}
                        </a>
                    </p>

                    <div class="flex items-center space-x-4 my-4">
                        <div>
                            <div class="rounded-lg {{-- bg-gray-100 --}} flex py-2 px-3">
                                <span class="{{-- text-indigo-400 --}} text-yellow-400 mr-1 mt-1">Rp.</span>
                                <span
                                    class="font-bold {{-- text-indigo-600 --}} text-yellow-500 text-3xl">@idr($item->display_price)</span>
                            </div>
                        </div>
                        <div class="flex-1">
                            <p class="text-green-500 text-xl font-semibold">Save 12%</p>
                            <p class="text-gray-400 text-sm">Inclusive of all Taxes.</p>
                        </div>
                    </div>

                    <p class="text-gray-500">{{ $item->general_description }}</p>

                    <div class="flex py-4 space-x-4">
                        <div class="relative">
                            <div
                                class="text-center left-0 pt-2 right-0 absolute block text-xs uppercase text-gray-400 tracking-wide font-semibold">
                                Qty</div>
                            <select style="background: none !important;"
                                class="cursor-pointer appearance-none rounded-xl border border-gray-200 pl-4 pr-8 h-12 flex items-end pb-1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>

                            <svg class="w-5 h-5 text-gray-400 absolute right-0 bottom-0 mb-2 mr-2"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                            </svg>
                        </div>
                        <form action="{{ route('cart.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="item_id" value="{{ $item->id }}">
                            <button type="submit"
                                class="h-12 px-6 py-2 font-semibold rounded-xl {{-- bg-indigo-600 --}} bg-amber-500 {{-- hover:bg-indigo-500 --}} hover:bg-amber-400 text-white">
                                Add to Cart
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function zoom(e) {
            var zoomer = e.currentTarget;
            e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
            e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
            x = offsetX / zoomer.offsetWidth * 100
            y = offsetY / zoomer.offsetHeight * 100
            zoomer.style.backgroundPosition = x + '% ' + y + '%';
        }
    </script>
</x-app-layout>
