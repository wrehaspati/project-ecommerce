<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Table Item') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="px-10 py-5 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @livewire('data-users')
            </div>
        </div>
    </div>
</x-admin-layout>
