<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
namespace App\Http\Livewire;

use App\Models\Item;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;


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
            Item::destroy($item);
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
