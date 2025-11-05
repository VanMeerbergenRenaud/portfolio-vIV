<?php

namespace App\Filament\Admin\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informations du projet')
                    ->schema([
                        Grid::make()
                            ->schema([
                                TextInput::make('name')
                                    ->required()
                                    ->maxLength(255)
                                    ->label('Nom du projet')
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),

                                TextInput::make('slug')
                                    ->required()
                                    ->maxLength(255)
                                    ->unique(ignoreRecord: true)
                                    ->label('Slug (URL)'),

                                Textarea::make('description')
                                    ->rows(4)
                                    ->label('Description')
                                    ->helperText('Description affichée sur la page d\'accueil')
                                    ->columnSpanFull(),

                                FileUpload::make('image')
                                    ->image()
                                    ->imageEditor()
                                    ->directory('projects/mockups')
                                    ->label('Image du projet')
                                    ->helperText('Image principale du projet'),

                                FileUpload::make('logo')
                                    ->image()
                                    ->imageEditor()
                                    ->directory('projects/logos')
                                    ->label('Logo du projet')
                                    ->helperText('Logo affiché sur l\'image'),
                            ]),
                    ])->columnSpanFull(),

                Section::make('Détails du projet')
                    ->schema([
                        Grid::make()
                            ->schema([
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

                                TextInput::make('duration')
                                    ->maxLength(255)
                                    ->label('Durée')
                                    ->placeholder('3h, 2 semaines, etc.'),

                                TextInput::make('client')
                                    ->maxLength(255)
                                    ->label('Client')
                                    ->placeholder('Projet personnel, HEPL, etc.'),

                                TagsInput::make('tags')
                                    ->label('Technologies')
                                    ->placeholder('Laravel, Tailwind, Livewire...')
                                    ->suggestions(['Laravel', 'PHP', 'Livewire', 'Filament', 'Tailwind', 'MySQL', 'PostgreSQL', 'JavaScript', 'TypeScript', 'Next.js', 'WordPress'])
                                    ->helperText('Technologies utilisées dans le projet'),

                                Select::make('type')
                                    ->options([
                                        'saas' => 'SaaS',
                                        'web' => 'Web Application',
                                        'mobile' => 'Mobile Application',
                                        'desktop' => 'Desktop Application',
                                        'academique' => 'Projet académique',
                                        'other' => 'Autre',
                                    ])
                                    ->label('Type de projet'),
                            ]),
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
