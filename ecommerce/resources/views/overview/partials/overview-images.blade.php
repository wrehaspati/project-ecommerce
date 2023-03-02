<div class="grid grid-cols-2 gap-4 md:grid-cols-1 sticky top-5 ">
        @foreach ($item->image as $images)
            @if($loop->first) 
                <x-image-control :$images alt="Images" class="aspect-square w-full rounded-xl object-cover" />
            @else
                @if($loop->iteration == 2)
                    <div class="grid grid-cols-4 gap-4 lg:mt-4">
                @endif
                    <x-image-control :$images alt="Images" class="aspect-square w-full rounded-xl object-cover" />
                @if($loop->last)
                    </div>
                @endif
            @endif
        @endforeach
</div>
