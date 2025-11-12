<?php

namespace App\Filament\Admin\Resources\Heroes\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class HeroForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Contenu principal')
                    ->description('Titre et description de la section hero')
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->label('Titre')
                            ->placeholder('Full-Stack dev®')
                            ->default('Full-Stack dev®'),

                        Textarea::make('description')
                            ->required()
                            ->rows(3)
                            ->label('Description')
                            ->placeholder('Je transforme le chaos des specs en code élégant...')
                            ->helperText('Utilisez <span class="text-gray-medium"></span> pour styliser du texte en gris'),
                    ])->columnSpanFull(),

                Section::make('Image principale')
                    ->description('Image de profil ou hero image')
                    ->schema([
                        FileUpload::make('hero_image')
                            ->image()
                            ->imageEditor()
                            ->directory('hero')
                            ->label('Image Hero')
                            ->helperText('Image principale de la section hero'),

                        TextInput::make('hero_image_alt')
                            ->maxLength(255)
                            ->label('Texte alternatif de l\'image')
                            ->placeholder('Portrait of a person with motion blur effect...'),
                    ])->columnSpanFull(),

                Section::make('Technologies')
                    ->description('4 technologies/stacks affichées')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('tech1')
                                    ->required()
                                    ->maxLength(100)
                                    ->label('Technologie 1')
                                    ->placeholder('Laravel • PHP')
                                    ->default('Laravel • PHP'),

                                TextInput::make('tech2')
                                    ->required()
                                    ->maxLength(100)
                                    ->label('Technologie 2')
                                    ->placeholder('Livewire • Filament')
                                    ->default('Livewire • Filament'),

                                TextInput::make('tech3')
                                    ->required()
                                    ->maxLength(100)
                                    ->label('Technologie 3')
                                    ->placeholder('Tailwind • JavaScript')
                                    ->default('Tailwind • JavaScript'),

                                TextInput::make('tech4')
                                    ->required()
                                    ->maxLength(100)
                                    ->label('Technologie 4')
                                    ->placeholder('MySQL • PostgreSQL')
                                    ->default('MySQL • PostgreSQL'),
                            ]),
                    ])->columnSpanFull(),

                Section::make('Localisation')
                    ->description('Informations de copyright et localisation')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('copyright')
                                    ->required()
                                    ->maxLength(50)
                                    ->label('Copyright')
                                    ->placeholder('© 2024 - 2025')
                                    ->default('© 2024 - 2025'),

                                TextInput::make('location')
                                    ->required()
                                    ->maxLength(100)
                                    ->label('Localisation')
                                    ->placeholder('Basé en Belgique')
                                    ->default('Basé en Belgique'),
                            ]),
                    ])->columnSpanFull(),

                Section::make('Badge passionné')
                    ->description('Section avec les étoiles et la description')
                    ->schema([
                        TextInput::make('badge_text')
                            ->required()
                            ->maxLength(100)
                            ->label('Texte du badge')
                            ->placeholder('Codeur passionné')
                            ->default('Codeur passionné'),

                        Textarea::make('badge_description')
                            ->required()
                            ->rows(2)
                            ->label('Description du badge')
                            ->placeholder('Diplômé avec grande distinction...')
                            ->helperText('Utilisez <br> pour les sauts de ligne et <span class="text-dark-primary"></span> pour styliser du texte'),
                    ])->columnSpanFull(),

                Section::make('Disponibilité')
                    ->description('Statut de disponibilité et type de contrat')
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                TextInput::make('availability_status')
                                    ->required()
                                    ->maxLength(100)
                                    ->label('Statut de disponibilité')
                                    ->placeholder('En recherche active')
                                    ->default('En recherche active'),

                                TextInput::make('availability_type')
                                    ->required()
                                    ->maxLength(50)
                                    ->label('Type de contrat')
                                    ->placeholder('CDI/CDD')
                                    ->default('CDI/CDD'),

                                Toggle::make('is_available')
                                    ->label('Disponible')
                                    ->helperText('Affiche le point vert si activé')
                                    ->default(true),
                            ]),
                    ])->columnSpanFull(),

                Section::make('Contact')
                    ->description('Email de contact')
                    ->schema([
                        TextInput::make('contact_email')
                            ->required()
                            ->email()
                            ->maxLength(255)
                            ->label('Email de contact')
                            ->placeholder('renaud.vanmeerbergen@gmail.com')
                            ->default('renaud.vanmeerbergen@gmail.com'),
                    ])->columnSpanFull(),

                Section::make('Publication')
                    ->schema([
                        Toggle::make('is_published')
                            ->label('Publié')
                            ->helperText('Cochez pour publier cette section')
                            ->default(true),
                    ]),
            ]);
    }
}
