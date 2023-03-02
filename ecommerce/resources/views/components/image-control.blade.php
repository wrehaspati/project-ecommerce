<img src="
    @if ($images->image) 
        @if (Str::contains($images->image, 'http'))
            {{ $images->image }}
        @else
            {{ url('storage/images').'/'.$images->image }}
        @endif
    @endif
" {{ $attributes }} />
