<?php

namespace App\Filament\Resources\Tasas\Pages;

use App\Filament\Resources\Tasas\TasaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTasas extends ListRecords
{
    protected static string $resource = TasaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
