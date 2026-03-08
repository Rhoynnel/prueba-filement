<?php

namespace App\Filament\Resources\Tasas\Pages;

use App\Filament\Resources\Tasas\TasaResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTasa extends ViewRecord
{
    protected static string $resource = TasaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
