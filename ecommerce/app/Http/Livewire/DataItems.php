<?php

namespace App\Http\Livewire;

use App\Models\Image;
use App\Models\Item;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\ImageColumn;


class DataItems extends DataTableComponent
{
    protected $model = Item::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
        ->setTableRowUrl(function($row) {
            $raw = Item::find($row);
            
            foreach($raw as $object):
                $name = $object->name;
            endforeach;

            return route('product.edit', Str::slug($name));
        });
        $this->setBulkActions([
            'deleteSelected' => 'Delete',
        ]);
        
    }

    public function deleteSelected()
    {
        foreach($this->getSelected() as $item)
        {
            if($image = Image::where('item_id', $item)):
                Storage::disk('public')->delete('images/'.$image->image);
            endif;
            
            Image::destroy($image->id);
        }
    }

    public function columns(): array
    {
        return [
            Column::make("Id")
                ->sortable()
                ->searchable(),
            Column::make("Name")
                ->sortable()
                ->searchable(),
            Column::make("Display Price", "display_price")
                ->format( function($value, $row, Column $column){
                    return 'Rp. '.number_format($row->display_price,0,',','.');
                }),
            ImageColumn::make('Thumbnail')
                ->location(function($row)
                {
                    $image = Image::where('item_id', $row->id)->value('image');
                    if(Str::contains($image, 'http')):
                        return $image;
                    else:
                        return url('storage/images/'.$image);
                    endif;
                } 
                )->attributes(fn() => [
                    'alt' => 'image',
                ]),
            Column::make("General Description", "general_description")
                ->sortable()
                ->searchable()
                ->collapseOnTablet(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
