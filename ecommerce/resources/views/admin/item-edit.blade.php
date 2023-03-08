<x-admin-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product Overview Edit') }}
        </h2>
    </x-slot> --}}

    <form action="{{ route('product.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name='id' value="{{ $item->id }}">
        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-scroll shadow-sm sm:rounded-lg max-h-[46rem]">
                    <div class="p-6 text-gray-900">

                        {{-- <nav aria-label="Breadcrumb">
                            <ol role="list"
                                class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">

                                <li>
                                    <div class="flex items-center">
                                        <a href="{{ url('/') }}"
                                            class="mr-2 text-sm font-medium text-gray-900">Homepage</a>
                                        <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor"
                                            aria-hidden="true" class="h-5 w-4 text-gray-300">
                                            <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                                        </svg>
                                    </div>
                                </li>

                                <li>
                                    <div class="flex items-center">
                                        <a href="{{ url('/') }}"
                                            class="mr-2 text-sm font-medium text-gray-900">Product</a>
                                        <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor"
                                            aria-hidden="true" class="h-5 w-4 text-gray-300">
                                            <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                                        </svg>
                                    </div>
                                </li>

                                <li class="text-sm">
                                    <div class="flex items-center">
                                        <a href="{{ url('/product/' . Str::slug($item->name)) }}" aria-current="page"
                                            class="font-medium text-gray-900">{{ $item->name }}</a>
                                        <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor"
                                            aria-hidden="true" class="h-5 w-4 text-gray-300">
                                            <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                                        </svg>
                                    </div>
                                </li>

                                <li>
                                    <div class="flex items-center">
                                        <a href=""
                                            class="mr-2 text-sm font-medium text-gray-500 hover:text-gray-600">Edit</a>
                                    </div>
                                </li>
                            </ol>
                        </nav> --}}


                        <div class="relative mx-auto max-w-screen-xl px-4 py-8">
                            <div class="grid grid-cols-1 items-start gap-8 md:grid-cols-2">
                                <div class="grid grid-cols-2 gap-4 md:grid-cols-1 sticky top-5 ">

                                        @foreach ($item->image as $image)
                                            @if($loop->first) 
                                                @livewire('image-upload', ['image' => $image, 'item_id' => $item->id,'loop_count' => $loop->iteration], key('image_'.$image->id))
                                            @else
                                                @if($loop->iteration == 2)
                                                    <div class="grid grid-cols-4 gap-4 lg:mt-4">
                                                @endif
                                                    @livewire('image-upload', ['image' => $image, 'item_id' => $item->id,'loop_count' => $loop->iteration], key('image_'.$image->id))
                                                @if($loop->last)
                                                    </div>
                                                @endif
                                            @endif
                                        @endforeach
                                </div>
                                <div class="sticky top-0">
                                    {{-- @include('overview.partials.pre-order') --}}

                                    <div class="mt-8 flex justify-between">
                                        <div class="max-w-[35ch] space-y-2">
                                            <h1 class="text-xl font-bold sm:text-2xl">
                                                <input
                                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                    id="grid-last-name" type="text"
                                                    placeholder="{{ $item->name }}" value="{{ $item->name }}"
                                                    name="name">
                                            </h1>

                                            {{-- @include('overview.partials.overview-rating') --}}

                                        </div>

                                        <p class="text-lg font-bold">
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="grid-last-name" type="text"
                                                placeholder="{{ $item->display_price }}"
                                                value="{{ $item->display_price }}" name="price">
                                        </p>
                                    </div>

                                    <div class="mt-4">
                                        <div class="prose max-w-none">
                                            <p>
                                                <textarea id="message" rows="4" name="description"
                                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                    placeholder="{{ $item->general_description }}">{{ $item->general_description }}</textarea>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="mt-8">
                                        @include('overview.partials.overview-color')

                                        @include('overview.partials.overview-size')

                                        <div class="mt-8 flex gap-4">

                                            <button type="submit"
                                                class="block rounded bg-green-600 px-5 py-3 text-xs font-medium text-white hover:bg-green-500">
                                                Save Changes
                                            </button>
                                            <button type="reset"
                                                class="block rounded bg-gray-500 px-5 py-3 text-xs font-medium text-white hover:bg-gray-600">
                                                Cancel or Reset
                                            </button>
                                            <a href="{{ url('admin/products') }}"
                                                class="block rounded bg-red-500 px-5 py-3 text-xs font-medium text-white hover:bg-gray-600">
                                                Back
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </form>

</x-admin-layout>

<script>
    function imageData() {
        return {
            previewUrl: "",
            updatePreview() {
                var reader,
                    files = document.getElementById("imagess").files;

                reader = new FileReader();

                reader.onload = e => {
                    this.previewUrl = e.target.result;
                };

                reader.readAsDataURL(files[0]);
            },
            clearPreview() {
                document.getElementById("thumbnail").value = null;
                this.previewUrl = "";
            }
        };
    }
</script>
