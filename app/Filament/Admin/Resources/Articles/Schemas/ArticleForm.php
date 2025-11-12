<?php

namespace App\Filament\Admin\Resources\Articles\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informations principales')
                    ->columns(2)
                    ->schema([
                        TextInput::make('title')
                            ->label('Titre')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('slug')
                            ->label('Slug')
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),

                        Textarea::make('excerpt')
                            ->label('Extrait')
                            ->rows(3)
                            ->columnSpanFull(),

                        RichEditor::make('content')
                            ->label('Contenu')
                            ->columnSpanFull(),

                        FileUpload::make('image')
                            ->image()
                            ->imageEditor()
                            ->directory('articles')
                            ->label('Image de l’article')
                            ->columnSpanFull(),

                        TextInput::make('category')
                            ->label('Catégorie')
                            ->maxLength(255),

                        DateTimePicker::make('published_at')
                            ->label('Date de publication')
                            ->default(now()),

                        Toggle::make('is_featured')
                            ->label('Article en vedette')
                            ->default(false),
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
