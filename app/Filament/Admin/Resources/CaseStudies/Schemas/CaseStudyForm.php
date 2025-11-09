<?php

namespace App\Filament\Admin\Resources\CaseStudies\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class CaseStudyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informations principales')
                    ->columns(2)
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->label('Titre')
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),

                        TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->label('Slug (URL)'),

                        TextInput::make('subtitle')
                            ->maxLength(255)
                            ->label('Sous-titre')
                            ->default('Case study')
                            ->columnSpanFull(),

                        Textarea::make('overview')
                            ->rows(4)
                            ->label('Aperçu')
                            ->helperText('Description courte du projet')
                            ->columnSpanFull(),
                    ])->columnSpanFull(),

                Section::make('Détails du projet')
                    ->columns(2)
                    ->schema([
                        TextInput::make('project_name')
                            ->maxLength(255)
                            ->label('Nom du projet'),

                        TextInput::make('url')
                            ->url()
                            ->maxLength(255)
                            ->label('URL du projet')
                            ->placeholder('https://example.com'),

                        TextInput::make('year')
                            ->numeric()
                            ->minValue(2000)
                            ->maxValue(2100)
                            ->label('Année')
                            ->default(date('Y')),

                        TextInput::make('period')
                            ->maxLength(255)
                            ->label('Période')
                            ->placeholder('2024 - 2025'),

                        FileUpload::make('image')
                            ->image()
                            ->imageEditor()
                            ->directory('case-studies')
                            ->label('Image du projet')
                            ->helperText('Image principale affichée')
                            ->columnSpanFull(),
                    ])->columnSpanFull(),

                Section::make('Citation')
                    ->columns(2)
                    ->schema([
                        Textarea::make('quote')
                            ->rows(3)
                            ->label('Citation')
                            ->helperText('Citation à afficher dans la case study')
                            ->columnSpanFull(),

                        TextInput::make('author_name')
                            ->maxLength(255)
                            ->label('Nom de l\'auteur')
                            ->default('Renaud Vmb'),

                        TextInput::make('author_title')
                            ->maxLength(255)
                            ->label('Titre de l\'auteur')
                            ->default('Développeur Full-Stack'),

                        FileUpload::make('author_image')
                            ->image()
                            ->imageEditor()
                            ->directory('case-studies/authors')
                            ->label('Photo de l\'auteur')
                            ->columnSpanFull(),
                    ])->columnSpanFull(),

                Section::make('Statistiques')
                    ->schema([
                        Repeater::make('stats')
                            ->label('Statistiques')
                            ->schema([
                                TextInput::make('value')
                                    ->required()
                                    ->label('Valeur')
                                    ->placeholder('500'),

                                TextInput::make('highlight')
                                    ->required()
                                    ->label('Mise en évidence')
                                    ->placeholder('h+'),

                                TextInput::make('description')
                                    ->required()
                                    ->label('Description')
                                    ->placeholder('De développement intensif.'),
                            ])
                            ->columns(3)
                            ->defaultItems(4)
                            ->collapsible()
                            ->helperText('Les statistiques affichées en bas de la case study'),
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
