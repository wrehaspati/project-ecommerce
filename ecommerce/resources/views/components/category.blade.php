<a href="#"><div class="flex h-36 w-52 ml-5 bg-black-pale overflow-hidden group">
        <div style="background-image: url('img/model.jpeg')" {{ $attributes->merge(['class' => 'bg-cover group-hover:scale-105 cursor-pointer transition duration-300 w-full mix-blend-multiply  group-hover:shadow-black/25']) }}>
            <p class="border-t-2 border-l-2 border-red-800 w-5 h-5 m-3 transition-all group-hover:-translate-x-1 group-hover:-translate-y-1"></p>
            <p class="border-t-2 border-r-2 ml-44 -mt-9 border-red-800 w-5 h-5 transition-all group-hover:translate-x-0 group-hover:-translate-y-1"></p>
            <p class="border-b-2 border-l-2 border-red-800 w-5 h-5 mt-19 ml-3 transition-all group-hover:translate-x-0 group-hover:translate-y-1"></p>
            <p class="border-r-2 border-b-2 border-red-800 w-5 h-5 -mt-5 ml-44 transition-all group-hover:translate-x-0 group-hover:translate-y-1"></p>
            <p class="font-sans text-center -mt-20 text-2xl text-blue-600 transition-all duration-500 group-hover:-mt-34 group-hover:opacity-0">{{ $slot }}</p>
            <p class="text-center text-2xl mt-4 opacity-1 group-hover:opacity-100 transition-all duration-500">See More</p>
        </div>
    </div>
 </a>

