<?php

namespace App\Filament\Resources\Tasas\Pages;

use App\Filament\Resources\Tasas\TasaResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditTasa extends EditRecord
{
    protected static string $resource = TasaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
