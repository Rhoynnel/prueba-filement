<?php

namespace App\Filament\Resources\Rols;

use App\Filament\Resources\Rols\Pages\CreateRol;
use App\Filament\Resources\Rols\Pages\EditRol;
use App\Filament\Resources\Rols\Pages\ListRols;
use App\Filament\Resources\Rols\Pages\ViewRol;
use App\Filament\Resources\Rols\Schemas\RolForm;
use App\Filament\Resources\Rols\Schemas\RolInfolist;
use App\Filament\Resources\Rols\Tables\RolsTable;
use App\Models\Rol;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class RolResource extends Resource
{
    protected static ?string $model = Rol::class;

    protected static ?string $navigationLabel = 'Roles';

    // use correct union type per Filament 3.0+
    protected static string|UnitEnum|null $navigationGroup = 'Administrador de Usuarios';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    // used for the resource title on pages; must match a real column
    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return RolForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return RolInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RolsTable::configure($table);
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
            'index' => ListRols::route('/'),
            'create' => CreateRol::route('/create'),
            'view' => ViewRol::route('/{record}'),
            'edit' => EditRol::route('/{record}/edit'),
        ];
    }
}
