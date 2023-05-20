@if ($type == 'update') 
    <div wire:key="image_{{ $loop_count }}" class="h-full">
        <label for="image_{{ $loop_count }}" class="cursor-pointer h-full">
            <img src="
            @if ($image_preview) {{ $image_preview->temporaryUrl() }}
            @else
                @include('admin.partials.local-image-control')  
            @endif
            "
                alt="_unable to load" class="aspect-square w-full h-full rounded-xl object-cover"/>
        </label>
        <input type="file" name="image[{{ $loop_count }}]" id="image_{{ $loop_count }}" class="hidden" wire:model="image_preview"/>
        <input type="hidden" name="id_image[{{ $loop_count }}]" value="<?php if (isset($image->id)): echo $image->id; endif; ?>"/>
        <div wire:loading>
            Processing...
        </div>
        {{-- @error('image_preview') <span class="error">{{ $message }}</span> @enderror --}}
    </div>
@endif
@if ($type == 'add')
    <div wire:key="image_{{ $loop_count }}" class="w-full h-full flex justify-center rounded-xl text-center m-auto hover:bg-gray-500 hover:text-white transition-colors">
        <label for="image_{{ $loop_count }}" class="cursor-pointer w-full h-full flex justify-center">
            @if ($image_preview)
            <img src="{{ $image_preview->temporaryUrl() }}"
                alt=" unable to load" class="aspect-square w-full h-full rounded-xl object-cover"/>
            @else
            <i class="fi fi-ss-add text-4xl self-center"></i>
            @endif
        </label>
        <input type="file" name="image[{{ $loop_count }}]" id="image_{{ $loop_count }}" class="hidden" wire:model="image_preview"/>
        <input type="hidden" name="id_image[{{ $loop_count }}]" value="<?php if (isset($image->id)): echo $image->id; endif; ?>"/>
        <div wire:loading>
            Processing...
        </div>
        {{-- @error('image_preview') <span class="error">{{ $message }}</span> @enderror --}}
    </div>    
@endif
