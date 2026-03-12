<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;

class UserTable extends DataTableComponent
{
    protected $model = User::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Name", "name")
                ->searchable()
                ->sortable(),
            Column::make("Email", "email")
                ->sortable(),


            Column::make("Created at", "created_at")
                ->format(function($value){
                    return $value->format('Y-m-d');
                })
                ->sortable(),
            Column::make("Accion")
            ->label(function($row){
                return view('admin.user.actions',[
                    'user' => $row
                ]);
            })
        ];
    }
}
