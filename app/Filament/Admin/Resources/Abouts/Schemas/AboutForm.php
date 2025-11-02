<?php

namespace App\Filament\Admin\Resources\Abouts\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AboutForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Statistiques')
                    ->description('4 cartes de statistiques affichées dans la grille')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('stat1_value')
                                    ->required()
                                    ->maxLength(50)
                                    ->label('Statistique 1 - Valeur')
                                    ->placeholder('0+'),

                                TextInput::make('stat1_label')
                                    ->required()
                                    ->maxLength(255)
                                    ->label('Statistique 1 - Label')
                                    ->placeholder('Années d\'expérience'),

                                TextInput::make('stat2_value')
                                    ->required()
                                    ->maxLength(50)
                                    ->label('Statistique 2 - Valeur')
                                    ->placeholder('0+'),

                                TextInput::make('stat2_label')
                                    ->required()
                                    ->maxLength(255)
                                    ->label('Statistique 2 - Label')
                                    ->placeholder('Projets réalisés'),

                                TextInput::make('stat3_value')
                                    ->required()
                                    ->maxLength(50)
                                    ->label('Statistique 3 - Valeur')
                                    ->placeholder('0++'),

                                TextInput::make('stat3_label')
                                    ->required()
                                    ->maxLength(255)
                                    ->label('Statistique 3 - Label')
                                    ->placeholder('Projet TFE'),

                                TextInput::make('stat4_value')
                                    ->required()
                                    ->maxLength(50)
                                    ->label('Statistique 4 - Valeur')
                                    ->placeholder('0+'),

                                TextInput::make('stat4_label')
                                    ->required()
                                    ->maxLength(255)
                                    ->label('Statistique 4 - Label')
                                    ->placeholder('Performances'),
                            ]),
                    ])->columnSpanFull(),

                Section::make('Images')
                    ->description('4 images affichées dans la grille')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                // Groupe pour Image 1
                                Group::make()
                                    ->schema([
                                        FileUpload::make('image1')
                                            ->image()
                                            ->imageEditor()
                                            ->directory('about')
                                            ->label('Image 1')
                                            ->helperText('Position: coin supérieur droit'),
                                        TextInput::make('image1_alt')
                                            ->maxLength(255)
                                            ->label('Image 1 - Texte alternatif'),
                                    ]),
                                // Groupe pour Image 2
                                Group::make()
                                    ->schema([
                                        FileUpload::make('image2')
                                            ->image()
                                            ->imageEditor()
                                            ->directory('about')
                                            ->label('Image 2')
                                            ->helperText('Position: milieu gauche'),
                                        TextInput::make('image2_alt')
                                            ->maxLength(255)
                                            ->label('Image 2 - Texte alternatif'),
                                    ]),
                                // Groupe pour Image 3
                                Group::make()
                                    ->schema([
                                        FileUpload::make('image3')
                                            ->image()
                                            ->imageEditor()
                                            ->directory('about')
                                            ->label('Image 3')
                                            ->helperText('Position: milieu droit'),
                                        TextInput::make('image3_alt')
                                            ->maxLength(255)
                                            ->label('Image 3 - Texte alternatif'),
                                    ]),
                                // Groupe pour Image 4
                                Group::make()
                                    ->schema([
                                        FileUpload::make('image4')
                                            ->image()
                                            ->imageEditor()
                                            ->directory('about')
                                            ->label('Image 4')
                                            ->helperText('Position: coin inférieur gauche'),
                                        TextInput::make('image4_alt')
                                            ->maxLength(255)
                                            ->label('Image 4 - Texte alternatif'),
                                    ]),
                            ]),
                    ])->columnSpanFull(),

                Section::make('Paramètres de publication')
                    ->schema([
                        Toggle::make('is_published')
                            ->label('Publié')
                            ->default(true),
                    ])->columnSpanFull(),
            ]);
    }
}
