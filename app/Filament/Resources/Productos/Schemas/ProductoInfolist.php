<?php

namespace App\Filament\Resources\Productos\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ProductoInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('codigo'),
                TextEntry::make('barras')
                    ->placeholder('-'),
                TextEntry::make('nombre'),
                TextEntry::make('categoria.name')
                    ->numeric(),
                TextEntry::make('precio_compra')
                    ->numeric(),
                TextEntry::make('precio_venta')
                    ->numeric(),
                TextEntry::make('stock_actual')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
