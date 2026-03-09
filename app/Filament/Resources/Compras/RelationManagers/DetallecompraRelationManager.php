<?php

namespace App\Filament\Resources\Compras\RelationManagers;

use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;

class DetallecompraRelationManager extends RelationManager
{
    protected static string $relationship = 'detallecompras';

    protected static ?string $modelLabel = 'Detalle de Compra';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\Select::make('productos_id')
                    ->label('Producto')
                    ->relationship('producto', 'nombre')
                    ->searchable()
                    ->required()
                    ->createOptionForm([
                        \Filament\Forms\Components\TextInput::make('codigo')
                            ->required()
                            ->unique(ignoreRecord: true),
                        \Filament\Forms\Components\TextInput::make('barras')
                            ->unique(ignoreRecord: true),
                        \Filament\Forms\Components\TextInput::make('nombre')
                            ->required(),
                        \Filament\Forms\Components\Select::make('categoria_id')
                            ->relationship('categoria', 'name')
                            ->required(),
                        \Filament\Forms\Components\TextInput::make('precio_compra')
                            ->numeric()
                            ->required(),
                        \Filament\Forms\Components\TextInput::make('precio_venta')
                            ->numeric()
                            ->required(),
                        \Filament\Forms\Components\TextInput::make('stock_actual')
                            ->numeric()
                            ->default(0),
                    ]),
                \Filament\Forms\Components\TextInput::make('cantidad')
                    ->numeric()
                    ->required(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('producto.nombre'),
                TextColumn::make('cantidad'),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->headerActions([
                CreateAction::make(),
            ]);
    }
}