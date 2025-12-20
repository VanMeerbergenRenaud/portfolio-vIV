<?php

namespace App\Services;

use App\Models\Article;
use App\Models\Faq;
use App\Models\Hero;
use App\Models\Project;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;

class SchemaService
{
    private const PERSON_ID = '#person';

    private const WEBSITE_ID = '#website';

    private const ORGANIZATION_ID = '#organization';

    public function getHomeSchema(): array
    {
        $hero = Hero::published()->first();
        $services = Service::published()->ordered()->get();
        $testimonials = Testimonial::published()->ordered()->get();
        $faqs = Faq::published()->ordered()->get();

        return [
            '@context' => 'https://schema.org',
            '@graph' => array_filter([
                $this->getWebSiteSchema(),
                $this->getPersonSchema($hero),
                $this->getHomePageSchema(),
                $this->getProfessionalServiceSchema($services, $testimonials),
                $this->getFaqSchema($faqs),
                $this->getBreadcrumbSchema([
                    ['name' => 'Accueil', 'url' => url('/')],
                ]),
            ]),
        ];
    }

    public function getAboutSchema(): array
    {
        $hero = Hero::published()->first();

        return [
            '@context' => 'https://schema.org',
            '@graph' => array_filter([
                $this->getWebSiteSchema(),
                $this->getPersonSchema($hero),
                $this->getAboutPageSchema(),
                $this->getBreadcrumbSchema([
                    ['name' => 'Accueil', 'url' => url('/')],
                    ['name' => 'À propos', 'url' => route('about')],
                ]),
            ]),
        ];
    }

    public function getProjectsIndexSchema(): array
    {
        $projects = Project::published()->ordered()->get();

        return [
            '@context' => 'https://schema.org',
            '@graph' => array_filter([
                $this->getWebSiteSchema(),
                $this->getProjectsCollectionPageSchema($projects),
                $this->getProjectsListSchema($projects),
                $this->getBreadcrumbSchema([
                    ['name' => 'Accueil', 'url' => url('/')],
                    ['name' => 'Projets', 'url' => route('projects')],
                ]),
            ]),
        ];
    }

    public function getArticlesIndexSchema(): array
    {
        $articles = Article::published()->ordered()->get();

        return [
            '@context' => 'https://schema.org',
            '@graph' => array_filter([
                $this->getWebSiteSchema(),
                $this->getBlogSchema($articles),
                $this->getArticlesListSchema($articles),
                $this->getBreadcrumbSchema([
                    ['name' => 'Accueil', 'url' => url('/')],
                    ['name' => 'Articles', 'url' => route('articles')],
                ]),
            ]),
        ];
    }

    public function getProjectShowSchema(Project $project): array
    {
        $hero = Hero::published()->first();

        return [
            '@context' => 'https://schema.org',
            '@graph' => array_filter([
                $this->getWebSiteSchema(),
                $this->getPersonSchema($hero),
                $this->getProjectDetailSchema($project),
                $this->getBreadcrumbSchema([
                    ['name' => 'Accueil', 'url' => url('/')],
                    ['name' => 'Projets', 'url' => route('projects')],
                    ['name' => $project->name, 'url' => route('projects.show', $project->slug)],
                ]),
            ]),
        ];
    }

    public function getArticleShowSchema(Article $article): array
    {
        $hero = Hero::published()->first();

        return [
            '@context' => 'https://schema.org',
            '@graph' => array_filter([
                $this->getWebSiteSchema(),
                $this->getPersonSchema($hero),
                $this->getArticleDetailSchema($article),
                $this->getBreadcrumbSchema([
                    ['name' => 'Accueil', 'url' => url('/')],
                    ['name' => 'Articles', 'url' => route('articles')],
                    ['name' => $article->title, 'url' => route('articles.show', $article->slug)],
                ]),
            ]),
        ];
    }

    protected function getWebSiteSchema(): array
    {
        return [
            '@type' => 'WebSite',
            '@id' => url('/').self::WEBSITE_ID,
            'url' => url('/'),
            'name' => 'Renaud Van Meerbergen - Portfolio',
            'description' => 'Portfolio de Renaud Van Meerbergen, développeur fullstack spécialisé en Laravel',
            'publisher' => ['@id' => url('/').self::PERSON_ID],
            'inLanguage' => 'fr-BE',
        ];
    }

    protected function getPersonSchema(?Hero $hero): array
    {
        $imageUrl = $hero && $hero->hero_image
            ? Storage::disk('s3')->url($hero->hero_image)
            : asset('img/opengraph.png');

        return [
            '@type' => 'Person',
            '@id' => url('/').self::PERSON_ID,
            'name' => 'Renaud Van Meerbergen',
            'givenName' => 'Renaud',
            'familyName' => 'Van Meerbergen',
            'alternateName' => 'Renaud Vmb',
            'url' => url('/'),
            'image' => [
                '@type' => 'ImageObject',
                '@id' => url('/').'#personimage',
                'url' => $imageUrl,
                'contentUrl' => $imageUrl,
                'caption' => 'Renaud Van Meerbergen - Développeur Web Fullstack',
            ],
            'jobTitle' => 'Développeur Web Fullstack',
            'description' => 'Développeur web fullstack spécialisé en Laravel et Livewire basé à Liège, Belgique.',
            'email' => 'renaud.vanmeerbergen@gmail.com',
            'telephone' => '+32470596065',
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'Neupré',
                'addressRegion' => 'Liège',
                'postalCode' => '4120',
                'addressCountry' => 'BE',
            ],
            'workLocation' => [
                '@type' => 'Place',
                'address' => [
                    '@type' => 'PostalAddress',
                    'addressLocality' => 'Neupré',
                    'addressRegion' => 'Liège',
                    'addressCountry' => 'BE',
                ],
            ],
            'nationality' => [
                '@type' => 'Country',
                'name' => 'Belgique',
            ],
            'knowsLanguage' => [
                ['@type' => 'Language', 'name' => 'Français', 'alternateName' => 'fr'],
                ['@type' => 'Language', 'name' => 'Anglais', 'alternateName' => 'en'],
            ],
            'knowsAbout' => [
                'Laravel', 'PHP', 'Livewire', 'Tailwind CSS', 'Alpine.js',
                'Vue.js', 'JavaScript', 'MySQL', 'Git', 'Docker', 'Filament',
            ],
            'sameAs' => [
                'https://github.com/VanMeerbergenRenaud',
                'https://www.linkedin.com/in/renaud-van-meerbergen/',
                'https://www.youtube.com/channel/UCw3jlTRtedA59dgZ6IL9ltA',
                'https://www.raycast.com/RenaudVmb',
                'https://x.com/RenaudVmb',
                'https://www.instagram.com/web_developer.renaud/',
                'https://stackoverflow.com/users/20922404/van-meerbergen-renaud',
                'https://gravatar.com/renaudvanmeerbergen',
                'https://about.me/renaud_vmb',
            ],
        ];
    }

    protected function getHomePageSchema(): array
    {
        return [
            '@type' => 'ProfilePage',
            '@id' => url('/').'#webpage',
            'url' => url('/'),
            'name' => 'Renaud Van Meerbergen - Développeur Fullstack Laravel',
            'description' => 'Développeur fullstack spécialisé en Laravel. Je transforme le chaos des specs en code élégant, performant et qui traverse le temps.',
            'isPartOf' => ['@id' => url('/').self::WEBSITE_ID],
            'about' => ['@id' => url('/').self::PERSON_ID],
            'mainEntity' => ['@id' => url('/').self::PERSON_ID],
            'inLanguage' => 'fr-BE',
            'datePublished' => '2023-01-01T00:00:00+01:00',
            'dateModified' => now()->toIso8601String(),
        ];
    }

    public function getLaravelWrappedSchema(): array
    {
        $hero = Hero::published()->first();

        return [
            '@context' => 'https://schema.org',
            '@graph' => array_filter([
                $this->getWebSiteSchema(),
                $this->getPersonSchema($hero),
                $this->getLaravelWrappedPageSchema(),
                $this->getBreadcrumbSchema([
                    ['name' => 'Accueil', 'url' => url('/')],
                    ['name' => 'Laravel Wrapped', 'url' => route('laravel-wrapped')],
                ]),
            ]),
        ];
    }

    protected function getLaravelWrappedPageSchema(): array
    {
        return [
            '@type' => 'WebPage',
            '@id' => route('laravel-wrapped').'#webpage',
            'url' => route('laravel-wrapped'),
            'name' => 'Laravel Wrapped 2025 - Renaud Van Meerbergen',
            'description' => 'Ma rétrospective Laravel 2025 : statistiques, projets et évolution de mes compétences avec le framework Laravel.',
            'isPartOf' => ['@id' => url('/').self::WEBSITE_ID],
            'about' => ['@id' => url('/').self::PERSON_ID],
            'mainEntity' => ['@id' => url('/').self::PERSON_ID],
            'inLanguage' => 'fr-BE',
            'datePublished' => now()->startOfYear()->toIso8601String(),
            'dateModified' => now()->toIso8601String(),
        ];
    }

    protected function getAboutPageSchema(): array
    {
        return [
            '@type' => 'AboutPage',
            '@id' => route('about').'#webpage',
            'url' => route('about'),
            'name' => 'À propos de Renaud Van Meerbergen',
            'description' => 'Découvrez le parcours, les compétences et l\'expérience de Renaud Van Meerbergen, développeur fullstack Laravel.',
            'isPartOf' => ['@id' => url('/').self::WEBSITE_ID],
            'about' => ['@id' => url('/').self::PERSON_ID],
            'mainEntity' => ['@id' => url('/').self::PERSON_ID],
            'inLanguage' => 'fr-BE',
        ];
    }

    protected function getProjectsCollectionPageSchema($projects): array
    {
        return [
            '@type' => 'CollectionPage',
            '@id' => route('projects').'#webpage',
            'url' => route('projects'),
            'name' => 'Projets - Renaud Van Meerbergen',
            'description' => 'Découvrez les projets de développement web réalisés par Renaud Van Meerbergen avec Laravel, Livewire et Tailwind CSS.',
            'isPartOf' => ['@id' => url('/').self::WEBSITE_ID],
            'about' => ['@id' => url('/').self::PERSON_ID],
            'mainEntity' => ['@id' => url('/').'#projects'],
            'inLanguage' => 'fr-BE',
            'dateModified' => now()->toIso8601String(),
        ];
    }

    protected function getBlogSchema($articles): array
    {
        $blogPosts = $articles->map(function ($article) {
            return ['@id' => route('articles.show', $article->slug).'#article'];
        })->toArray();

        return [
            '@type' => ['Blog', 'CollectionPage'],
            '@id' => route('articles').'#webpage',
            'url' => route('articles'),
            'name' => 'Blog - Renaud Van Meerbergen',
            'description' => 'Articles, réflexions et tutoriels sur le développement web, Laravel et les bonnes pratiques.',
            'isPartOf' => ['@id' => url('/').self::WEBSITE_ID],
            'author' => ['@id' => url('/').self::PERSON_ID],
            'publisher' => ['@id' => url('/').self::PERSON_ID],
            'inLanguage' => 'fr-BE',
            'dateModified' => now()->toIso8601String(),
            'mainEntity' => ['@id' => route('articles').'#articlelist'],
            'blogPost' => $blogPosts,
        ];
    }

    protected function getProfessionalServiceSchema($services, $testimonials = null): array
    {
        $schema = [
            '@type' => 'ProfessionalService',
            '@id' => url('/').self::ORGANIZATION_ID,
            'name' => 'Renaud Van Meerbergen - Développeur Web Fullstack',
            'description' => 'Services de développement d\'applications web fullstack avec Laravel, Livewire et Tailwind CSS.',
            'url' => url('/'),
            'logo' => ['@type' => 'ImageObject', 'url' => asset('img/opengraph.png')],
            'image' => asset('img/opengraph.png'),
            'email' => 'renaud.vanmeerbergen@gmail.com',
            'telephone' => '+32 470 59 60 65',
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'Neupré',
                'addressRegion' => 'Liège',
                'addressCountry' => 'BE',
            ],
            'areaServed' => ['@type' => 'Country', 'name' => 'Belgique'],
            'priceRange' => '€€',
            'founder' => ['@id' => url('/').self::PERSON_ID],
            'sameAs' => [
                'https://www.linkedin.com/in/renaud-van-meerbergen/',
                'https://github.com/VanMeerbergenRenaud',
            ],
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => 'Services de développement web',
                'itemListElement' => $services->map(function ($service) {
                    return [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => $service->title,
                            'description' => $service->description,
                        ],
                    ];
                })->toArray(),
            ],
        ];

        if ($testimonials && $testimonials->isNotEmpty()) {
            $avgRating = $testimonials->avg('rating');
            $schema['aggregateRating'] = [
                '@type' => 'AggregateRating',
                'ratingValue' => round($avgRating, 1),
                'bestRating' => 5,
                'worstRating' => 1,
                'reviewCount' => $testimonials->count(),
            ];
            $schema['review'] = $testimonials->map(function ($testimonial) {
                return [
                    '@type' => 'Review',
                    'author' => ['@type' => 'Person', 'name' => $testimonial->name],
                    'reviewRating' => [
                        '@type' => 'Rating',
                        'ratingValue' => $testimonial->rating,
                        'bestRating' => 5,
                    ],
                    'reviewBody' => $testimonial->content,
                ];
            })->toArray();
        }

        return $schema;
    }

    protected function getProjectsListSchema($projects): ?array
    {
        if ($projects->isEmpty()) {
            return null;
        }

        return [
            '@type' => 'ItemList',
            '@id' => url('/').'#projects',
            'name' => 'Projets réalisés',
            'description' => 'Portfolio des projets de développement web réalisés par Renaud Van Meerbergen',
            'numberOfItems' => $projects->count(),
            'itemListElement' => $projects->map(function ($project, $index) {
                $imageUrl = $project->image
                    ? Storage::disk('s3')->url($project->image)
                    : asset('img/placeholder.png');

                $item = [
                    '@type' => 'ListItem',
                    'position' => $index + 1,
                    'item' => [
                        '@type' => 'CreativeWork',
                        '@id' => route('projects.show', $project->slug).'#project',
                        'name' => $project->name,
                        'description' => $project->description,
                        'url' => route('projects.show', $project->slug),
                        'image' => [
                            '@type' => 'ImageObject',
                            'url' => $imageUrl,
                            'caption' => $project->name,
                        ],
                        'creator' => ['@id' => url('/').self::PERSON_ID],
                        'author' => ['@id' => url('/').self::PERSON_ID],
                        'inLanguage' => 'fr-BE',
                    ],
                ];

                if ($project->year) {
                    $item['item']['dateCreated'] = $project->year.'-01-01T00:00:00+01:00';
                }

                if ($project->tags) {
                    $item['item']['keywords'] = is_array($project->tags) ? implode(', ', $project->tags) : $project->tags;
                }

                if ($project->duration) {
                    $item['item']['temporalCoverage'] = $project->duration;
                }

                if ($project->client) {
                    $item['item']['sourceOrganization'] = [
                        '@type' => 'Organization',
                        'name' => $project->client,
                    ];
                }

                return $item;
            })->toArray(),
        ];
    }

    protected function getFaqSchema($faqs): ?array
    {
        if ($faqs->isEmpty()) {
            return null;
        }

        return [
            '@type' => 'FAQPage',
            '@id' => url('/').'#faq',
            'mainEntity' => $faqs->map(function ($faq) {
                return [
                    '@type' => 'Question',
                    'name' => $faq->question,
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => $faq->answer,
                    ],
                ];
            })->toArray(),
        ];
    }

    protected function getArticlesListSchema($articles): ?array
    {
        if ($articles->isEmpty()) {
            return null;
        }

        return [
            '@type' => 'ItemList',
            '@id' => route('articles').'#articlelist',
            'name' => 'Articles - Renaud Van Meerbergen',
            'description' => 'Liste des articles sur le développement web et Laravel',
            'numberOfItems' => $articles->count(),
            'itemListElement' => $articles->map(function ($article, $index) {
                $imageUrl = $article->cover_image
                    ? Storage::disk('s3')->url($article->cover_image)
                    : asset('img/placeholder.png');

                $item = [
                    '@type' => 'ListItem',
                    'position' => $index + 1,
                    'item' => [
                        '@type' => 'BlogPosting',
                        '@id' => route('articles.show', $article->slug).'#article',
                        'headline' => $article->title,
                        'description' => $article->excerpt,
                        'url' => route('articles.show', $article->slug),
                        'image' => [
                            '@type' => 'ImageObject',
                            'url' => $imageUrl,
                            'caption' => $article->title,
                        ],
                        'datePublished' => $article->published_at?->toIso8601String() ?? $article->created_at?->toIso8601String(),
                        'dateModified' => $article->updated_at?->toIso8601String(),
                        'author' => ['@id' => url('/').self::PERSON_ID],
                        'publisher' => ['@id' => url('/').self::PERSON_ID],
                        'mainEntityOfPage' => route('articles.show', $article->slug),
                        'inLanguage' => 'fr-BE',
                    ],
                ];

                if ($article->reading_time) {
                    $item['item']['timeRequired'] = 'PT'.($article->reading_time).'M';
                }

                if ($article->category) {
                    $item['item']['articleSection'] = $article->category?->value ?? $article->category;
                }

                if ($article->tags) {
                    $item['item']['keywords'] = is_array($article->tags) ? implode(', ', $article->tags) : $article->tags;
                }

                return $item;
            })->toArray(),
        ];
    }

    protected function getProjectDetailSchema(Project $project): array
    {
        $imageUrl = $project->image
            ? Storage::disk('s3')->url($project->image)
            : asset('img/placeholder.png');

        $mainEntity = [
            '@type' => 'CreativeWork',
            '@id' => route('projects.show', $project->slug).'#project',
            'name' => $project->name,
            'description' => $project->description,
            'image' => [
                '@type' => 'ImageObject',
                'url' => $imageUrl,
                'caption' => $project->name,
            ],
            'creator' => ['@id' => url('/').self::PERSON_ID],
            'author' => ['@id' => url('/').self::PERSON_ID],
            'inLanguage' => 'fr-BE',
        ];

        if ($project->url) {
            $mainEntity['url'] = $project->url;
        }

        if ($project->year) {
            $mainEntity['dateCreated'] = $project->year.'-01-01T00:00:00+01:00';
        }

        if ($project->tags) {
            $mainEntity['keywords'] = is_array($project->tags) ? implode(', ', $project->tags) : $project->tags;
        }

        if ($project->duration) {
            $mainEntity['temporalCoverage'] = $project->duration;
        }

        if ($project->client) {
            $mainEntity['sourceOrganization'] = [
                '@type' => 'Organization',
                'name' => $project->client,
            ];
        }

        return [
            '@type' => 'WebPage',
            '@id' => route('projects.show', $project->slug).'#webpage',
            'url' => route('projects.show', $project->slug),
            'name' => $project->name.' - Renaud Van Meerbergen',
            'description' => $project->description,
            'isPartOf' => ['@id' => url('/').self::WEBSITE_ID],
            'inLanguage' => 'fr-BE',
            'dateModified' => $project->updated_at?->toIso8601String() ?? now()->toIso8601String(),
            'mainEntity' => $mainEntity,
        ];
    }

    protected function getArticleDetailSchema(Article $article): array
    {
        $imageUrl = $article->cover_image
            ? Storage::disk('s3')->url($article->cover_image)
            : asset('img/placeholder.png');

        $schema = [
            '@type' => 'BlogPosting',
            '@id' => route('articles.show', $article->slug).'#article',
            'mainEntityOfPage' => [
                '@type' => 'WebPage',
                '@id' => route('articles.show', $article->slug),
            ],
            'headline' => $article->title,
            'description' => $article->excerpt,
            'url' => route('articles.show', $article->slug),
            'image' => [
                '@type' => 'ImageObject',
                'url' => $imageUrl,
                'caption' => $article->title,
            ],
            'datePublished' => $article->published_at?->toIso8601String() ?? $article->created_at?->toIso8601String(),
            'dateModified' => $article->updated_at?->toIso8601String(),
            'author' => [
                '@type' => 'Person',
                '@id' => url('/').self::PERSON_ID,
                'name' => 'Renaud Van Meerbergen',
            ],
            'publisher' => [
                '@type' => 'Person',
                '@id' => url('/').self::PERSON_ID,
                'name' => 'Renaud Van Meerbergen',
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => asset('img/opengraph.png'),
                ],
            ],
            'inLanguage' => 'fr-BE',
            'isPartOf' => [
                '@id' => route('articles').'#blog',
            ],
        ];

        if ($article->category) {
            $schema['articleSection'] = $article->category?->value ?? $article->category;
        }

        if ($article->tags) {
            $schema['keywords'] = is_array($article->tags) ? implode(', ', $article->tags) : $article->tags;
        }

        if ($article->reading_time) {
            $schema['timeRequired'] = 'PT'.($article->reading_time).'M';
        }
        if ($article->content_blocks && is_array($article->content_blocks)) {
            $textContent = collect($article->content_blocks)
                ->filter(fn ($block) => in_array($block['type'] ?? '', ['paragraph', 'heading', 'list']))
                ->map(function ($block) {
                    if ($block['type'] === 'paragraph') {
                        return $block['data']['content'] ?? '';
                    }
                    if ($block['type'] === 'heading') {
                        return $block['data']['content'] ?? '';
                    }
                    if ($block['type'] === 'list') {
                        return collect($block['data']['items'] ?? [])->implode(' ');
                    }

                    return '';
                })
                ->implode(' ');

            $wordCount = str_word_count(strip_tags($textContent));
            if ($wordCount > 0) {
                $schema['wordCount'] = $wordCount;
            }
        }

        return $schema;
    }

    protected function getBreadcrumbSchema(array $items): array
    {
        return [
            '@type' => 'BreadcrumbList',
            '@id' => url()->current().'#breadcrumb',
            'itemListElement' => collect($items)->map(function ($item, $index) {
                return [
                    '@type' => 'ListItem',
                    'position' => $index + 1,
                    'name' => $item['name'],
                    'item' => $item['url'],
                ];
            })->toArray(),
        ];
    }
}
