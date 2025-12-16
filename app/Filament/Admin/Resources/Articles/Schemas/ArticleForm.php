<?php

namespace App\Filament\Admin\Resources\Articles\Schemas;

use App\Enums\ArticleCategory;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informations principales')
                    ->schema([
                        Grid::make()
                            ->schema([
                                TextInput::make('title')
                                    ->label('Titre')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),

                                TextInput::make('slug')
                                    ->label('Slug')
                                    ->required()
                                    ->maxLength(255)
                                    ->unique(ignoreRecord: true),

                                Textarea::make('excerpt')
                                    ->label('Extrait')
                                    ->rows(3)
                                    ->helperText('Résumé court de l\'article')
                                    ->columnSpanFull(),

                                FileUpload::make('cover_image')
                                    ->image()
                                    ->imageEditor()
                                    ->directory('articles/covers')
                                    ->label('Image de couverture')
                                    ->helperText('Image principale de l\'article')
                                    ->columnSpanFull(),

                                Select::make('category')
                                    ->options(collect(ArticleCategory::cases())->mapWithKeys(
                                        fn ($category) => [$category->value => $category->label()]
                                    ))
                                    ->label('Catégorie')
                                    ->required(),

                                TagsInput::make('tags')
                                    ->label('Tags')
                                    ->placeholder('Laravel, PHP, JavaScript...')
                                    ->suggestions(['Laravel', 'PHP', 'JavaScript', 'Vue.js', 'React', 'Tailwind', 'Design', 'UX', 'UI', 'Performance', 'SEO'])
                                    ->helperText('Mots-clés liés à l\'article'),

                                TextInput::make('reading_time')
                                    ->numeric()
                                    ->label('Temps de lecture (min)')
                                    ->helperText('Temps estimé de lecture en minutes')
                                    ->suffix('min'),

                                DateTimePicker::make('published_at')
                                    ->label('Date de publication')
                                    ->default(now()),
                            ]),
                    ])->columnSpanFull(),

                Section::make('Contenu de l\'article')
                    ->description('Construisez le contenu de votre article avec différents types de blocs')
                    ->schema([
                        Builder::make('content_blocks')
                            ->label('Blocs de contenu')
                            ->blocks([
                                Builder\Block::make('heading')
                                    ->label('Titre')
                                    ->schema([
                                        Select::make('level')
                                            ->options([
                                                'h2' => 'Titre 2',
                                                'h3' => 'Titre 3',
                                                'h4' => 'Titre 4',
                                            ])
                                            ->default('h2')
                                            ->required(),
                                        TextInput::make('content')
                                            ->label('Texte')
                                            ->required(),
                                    ])
                                    ->columns(2),

                                Builder\Block::make('paragraph')
                                    ->label('Paragraphe')
                                    ->schema([
                                        Textarea::make('content')
                                            ->label('Texte')
                                            ->rows(4)
                                            ->required(),
                                    ]),

                                Builder\Block::make('rich_text')
                                    ->label('Texte enrichi')
                                    ->schema([
                                        RichEditor::make('content')
                                            ->label('Contenu')
                                            ->toolbarButtons([
                                                'bold',
                                                'italic',
                                                'underline',
                                                'strike',
                                                'link',
                                                'bulletList',
                                                'orderedList',
                                                'h2',
                                                'h3',
                                                'blockquote',
                                                'codeBlock',
                                            ])
                                            ->required(),
                                    ]),

                                Builder\Block::make('image')
                                    ->label('Image')
                                    ->schema([
                                        FileUpload::make('url')
                                            ->label('Image')
                                            ->image()
                                            ->imageEditor()
                                            ->directory('articles/content')
                                            ->required(),
                                        TextInput::make('alt')
                                            ->label('Texte alternatif')
                                            ->helperText('Description de l\'image pour l\'accessibilité'),
                                        TextInput::make('caption')
                                            ->label('Légende')
                                            ->helperText('Texte affiché sous l\'image'),
                                    ]),

                                Builder\Block::make('code_img')
                                    ->label('Code (Image)')
                                    ->schema([
                                        FileUpload::make('url')
                                            ->label('Screenshot de code')
                                            ->image()
                                            ->imageEditor()
                                            ->directory('articles/code-snippets')
                                            ->helperText('Uploadez un screenshot du code (ex: depuis Carbon, Ray.so)')
                                            ->required(),
                                        TextInput::make('alt')
                                            ->label('Texte alternatif')
                                            ->helperText('Description du code pour l\'accessibilité')
                                            ->placeholder('Exemple : Composant Livewire SearchComponent'),
                                        TextInput::make('caption')
                                            ->label('Légende')
                                            ->helperText('Texte affiché sous l\'image')
                                            ->placeholder('Un composant de recherche en temps réel'),
                                    ]),

                                Builder\Block::make('code_text')
                                    ->label('Code (Texte)')
                                    ->schema([
                                        Select::make('language')
                                            ->label('Langage')
                                            ->options([
                                                'php' => 'PHP',
                                                'javascript' => 'JavaScript',
                                                'typescript' => 'TypeScript',
                                                'html' => 'HTML',
                                                'css' => 'CSS',
                                                'scss' => 'SCSS',
                                                'blade' => 'Blade',
                                                'json' => 'JSON',
                                                'yaml' => 'YAML',
                                                'bash' => 'Bash',
                                                'sql' => 'SQL',
                                                'python' => 'Python',
                                                'markdown' => 'Markdown',
                                            ])
                                            ->searchable()
                                            ->required()
                                            ->helperText('Sélectionnez le langage pour la coloration syntaxique'),
                                        Textarea::make('code')
                                            ->label('Code')
                                            ->rows(10)
                                            ->required()
                                            ->helperText('Collez votre code ici - il sera affiché avec coloration syntaxique'),
                                        TextInput::make('caption')
                                            ->label('Légende')
                                            ->helperText('Description du code (optionnel)')
                                            ->placeholder('Exemple : Configuration du service de recherche'),
                                    ]),

                                Builder\Block::make('quote')
                                    ->label('Citation')
                                    ->schema([
                                        Textarea::make('content')
                                            ->label('Citation')
                                            ->rows(3)
                                            ->required(),
                                        TextInput::make('author')
                                            ->label('Auteur'),
                                    ]),

                                Builder\Block::make('spacing')
                                    ->label('Espacement')
                                    ->schema([
                                        Select::make('size')
                                            ->options([
                                                '5' => '5px',
                                                '10' => '10px',
                                                '15' => '15px',
                                                '20' => '20px',
                                                '30' => '30px',
                                                '40' => '40px',
                                            ])
                                            ->default('10')
                                            ->required()
                                            ->label('Taille de l\'espacement'),
                                    ]),

                                Builder\Block::make('gallery')
                                    ->label('Galerie d\'images')
                                    ->schema([
                                        FileUpload::make('images')
                                            ->label('Images')
                                            ->multiple()
                                            ->image()
                                            ->imageEditor()
                                            ->directory('articles/galleries')
                                            ->reorderable()
                                            ->maxFiles(10)
                                            ->required(),
                                    ]),
                            ])
                            ->blockNumbers(false)
                            ->collapsed()
                            ->collapsible()
                            ->addActionLabel('Ajouter un bloc')
                            ->columnSpanFull(),
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

                        Toggle::make('is_featured')
                            ->label('Article en vedette')
                            ->default(false),

                        Toggle::make('is_published')
                            ->label('Publié')
                            ->default(true),
                    ])->columnSpanFull(),
            ]);
    }
}
