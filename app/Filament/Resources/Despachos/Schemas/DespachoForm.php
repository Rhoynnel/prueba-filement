<?php

namespace App\Filament\Resources\Despachos\Schemas;

use App\Models\Cliente;
use App\Models\Tasa;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DespachoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('clientes_id')
                    ->relationship('cliente', 'nombreCompleto')
                    ->searchable(['cedula', 'nombreCompleto'])
                    ->getOptionLabelFromRecordUsing(fn ($record) => $record->cedula . ' - ' . $record->nombreCompleto)
                    ->required(),
                Hidden::make('tasas_id')
                    ->default(Tasa::latest()->first()?->id),
                
            ]);
    }
}