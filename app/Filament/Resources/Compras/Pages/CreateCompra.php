<?php

namespace App\Filament\Resources\Compras\Pages;

use App\Filament\Resources\Compras\CompraResource;
use App\Filament\Resources\Compras\Pages\EditCompra;
use App\Models\Compra;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Validation\ValidationException;

class CreateCompra extends CreateRecord
{
    protected static string $resource = CompraResource::class;

    protected function beforeCreate(): void
    {
        $data = $this->form->getState();
        $proveedorId = $data['proveedors_id'];

        $pendingCompra = Compra::where('proveedors_id', $proveedorId)->where('estado', false)->first();

        if ($pendingCompra) {
            $this->redirect(EditCompra::getUrl(['record' => $pendingCompra->id]));
        }
    }
}
