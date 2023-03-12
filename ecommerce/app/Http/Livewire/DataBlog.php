<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\BlogPost;

class DataBlog extends DataTableComponent
{
    protected $model = BlogPost::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');

        $this->setConfigurableAreas([
            'toolbar-left-end' => ['admin.partials.insert-button',['route' => 'blogs.create', 'title' => 'Add New Blog'],],
          ]);
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("title")
            ->sortable(),
            Column::make("slug")
            ->sortable(),
            Column::make("description")
            ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
