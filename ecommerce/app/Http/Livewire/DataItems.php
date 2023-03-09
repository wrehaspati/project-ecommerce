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

        $this->setAdditionalSelects(['items.id as id', 'items.general_description as general_description', 'items.display_price as display_price']);

        $this->setTableWrapperAttributes([
            'default' => false,
            'class' => 'shadow border-b border-gray-200 dark:border-gray-700 sm:rounded-lg added these classes',
          ]);

        $this->setTdAttributes(function(Column $column, $row, $columnIndex, $rowIndex) {
            if ($column->isField('name')) {
              return [
                'default' => false,
                'class' => 'px-6 py-4 text-sm font-medium dark:text-white',
              ];
            }
        
            return [];
          });
        
        $this->setDefaultSort('id', 'desc');

        $this->setConfigurableAreas([
            'toolbar-left-end' => 'admin.partials.insert-button',
          ]);
    }

    public function deleteSelected()
    {
        foreach($this->getSelected() as $item)
        {
            $image = Image::where('item_id', $item)->value('image');

            if($image != ''):
                Storage::disk('public')->delete('images/'.$image);
                Image::destroy($item);
            endif;

            Item::destroy($item);
        }
    }

    public function columns(): array
    {
        return [
            ImageColumn::make('Image')
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
            Column::make("Product Information", 'name')
                ->sortable()
                ->searchable()
                ->view('admin/partials/database-item-data')
                ->collapseOnTablet(),
            Column::make("Display Price", "display_price")
                ->format( function($value, $row, Column $column){
                    return 'Rp. '.number_format($row->display_price,0,',','.');
                })
                ->sortable()
                ->searchable()
                ->collapseOnTablet(),
            // Column::make("General Description", "general_description")
            //     ->sortable()
            //     ->searchable()
            //     ->collapseOnTablet(),
            Column::make("Created at", "created_at")
                ->sortable()
                ->collapseOnTablet(),
            Column::make("Updated at", "updated_at")
                ->sortable()
                ->collapseOnTablet(),
        ];
    }
}
