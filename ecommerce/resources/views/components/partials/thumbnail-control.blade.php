@if (Str::contains($item->image, 'http'))
    {{ $item->image }}
@else
    {{ url('storage/images').'/'.$item->image }}
@endif