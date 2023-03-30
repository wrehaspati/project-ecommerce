<div class="h-full mb-20 overflow-hidden">
    <div class="category text-center mb-4">
        <h1 class="font-serif text-3xl mb-1">Category</h1>
        <p class="bg-gradient-to-r w-28 m-auto from-purple-400 to-pink-500 rounded-xl h-1 overflow-hidden">Z</p>
    </div>

    {{-- <div class="flex flex-row">
        <x-category-card/>
    </div> --}}
    <div class="swiper swiper-card w-[95%] ultra:justify-center mac:w-full mac:max-w-full pc:w-full">
        <div class="swiper-wrapper">
            @foreach ($Categories as $category)
                <x-category-card :title="$category->name" />
            @endforeach
        </div>
        <div class="pagination">
            <div class="swiper-button-prev ml-5"><img src="img/prev.svg" alt=""></div>
            <div class="swiper-button-next mr-5"><img src="img/next.svg" alt=""></div>
        </div>
    </div>
</div>
