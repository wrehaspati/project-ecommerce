<div wire:key="image_{{ $image->id }}">
    <label for="image_{{ $loop_count }}" class="cursor-pointer">
        <img src="
        @if ($image_preview) {{ $image_preview->temporaryUrl() }}
        @else
            @include('admin.partials.local-image-control')  
        @endif
        "
            alt="Images" class="aspect-square w-full rounded-xl object-cover"/>
    </label>
    <input type="file" name="image[{{ $loop_count }}]" id="image_{{ $loop_count }}" class="hidden" wire:model="image_preview"/>
    <input type="hidden" name="id_image[{{ $loop_count }}]" value="{{ $image->id }}"/>
    <div wire:loading>
        Processing...
    </div>
    @error('image_preview') <span class="error">{{ $message }}</span> @enderror
</div>
