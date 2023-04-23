{{-- new carousel --}}

{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" /> --}}
<style>
    .data-\[te-carousel-fade\]\:opacity-100[data-te-carousel-fade] {
        opacity: 1;
    }
    .data-\[te-carousel-fade\]\:z-\[1\][data-te-carousel-fade] {
        z-index: 1;
    }
    .data-\[te-carousel-fade\]\:opacity-0[data-te-carousel-fade] {
        opacity: 0;
    }
    .data-\[te-carousel-fade\]\:z-0[data-te-carousel-fade] {
        z-index: 0;
    }
    .ease-in-out {
        transition-timing-function: cubic-bezier(.4,0,.2,1);
    }
    .duration-\[600ms\] {
        transition-duration: .6s;
    }
    .\!block {
        display: block!important;
    }
    .\!opacity-100 {
        opacity: 1!important;
    }
    .opacity-50 {
        opacity: .5;
    }
</style>

<div id="carouselExampleCrossfade" class="relative" data-te-carousel-init data-te-carousel-slide>
    <div class="absolute inset-x-0 bottom-[-1.4rem] md:bottom-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
        data-te-carousel-indicators>
        <div class="hidden md:block">
            {{-- buttons --}}
            <button type="button" data-te-target="#carouselExampleCrossfade" data-te-slide-to="0" data-te-carousel-active
                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-te-target="#carouselExampleCrossfade" data-te-slide-to="1"
                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                aria-label="Slide 2"></button>
            {{-- buttons --}}
        </div>
    </div>
    <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
        {{-- images --}}
        <div class="relative float-left -mr-[100%] w-full h-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
            data-te-carousel-fade data-te-carousel-item data-te-carousel-active>
            <img src="img/buy.png" class="block w-full" alt="none" />
        </div>
        <div class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
            data-te-carousel-fade data-te-carousel-item>
            <img src="img/many.png" class="block w-full" alt="none" />
        </div>
        {{-- end images --}}
    </div>
    <div class="hidden md:block">
        <button
            class="absolute top-0 bottom-0 left-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
            type="button" data-te-target="#carouselExampleCrossfade" data-te-slide="prev">
            <span class="inline-block h-8 w-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </span>
            <span
                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
        </button>
        <button
            class="absolute top-0 bottom-0 right-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
            type="button" data-te-target="#carouselExampleCrossfade" data-te-slide="next">
            <span class="inline-block h-8 w-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </span>
            <span
                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
        </button>
    </div>
</div>
<script src="{{ url('js/homepage/tw-elements.umd.min.js') }}"></script>
