<?php

namespace App\Filament\Admin\Resources\Processes\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ProcessForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informations de l\'étape')
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->label('Titre')
                            ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),

                        Textarea::make('description')
                            ->rows(4)
                            ->label('Description'),
                    ]),

                Section::make('Paramètres de publication')
                    ->schema([
                        Toggle::make('is_published')
                            ->label('Publié')
                            ->default(true),

                        TextInput::make('order')
                            ->numeric()
                            ->required()
                            ->default(0)
                            ->label('Ordre d\'affichage'),
                    ])
                    ->columns(2),
            ]);
    }
}
