@if (session()->has('status'))
<div class="flex justify-center w-full absolute top-40 right-0 z-10" x-show="showMessage" x-data="{ showMessage: true }" x-init="setTimeout(() => showMessage = false, 3000)">
    <div class="flex items-center justify-between max-w-xl min-w-[22rem] p-4 bg-white border rounded-md shadow-sm">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-green-500" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd" />
            </svg>
            <p class="ml-3 text-sm font-bold text-green-600">{{ session()->get('status') }}</p>
        </div>
        <span @click="showMessage = false" class="inline-flex items-center cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class=" w-4 h-4 text-gray-600" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </span>
    </div>
</div>
@endif