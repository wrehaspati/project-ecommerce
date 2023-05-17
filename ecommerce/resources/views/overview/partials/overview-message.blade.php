@if (session()->has('status'))
<div class="flex {{-- justify-center --}} w-full fixed bottom-0 right-0 z-50" x-show="showMessage" x-data="{ showMessage: true }" x-init="setTimeout(() => showMessage = false, 3000)">
    <div class="flex items-center justify-between max-w-xl min-w-[22rem] {{-- p-4 bg-white --}} border rounded-md shadow-sm">
        <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4 min-w-full" role="alert">
            {{-- <p class="font-bold">Be Warned</p> --}}
            <p>{{ session()->get('status') }}</p>
        </div>
        {{-- <span @click="showMessage = false" class="inline-flex items-center cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class=" w-4 h-4 text-gray-600" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </span> --}}
    </div>
</div>
@endif