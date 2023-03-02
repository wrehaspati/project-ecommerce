@if ($image->image) 
    @if (Str::contains($image->image, 'http'))
        {{ $image->image }}
    @else
        {{ url('storage/images') . '/' . $image->image }}
    @endif
@endif 