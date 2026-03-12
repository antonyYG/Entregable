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
            Column::make("Imagen", "img_path")
            ->format(function ($value) {
                $url = asset('storage/'.$value);
                return '<img src="'.$url.'" width="80" class="rounded cursor-pointer hover:opacity-80 transition-opacity"
                            onclick="openImageModal(\''.$url.'\')">';
            })
            ->html(),
            Column::make("User id", "user_id")
                ->sortable(),
            Column::make("Description", "description")
                ->sortable(),
            Column::make("Location", "location")
                ->sortable(),
            Column::make("State", "state")
            ->format(function ($value, $row) {
                return view('livewire.tables.report-state', [
                    'state' => $value,
                    'id' => $row->id
                ]);
            }),
            Column::make("Created at", "created_at")
                ->format(function($value){
                        return $value->format('Y-m-d');
                    })
                ->sortable(),
        ];
    }

    public function updateState($id, $state)
    {
        Report::find($id)->update([
            'state' => $state
        ]);
    }

}
