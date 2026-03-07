<?php

namespace App\Filament\Resources\Productos\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProductoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('codigo')
                    ->required(),
                TextInput::make('barras'),
                TextInput::make('nombre')
                    ->required(),
                
                Select::make('categoria_id')
                    ->label('Categoría')
                    ->options(function () {
                        return \App\Models\Categoria::pluck('name', 'id');
                    })
                    ->searchable()
                    ->required(),
                TextInput::make('precio_compra')
                    ->required()
                    ->numeric(),
                TextInput::make('precio_venta')
                    ->required()
                    ->numeric(),
                TextInput::make('stock_actual')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
