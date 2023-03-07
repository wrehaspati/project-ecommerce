<div class="flex">
    <div class="space-y-1">
        <div class="text-base leading-6 whitespace-nowrap">{{ $row->name }}</div>
        <div class="text-sm leading-4 whitespace-nowrap">
            {{-- @idr($row->display_price) --}}
            #Serial Code here
        </div>
        <div class="text-sm leading-4 font-medium"><span class="text-xs leading-4 text-gray-500">
                Description</span>
            <p>
                {{ Str::limit($row->general_description, 100) }}
            </p>
        </div>
    </div>
</div>
