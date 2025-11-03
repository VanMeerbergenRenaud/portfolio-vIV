<?php

namespace App\Filament\Admin\Resources\Projects\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProjectsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('order')
                    ->label('Ordre')
                    ->sortable(),

                ImageColumn::make('image')
                    ->label('Image')
                    ->disk('s3')
                    ->circular(),

                ImageColumn::make('logo')
                    ->label('Logo')
                    ->disk('s3')
                    ->circular(),

                TextColumn::make('name')
                    ->label('Nom du projet')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('description')
                    ->label('Description')
                    ->limit(50)
                    ->searchable()
                    ->toggleable(),

                TextColumn::make('type')
                    ->label('Type')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'web' => 'success',
                        'mobile' => 'info',
                        'desktop' => 'warning',
                        'saas' => 'purple',
                        'api' => 'primary',
                        'academique' => 'gray',
                        default => 'gray',
                    })
                    ->sortable(),

                TextColumn::make('year')
                    ->label('Année')
                    ->sortable(),

                TextColumn::make('client')
                    ->label('Client')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),

                IconColumn::make('is_featured')
                    ->label('Mis en avant')
                    ->boolean()
                    ->sortable(),

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
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
