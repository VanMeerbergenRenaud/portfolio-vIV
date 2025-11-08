<?php

namespace App\Filament\Admin\Resources\Articles\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class ArticlesTable
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
                    ->square(),

                TextColumn::make('title')
                    ->label('Titre')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('category')
                    ->label('Catégorie')
                    ->badge()
                    ->searchable(),

                IconColumn::make('is_featured')
                    ->label('Vedette')
                    ->boolean(),

                IconColumn::make('is_published')
                    ->label('Publié')
                    ->boolean(),

                TextColumn::make('published_at')
                    ->label('Date de publication')
                    ->dateTime('d M Y')
                    ->sortable(),
            ])
            ->filters([
                TernaryFilter::make('is_featured')
                    ->label('En vedette'),

                TernaryFilter::make('is_published')
                    ->label('Publié'),

                SelectFilter::make('category')
                    ->label('Catégorie')
                    ->options([
                        'Laravel' => 'Laravel',
                        'Architecture' => 'Architecture',
                        'Performance' => 'Performance',
                        'Sécurité' => 'Sécurité',
                        'DevOps' => 'DevOps',
                        'Design' => 'Design',
                    ]),
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
