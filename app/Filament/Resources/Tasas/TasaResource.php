<?php

namespace App\Filament\Resources\Tasas;

use App\Filament\Resources\Tasas\Pages\CreateTasa;
use App\Filament\Resources\Tasas\Pages\EditTasa;
use App\Filament\Resources\Tasas\Pages\ListTasas;
use App\Filament\Resources\Tasas\Pages\ViewTasa;
use App\Filament\Resources\Tasas\Schemas\TasaForm;
use App\Filament\Resources\Tasas\Schemas\TasaInfolist;
use App\Filament\Resources\Tasas\Tables\TasasTable;
use App\Models\Tasa;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TasaResource extends Resource
{
    protected static ?string $model = Tasa::class;

    protected static ?string $navigationLabel = 'Tasas';

    protected static string|UnitEnum|null $navigationGroup = 'Administracion';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Tasa';

    public static function form(Schema $schema): Schema
    {
        return TasaForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return TasaInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TasasTable::configure($table);
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
            'index' => ListTasas::route('/'),
            'create' => CreateTasa::route('/create'),
            'view' => ViewTasa::route('/{record}'),
            'edit' => EditTasa::route('/{record}/edit'),
        ];
    }
}
