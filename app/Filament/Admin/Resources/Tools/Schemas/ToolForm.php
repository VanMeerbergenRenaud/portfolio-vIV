<?php

namespace App\Filament\Admin\Resources\Tools\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ToolForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informations de l\'outil')
                    ->columns(2)
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->label('Nom de l\'outil')
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),

                        TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->label('Slug (URL)'),

                        FileUpload::make('logo')
                            ->image()
                            ->imageEditor()
                            ->directory('tools/logos')
                            ->label('Logo de l\'outil')
                            ->acceptedFileTypes(['image/svg', 'image/png', 'image/jpg', 'image/jpeg'])
                            ->helperText('Logo de l\'outil (non requis pour les cartes de statistiques)')
                            ->columnSpanFull(),
                    ])->columnSpanFull(),

                Section::make('Carte de statistique')
                    ->description('Cochez pour transformer cet élément en carte de statistique au lieu d\'un outil')
                    ->columns(2)
                    ->schema([
                        Toggle::make('is_stat_card')
                            ->label('Est une carte de statistique')
                            ->default(false)
                            ->live()
                            ->helperText('Si activé, cet élément sera affiché comme une carte de statistique')
                            ->columnSpanFull(),

                        TextInput::make('stat_number')
                            ->maxLength(255)
                            ->label('Nombre/Texte principal')
                            ->placeholder('4, Laravel, 10, etc.')
                            ->visible(fn ($get) => $get('is_stat_card'))
                            ->helperText('Le nombre ou texte principal affiché en grand'),

                        TextInput::make('stat_title')
                            ->maxLength(255)
                            ->label('Titre de la statistique')
                            ->placeholder('Années d\'expérience, Stack préféré, etc.')
                            ->visible(fn ($get) => $get('is_stat_card'))
                            ->helperText('Le titre de la carte de statistique'),

                        Textarea::make('stat_description')
                            ->rows(3)
                            ->label('Description')
                            ->placeholder('De développement web professionnel.')
                            ->visible(fn ($get) => $get('is_stat_card'))
                            ->helperText('La description affichée en bas de la carte')
                            ->columnSpanFull(),
                    ])->columnSpanFull(),

                Section::make('Paramètres de publication')
                    ->columns(3)
                    ->schema([
                        TextInput::make('order')
                            ->numeric()
                            ->required()
                            ->default(0)
                            ->label('Ordre d\'affichage'),

                        Toggle::make('is_published')
                            ->label('Publié')
                            ->default(true),
                    ])->columnSpanFull(),
            ]);
    }
}
