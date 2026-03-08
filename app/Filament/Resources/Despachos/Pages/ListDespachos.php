<?php

namespace App\Filament\Resources\Despachos\Pages;

use App\Filament\Resources\Despachos\DespachoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDespachos extends ListRecords
{
    protected static string $resource = DespachoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}