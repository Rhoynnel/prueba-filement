<?php

namespace App\Filament\Resources\Tasas\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TasaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('valor')
                    ->required()
                    ->numeric(),
                DatePicker::make('fecha')
                    ->required(),
            ]);
    }
}
