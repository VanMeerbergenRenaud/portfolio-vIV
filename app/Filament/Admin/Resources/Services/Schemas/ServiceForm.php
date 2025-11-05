<?php

namespace App\Filament\Admin\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informations du service')
                    ->columns(4)
                    ->schema([
                        TextInput::make('number')
                            ->required()
                            ->maxLength(10)
                            ->label('Numéro')
                            ->placeholder('(01)'),

                        TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->label('Titre du service')
                            ->columnSpan(2)
                            ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),

                        TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->label('Slug (URL)'),

                        FileUpload::make('image')
                            ->image()
                            ->imageEditor()
                            ->directory('services')
                            ->label('Image du service')
                            ->columnSpan(2),

                        Textarea::make('description')
                            ->required()
                            ->rows(4)
                            ->label('Description')
                            ->columnSpan(2),
                    ])->columnSpanFull(),

                Section::make('Technologies & Tags')
                    ->schema([
                        TagsInput::make('tags')
                            ->label('Technologies')
                            ->placeholder('Laravel, Tailwind, Livewire...')
                            ->suggestions([
                                'Laravel',
                                'Livewire',
                                'Filament',
                                'Tailwind CSS',
                                'MySQL/PostgreSQL',
                                'JavaScript / TypeScript',
                                'Responsive Design',
                                'Mise en cache',
                                'UI/UX',
                                'PHP',
                                'SEO',
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
