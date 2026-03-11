<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Report;

class ReportTable extends DataTableComponent
{
    protected $model = Report::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Img path", "img_path")
                ->sortable(),
            Column::make("User id", "user_id")
                ->sortable(),
            Column::make("Title", "title")
                ->sortable(),
            Column::make("Description", "description")
                ->sortable(),
            Column::make("Location", "location")
                ->sortable(),
            Column::make("State", "state")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
