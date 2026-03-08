<?php

namespace App\Filament\Resources\Despachos\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class DespachoInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('numeroDespacho'),
                TextEntry::make('cliente.nombreCompleto'),
                TextEntry::make('tasa.valor'),
                TextEntry::make('estado'),
                
            ]);
    }
}