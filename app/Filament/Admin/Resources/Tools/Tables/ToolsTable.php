<?php

namespace App\Filament\Admin\Resources\Tools\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ToolsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('order')
                    ->label('Ordre')
                    ->sortable(),

                ImageColumn::make('logo')
                    ->label('Logo')
                    ->disk('s3')
                    ->circular(),

                TextColumn::make('name')
                    ->label('Nom')
                    ->searchable()
                    ->sortable(),

                IconColumn::make('is_stat_card')
                    ->label('Carte Stat')
                    ->boolean()
                    ->sortable(),

                TextColumn::make('stat_number')
                    ->label('Nombre')
                    ->searchable()
                    ->toggleable(),

                TextColumn::make('stat_title')
                    ->label('Titre Stat')
                    ->searchable()
                    ->toggleable(),

                TextColumn::make('url')
                    ->label('URL')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                IconColumn::make('is_published')
                    ->label('Publié')
                    ->boolean()
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Créé le')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->label('Modifié le')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('order')
            ->reorderable('order')
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
