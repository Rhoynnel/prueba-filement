<?php

namespace App\Filament\Resources\Despachos\Pages;

use App\Filament\Resources\Despachos\DespachoResource;
use App\Models\Tasa;
use Filament\Resources\Pages\CreateRecord;

class CreateDespacho extends CreateRecord
{
    protected static string $resource = DespachoResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['tasas_id'] = Tasa::latest()->first()?->id;

        return $data;
    }
}