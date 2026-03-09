<?php

namespace App\Filament\Resources\Compras\Pages;

use App\Filament\Resources\Compras\CompraResource;
use App\Filament\Resources\Compras\Pages\ListCompras;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditCompra extends EditRecord
{
    protected static string $resource = CompraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
            Action::make('marcar_procesada')
                ->label('Marcar como Procesada')
                ->action(function () {
                    $this->record->update(['estado' => true]);
                    Notification::make()
                        ->title('Compra marcada como procesada')
                        ->success()
                        ->send();
                    return redirect(ListCompras::getUrl());
                })
                ->visible(fn () => !$this->record->estado),
        ];
    }
}
