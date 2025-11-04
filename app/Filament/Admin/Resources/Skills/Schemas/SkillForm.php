<?php

namespace App\Filament\Admin\Resources\Skills\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class SkillForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informations du skill')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->label('Nom du skill')
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),

                        TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->label('Slug (URL)'),

                        Textarea::make('description')
                            ->required()
                            ->rows(4)
                            ->label('Description'),

                        FileUpload::make('image')
                            ->image()
                            ->imageEditor()
                            ->directory('skills')
                            ->label('Image de la compétence'),
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
