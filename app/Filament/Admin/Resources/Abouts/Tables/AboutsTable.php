<?php

namespace App\Filament\Admin\Resources\Abouts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AboutsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image1')
                    ->label('Image')
                    ->disk('s3')
                    ->circular(),

                ImageColumn::make('image2')
                    ->label('Image')
                    ->disk('s3')
                    ->circular(),

                ImageColumn::make('image3')
                    ->label('Image')
                    ->disk('s3')
                    ->circular(),

                ImageColumn::make('image4')
                    ->label('Image')
                    ->disk('s3')
                    ->circular(),

                TextColumn::make('stat1_value')
                    ->label('Stat 1')
                    ->badge()
                    ->color('gray'),

                TextColumn::make('stat2_value')
                    ->label('Stat 2')
                    ->badge()
                    ->color('gray'),

                TextColumn::make('stat3_value')
                    ->label('Stat 3')
                    ->badge()
                    ->color('gray'),

                TextColumn::make('stat4_value')
                    ->label('Stat 4')
                    ->badge()
                    ->color('gray'),

                IconColumn::make('is_published')
                    ->label('Publié')
                    ->boolean(),

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
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
