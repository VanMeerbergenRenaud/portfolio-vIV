<?php

namespace App\Filament\Admin\Resources\Testimonials\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informations du témoignage')
                    ->columns(4)
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->label('Nom'),

                        TextInput::make('role')
                            ->required()
                            ->maxLength(255)
                            ->label('Poste / Rôle')
                            ->placeholder('Chef de projet, Full-Stack Developer...'),

                        TextInput::make('company')
                            ->maxLength(255)
                            ->label('Entreprise')
                            ->placeholder('Ludifica, Spade...'),

                        Select::make('rating')
                            ->options([
                                1 => '1 étoile',
                                2 => '2 étoiles',
                                3 => '3 étoiles',
                                4 => '4 étoiles',
                                5 => '5 étoiles',
                            ])
                            ->default(5)
                            ->label('Note'),

                        FileUpload::make('image')
                            ->image()
                            ->imageEditor()
                            ->directory('testimonials')
                            ->label('Image de la personne')
                            ->columnSpan(2),

                        Textarea::make('content')
                            ->required()
                            ->rows(4)
                            ->label('Contenu du témoignage')
                            ->columnSpan(2),
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
