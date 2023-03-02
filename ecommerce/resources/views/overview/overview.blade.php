<x-branch-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product Overview') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-scroll shadow-sm sm:rounded-lg max-h-[46rem]">
                <div class="p-6 text-gray-900">
                    @include('overview.partials.overview-breadcrumb')
                    <div class="relative mx-auto max-w-screen-xl px-4 py-8">
                        <div class="grid grid-cols-1 items-start gap-8 md:grid-cols-2">
                            @include('overview.partials.overview-images')

                            <div>
                                {{-- @include('overview.partials.pre-order') --}}

                                <div class="mt-8 flex justify-between">
                                    <div class="max-w-[35ch] space-y-2">
                                        <h1 class="text-xl font-bold sm:text-2xl">
                                            {{ $item->name }}
                                        </h1>

                                        {{-- @include('overview.partials.overview-rating') --}}

                                    </div>

                                    <p class="text-lg font-bold">@idr($item->display_price)</p>
                                </div>

                                <div class="mt-4">
                                    <div class="prose max-w-none">
                                        <p>
                                            {{ $item->general_description }}
                                        </p>
                                    </div>

                                    <button class="mt-2 text-sm font-medium underline">Read More</button>
                                </div>

                                <form class="mt-8">
                                    @include('overview.partials.overview-color')

                                    @include('overview.partials.overview-size')

                                    <div class="mt-8 flex gap-4">
                                        <div>
                                            <label for="quantity" class="sr-only">Qty</label>

                                            <input type="number" id="quantity" min="1" value="1"
                                                class="w-12 rounded border-gray-200 py-3 text-center text-xs [-moz-appearance:_textfield] [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none" />
                                        </div>

                                        <button type="submit"
                                            class="block rounded bg-green-600 px-5 py-3 text-xs font-medium text-white hover:bg-green-500">
                                            Add to Cart
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-branch-layout>
