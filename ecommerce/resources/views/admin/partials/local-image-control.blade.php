@if (isset($image->image)) 
    @if ($image->image)
        @if (Str::contains($image->image, 'http'))
            {{ $image->image }}
        @else
            {{ url('storage/images') . '/' . $image->image }}
        @endif
    @endif 
@else
    {{ url('storage/images/no-photos.png')}}
@endif