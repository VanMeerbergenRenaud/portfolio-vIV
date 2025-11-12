<?php

namespace App\Filament\Admin\Resources\Faqs\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class FaqForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informations de la question')
                    ->schema([
                        TextInput::make('question')
                            ->label('Question')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),

                        Textarea::make('answer')
                            ->label('Réponse')
                            ->required()
                            ->rows(4)
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
