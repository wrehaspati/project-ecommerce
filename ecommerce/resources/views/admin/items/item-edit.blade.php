<x-admin-layout>
    <form action="{{ route('products.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        {{-- <input type="hidden" name='id' value="{{ $item->id }}"> --}}
        <div class="py-4">
            <div class=" mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="relative mx-auto px-4 py-8">
                            <div class="grid grid-cols-1 items-start gap-8 md:grid-cols-2">
                                <div class="grid grid-cols-2 gap-4 md:grid-cols-1 sticky top-5">
                                    <div
                                        class="grid grid-cols-4 gap-4 lg:mt-4 justify-center pb-10 border-b-2 border-gray-700 text-gray-700">
                                        @php
                                            $empty_images = count($item->image);
                                        @endphp
                                        @foreach ($item->image as $image)
                                            <div
                                                class="bg-gray-200 min-h-[9rem] rounded-xl relative flex justify-center h-full group">
                                                <label for=""
                                                    class="absolute self-center text-gray-800 font-semibold z-50 text-lg">Replace</label>
                                                <div class="hover:opacity-10 z-50 static">
                                                    @livewire('image-upload', ['image' => $image, 'item_id' => $item->id, 'loop_count' => $loop->iteration, 'type' => 'update'], key('image_' . $image->id))    
                                                </div>
                                                <a href="{{ route('rmimg', $image->id) }}" class="absolute z-[60] bg-red-500 py-2 px-4 rounded bottom-[-2.2rem] text-xs font-medium text-white hover:bg-gray-600 opacity-0 group-hover:opacity-100">Delete</a>
                                            </div>

                                            @if ($empty_images < 4 and $loop->last)
                                                @for ($x = $empty_images + 1; $x <= 4; $x++)
                                                    <div
                                                        class="w-full h-full flex justify-center rounded-xl text-center m-auto hover:bg-gray-500 hover:text-white transition-colors">
                                                        {{-- <i class="fi fi-ss-add text-4xl self-center"></i> --}}
                                                        @livewire('image-upload', ['image' => null, 'item_id' => $item->id, 'loop_count' => $x, 'type' => 'add'], key('image_' . $image->id))
                                                    </div>
                                                @endfor
                                            @endif
                                        @endforeach
                                        @if ($empty_images == 0)
                                            @for ($x = $empty_images + 1; $x <= 4; $x++)
                                                <div
                                                    class="w-full h-full min-h-[9rem] flex justify-center rounded-xl text-center m-auto hover:bg-gray-500 hover:text-white transition-colors">
                                                    {{-- <i class="fi fi-ss-add text-4xl self-center"></i> --}}
                                                    @livewire('image-upload', ['image' => null, 'item_id' => $item->id, 'loop_count' => $x, 'type' => 'add'], key('image_' . $image->id))
                                                </div>
                                            @endfor
                                        @endif
                                    </div>
                                    <div class="static flex mt-4">
                                        <label for="sku" class="absolute self-center pl-2 pb-1">SKU</label>
                                        <input
                                            class="pl-16 appearance-none block w-full text-gray-700 border-b-2 border-0 focus:border-b-indigo-500 focus:rounded font-bold"
                                            id="sku" type="text"
                                            placeholder="SKU: {{ $item->sku }} (Default)" value="{{ $item->sku }}"
                                            name="price">
                                    </div>
                                </div>
                                <div class="sticky top-0">
                                    <div class="mt-8">
                                        <div class="static flex">
                                            <label for="name" class="absolute self-center pl-2 pb-1">Name</label>
                                            <input
                                                class="pl-16 appearance-none block w-full text-gray-700 border-b-2 border-0 focus:border-b-indigo-500 focus:rounded font-bold"
                                                id="name" type="text"
                                                placeholder="Name: {{ $item->name }} (Default)"
                                                value="{{ $item->name }}" name="name">
                                        </div>
                                        <div class="static flex mt-4">
                                            <label for="price" class="absolute self-center pl-2 pb-1">Price</label>
                                            <input
                                                class="pl-16 appearance-none block w-full text-gray-700 border-b-2 border-0 focus:border-b-indigo-500 focus:rounded font-bold"
                                                id="price" type="text"
                                                placeholder="Price: {{ $item->display_price }} (Default)"
                                                value="{{ $item->display_price }}" name="price">
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <div class="prose max-w-none">
                                            <p>
                                                <textarea id="message" rows="15" name="description"
                                                    class="appearance-none block w-full text-gray-700 border-b-2 border-0 focus:border-b-indigo-500  focus:rounded"
                                                    placeholder="{{ $item->general_description }}">{{ $item->general_description }}</textarea>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="mt-8">
                                        <div class="mt-8 flex gap-4">

                                            <button type="submit"
                                                class="block rounded bg-green-600 px-5 py-3 text-xs font-medium text-white hover:bg-green-500">
                                                Save Changes
                                            </button>
                                            <a href=""
                                                class="block rounded bg-gray-500 px-5 py-3 text-xs font-medium text-white hover:bg-gray-600">
                                                Cancel or Reset
                                            </a>
                                            <a href="{{ url('admin/products') }}"
                                                class="block rounded bg-red-500 px-5 py-3 text-xs font-medium text-white hover:bg-gray-600">
                                                Back
                                            </a>
                                            <a class="rounded bg-indigo-500 px-5 py-3 text-xs font-medium text-white hover:bg-gray-600"
                                                href="{{ url('products/' . Str::slug($item->name)) }}">Preview
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
