{{-- <div id="carouselExampleDark" class="carousel carousel-dark slide group overflow-hidden mb-10">
    <div class="carousel-indicators transistion duration-200 translate-y-11 group-hover:-translate-y-1">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="img/Many.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
        <img src="img/buy.png" class="d-block w-100" alt="...">
    </div>
    </div>
    <button class="carousel-control-prev -translate-x-36 transition ease-out group-hover:duration-200 group-hover:-translate-x-12 hover:text-black" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next translate-x-36 transition ease-out group-hover:duration-200 group-hover:translate-x-12  hover:text-white" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
    </button>
</div> --}}
<div class="mx-auto">
	<div id="default-carousel" class="relative" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="overflow-hidden relative z-1 handphone:h-32 tablet:h-48">
            <!-- Item 1 -->
            <div class="hidden transition-all duration-700 ease-in-out" data-carousel-item>
                <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                <img src="img/many.png" class="flex absolute tablet:object-contain handphone:object-fill laptop:object-cover handphone:h-full w-full " alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden transition-all duration-700 ease-in-out w-full" data-carousel-item>
                <img src="img/buy.png" class="flex absolute tablet:object-contain handphone:object-fill laptop:object-cover handphone:h-full w-full" alt="...">
            </div>
        </div>
        {{-- <!-- Slider indicators -->
        <div class="flex absolute bottom-10 left-1/2 z-30 space-x-3 -translate-x-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        </div> --}}
        <!-- Slider controls -->
        <button type="button" class="flex absolute handphone:top-[37.8%] left-0 z-1 justify-center items-center px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="hidden">Previous</span>
            </span>
        </button>
        <button type="button" class="flex absolute handphone:top-[35.5%] right-0 z-1 justify-center items-center px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="hidden">Next</span>
            </span>
        </button>
    </div>
</div>