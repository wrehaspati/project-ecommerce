<x-branch-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <i class="fa-solid fa-cart-shopping"></i>
            {{ __('My Cart') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="mx-auto sm:px-6 lg:px-8">
                <div class="px-10 py-5 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    @livewire('temporary-data')
                </div>
            </div>
        </div>
    </div>
</x-branch-layout>
