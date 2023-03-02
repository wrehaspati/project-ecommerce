<div class="grid grid-cols-2 gap-4 md:grid-cols-1 sticky top-5 " x-data="imageData()">
    <label for="image_0" class="cursor-pointer">
        <img src="
        @if($imaging)
            {{ $imaging->temporaryUrl() }}
        @else
            @foreach ($images->slice(0, 1) as $image)
                @include('admin.partials.local-image-control')   
            @endforeach
        @endif
        "
            alt="Images" class="aspect-square w-full rounded-xl object-cover" x-show="previewUrl == ''" />
        <img :src="previewUrl" x-show="previewUrl !== ''" alt="Images" class="aspect-square w-full rounded-xl object-cover" />
    </label>
    <input type="file" name="image_0" id="image_0" class="hidden">
    <div class="grid grid-cols-4 gap-4 lg:mt-4">
        <?php $i=1; ?>
        @foreach ($images_variant as $image_variant)
            <label for="image_{{ $i }}" class="cursor-pointer">
                <img src="
            @foreach ($images_variant->slice(0, 1) as $image)
                @include('admin.partials.local-image-control')
            @endforeach "
                    alt="Images"
                    class="aspect-square w-full rounded-xl object-cover" />
            </label>
            <input type="file" name="image_{{ $i }}" id="image_{{ $i }}" class="hidden" wire:model="imaging">
                <?php $i++; ?>
        @endforeach
    </div>
</div>