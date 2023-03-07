<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Rappasoft\LaravelLivewireTables\Views\Columns\ImageColumn;

class DataImages extends DataTableComponent
{
    protected $model = Image::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setBulkActions([
            'deleteSelected' => 'Delete',
        ]);;
    }

    public function deleteSelected()
    {
        foreach($this->getSelected() as $item)
        {
            $image = Image::find($item);
            Storage::disk('public')->delete('images/'.$image->image);
            
            Image::destroy($image->id);
        }
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            ImageColumn::make('Preview')
                    ->location(function($row)
                    {
                        $image = $row->image;
                        if(Str::contains($image, 'http')):
                            return $image;
                        else:
                            return url('storage/images/'.$image);
                        endif;
                    } 
                    )->attributes(fn() => [
                        'alt' => 'image',
                        'style' => "width:10rem !important",
                    ]),
            Column::make("Images Name", "image")
                ->sortable(),
            Column::make("Id Item", "item_id")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
