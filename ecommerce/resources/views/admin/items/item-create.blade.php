{{-- <x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Insert Item') }}
        </h2>
    </x-slot>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <div class="" x-data="imageData()">
                            <div x-show="previewUrl == ''">
                                <x-input-label for="thumbnail" :value="__('Upload Image')" />
                                <input type="file" name="thumbnail" id="thumbnail" class="pt-2"
                                    @change="updatePreview()">
                            </div>
                            <div x-show="previewUrl !== ''">
                                <img :src="previewUrl" alt="" class="rounded">
                                <div class="">
                                    <button type="button" class="block font-medium text-sm text-gray-700" @click="clearPreview()">Change</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                                required autofocus autocomplete="name" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <div>
                            <x-input-label for="price" :value="__('Price')" />
                            <x-text-input id="price" name="price" type="text" class="mt-1 block w-full"
                                required autofocus autocomplete="price" />
                            <x-input-error class="mt-2" :messages="$errors->get('price')" />
                        </div>
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <div>
                            <x-input-label for="description" :value="__('Description')" />
                            <x-text-input id="description" name="description" type="text" class="mt-1 block w-full"
                                required autofocus autocomplete="description" />
                            <x-input-error class="mt-2" :messages="$errors->get('description')" />
                        </div>
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-admin-layout> --}}

<x-admin-layout>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- @method('PATCH') --}}
        <div class="py-4">
            <div class=" mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="relative mx-auto px-4 py-8">
                            <div class="grid grid-cols-1 items-start gap-8 md:grid-cols-2">
                                <div class="grid grid-cols-2 gap-4 md:grid-cols-1 sticky top-5">
                                    <div
                                        class="grid grid-cols-4 gap-4 lg:mt-4 justify-center pb-10 border-b-2 border-gray-700 text-gray-700">
                                            @for ($x = 1; $x <= 4; $x++)
                                                <div
                                                    class="group w-full h-full min-h-[9rem] flex justify-center rounded-xl text-center m-auto hover:bg-gray-500 hover:text-white transition-colors relative">
                                                    {{-- <i class="fi fi-ss-add text-4xl self-center"></i> --}}
                                                    @livewire('image-upload', ['image' => null, 'item_id' => null, 'loop_count' => $x, 'type' => 'add'], key('image_'.$x))
                                                    <label class="absolute z-[60] bg-blue-500 py-2 px-4 rounded bottom-[-2.2rem] text-xs font-medium text-white opacity-0 group-hover:opacity-100">Add or Replace</label>
                                                </div>
                                            @endfor
                                    </div>
                                    <div class="static flex mt-4">
                                        <label for="sku" class="absolute self-center pl-2 pb-1">SKU</label>
                                        <input
                                            class="pl-16 appearance-none block w-full text-gray-700 border-b-2 border-0 focus:border-b-indigo-500 focus:rounded font-bold"
                                            id="sku" type="text"
                                            placeholder="(required)" value=""
                                            required
                                            name="sku">
                                    </div>
                                </div>
                                <div class="sticky top-0">
                                    <div class="mt-8">
                                        <div class="static flex">
                                            <label for="name" class="absolute self-center pl-2 pb-1">Name</label>
                                            <input
                                                class="pl-16 appearance-none block w-full text-gray-700 border-b-2 border-0 focus:border-b-indigo-500 focus:rounded font-bold"
                                                id="name" type="text"
                                                placeholder="(required)"
                                                required
                                                value="" name="name">
                                        </div>
                                        <div class="static flex mt-4">
                                            <label for="price" class="absolute self-center pl-2 pb-1">Price</label>
                                            <input
                                                class="pl-16 appearance-none block w-full text-gray-700 border-b-2 border-0 focus:border-b-indigo-500 focus:rounded font-bold"
                                                id="price" type="text"
                                                placeholder="(required)(rupiah)"
                                                required
                                                value="" name="price">
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <div class="prose max-w-none">
                                            <p>
                                                <textarea id="message" rows="15" name="description"
                                                    class="appearance-none block w-full text-gray-700 border-b-2 border-0 focus:border-b-indigo-500  focus:rounded"
                                                    placeholder="Description: (required)" required></textarea>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="mt-8">
                                        <div class="mt-8 flex gap-4">

                                            <button type="submit"
                                                class="block rounded bg-green-600 px-5 py-3 text-xs font-medium text-white hover:bg-green-500">
                                                Save Items
                                            </button>
                                            <a href=""
                                                class="block rounded bg-gray-500 px-5 py-3 text-xs font-medium text-white hover:bg-gray-600">
                                                Cancel or Reset
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
