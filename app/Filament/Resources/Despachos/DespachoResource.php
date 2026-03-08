<?php

namespace App\Filament\Resources\Despachos;

use App\Filament\Resources\Despachos\Pages\CreateDespacho;
use App\Filament\Resources\Despachos\Pages\EditDespacho;
use App\Filament\Resources\Despachos\Pages\ListDespachos;
use App\Filament\Resources\Despachos\Pages\ViewDespacho;
use App\Filament\Resources\Despachos\Schemas\DespachoForm;
use App\Filament\Resources\Despachos\Schemas\DespachoInfolist;
use App\Filament\Resources\Despachos\Tables\DespachosTable;
use App\Models\Despacho;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DespachoResource extends Resource
{
    protected static ?string $model = Despacho::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedTruck;

    protected static ?string $recordTitleAttribute = 'numeroDespacho';

    public static function form(Schema $schema): Schema
    {
        return DespachoForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return DespachoInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DespachosTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListDespachos::route('/'),
            'create' => CreateDespacho::route('/create'),
            'view' => ViewDespacho::route('/{record}'),
            'edit' => EditDespacho::route('/{record}/edit'),
        ];
    }
}