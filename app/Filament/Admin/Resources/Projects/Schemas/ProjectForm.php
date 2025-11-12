<?php

namespace App\Filament\Admin\Resources\Projects\Schemas;

use App\Enums\ProjectType;
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
                                    ->helperText('Image principale du projet')
                                    ->columnSpanFull(),

                                FileUpload::make('logo_white')
                                    ->image()
                                    ->imageEditor()
                                    ->directory('projects/logos/white')
                                    ->label('Logo du projet en blanc')
                                    ->helperText('Logo affiché sur l\'image'),

                                FileUpload::make('logo_black')
                                    ->image()
                                    ->imageEditor()
                                    ->directory('projects/logos/black')
                                    ->label('Logo du projet en noir')
                                    ->helperText('Logo affiché dans la page du projet'),
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
                                    ->options(collect(ProjectType::cases())->mapWithKeys(
                                        fn ($type) => [$type->value => $type->label()]
                                    ))
                                    ->label('Type de projet'),
                            ]),
                    ])->columnSpanFull(),

                /* Details */
                Section::make('Détails techniques')
                    ->description('Informations sur le rôle, la difficulté et les outils utilisés')
                    ->schema([
                        Grid::make()
                            ->schema([
                                Select::make('roles')
                                    ->multiple()
                                    ->options([
                                        'frontend' => 'Frontend',
                                        'backend' => 'Backend',
                                        'design' => 'Design',
                                        'fullstack' => 'Fullstack',
                                        'ux' => 'UX',
                                        'ui' => 'UI',
                                        'devops' => 'DevOps',
                                        'project_management' => 'Gestion de projet',
                                    ])
                                    ->label('Rôles')
                                    ->helperText('Sélectionnez les rôles que vous avez occupés')
                                    ->searchable()
                                    ->preload(),

                                Select::make('difficulty')
                                    ->options([
                                        'easy' => 'Facile',
                                        'medium' => 'Moyen',
                                        'hard' => 'Difficile',
                                    ])
                                    ->label('Difficulté')
                                    ->helperText('Niveau de difficulté du projet'),

                                TagsInput::make('tools')
                                    ->label('Outils utilisés')
                                    ->placeholder('Ex: Figma, VSCode, Laravel...')
                                    ->helperText('Outils et logiciels utilisés (Entrée après chaque outil)')
                                    ->suggestions(['Figma', 'VSCode', 'PhpStorm', 'Git', 'GitHub', 'Docker', 'Postman', 'Slack'])
                                    ->columnSpanFull(),
                            ]),
                    ])->columnSpanFull()
                    ->collapsible(),

                Section::make('Contexte du projet')
                    ->description('Décrivez le contexte et les objectifs du projet')
                    ->schema([
                        Grid::make()
                            ->schema([
                                TextInput::make('context_title')
                                    ->label('Titre de la section')
                                    ->maxLength(255)
                                    ->placeholder('Ex: Un besoin de modernisation')
                                    ->columnSpanFull(),

                                Textarea::make('context_description')
                                    ->label('Description du contexte')
                                    ->rows(4)
                                    ->placeholder('Décrivez le contexte, les besoins du client, les objectifs...')
                                    ->helperText('Expliquez le contexte dans lequel le projet a été réalisé')
                                    ->columnSpanFull(),

                                FileUpload::make('context_gallery')
                                    ->label('Galerie d\'images')
                                    ->multiple()
                                    ->image()
                                    ->imageEditor()
                                    ->directory('projects/context')
                                    ->reorderable()
                                    ->maxFiles(5)
                                    ->helperText('Ajoutez jusqu\'à 5 images pour illustrer le contexte (wireframes, maquettes, anciennes versions...)')
                                    ->columnSpanFull(),
                            ]),
                    ])->columnSpanFull()
                    ->collapsible(),

                Section::make('Résultats obtenus')
                    ->description('Présentez les résultats et l\'impact du projet')
                    ->schema([
                        Grid::make()
                            ->schema([
                                TextInput::make('results_title')
                                    ->label('Titre de la section')
                                    ->maxLength(255)
                                    ->placeholder('Ex: Un portfolio performant et élégant')
                                    ->columnSpanFull(),

                                Textarea::make('results_description')
                                    ->label('Description des résultats')
                                    ->rows(4)
                                    ->placeholder('Décrivez les résultats obtenus, les métriques, l\'impact...')
                                    ->helperText('Expliquez les résultats concrets du projet (performances, statistiques, retours...)')
                                    ->columnSpanFull(),

                                FileUpload::make('results_gallery')
                                    ->label('Galerie d\'images')
                                    ->multiple()
                                    ->image()
                                    ->imageEditor()
                                    ->directory('projects/results')
                                    ->reorderable()
                                    ->maxFiles(5)
                                    ->helperText('Ajoutez jusqu\'à 5 images pour illustrer les résultats (captures d\'écran, graphiques...)')
                                    ->columnSpanFull(),
                            ]),
                    ])->columnSpanFull()
                    ->collapsible(),

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
