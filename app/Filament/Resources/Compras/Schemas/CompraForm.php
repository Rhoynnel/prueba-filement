<?php

namespace App\Filament\Resources\Compras\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CompraForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('proveedors_id')
                    ->label('Proveedor')
                    ->relationship('proveedors', 'nombreCompleto')
                    ->searchable()
                    ->required()
                    ->createOptionForm([
                        TextInput::make('rif')
                            ->label('RIF')
                            ->required(),
                        TextInput::make('nombreCompleto')
                            ->label('Nombre Completo')
                            ->required(),
                        TextInput::make('telefono')
                            ->label('Teléfono'),
                        TextInput::make('direccion')
                            ->label('Dirección'),
                    ]),
                TextInput::make('numero_factura')
                    ->required(),
                DatePicker::make('fecha')
                    ->required(),

            ]);
    }
}
