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
            ],
            'jobTitle' => 'Développeur Web Fullstack',
            'description' => 'Développeur fullstack spécialisé en Laravel et Livewire basé à Liège, Belgique.',
            'email' => 'mailto:renaud.vanmeerbergen@gmail.com',
            'telephone' => '+32 470 59 60 65',
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'Neupré',
                'addressRegion' => 'Liège',
                'postalCode' => '4120',
                'addressCountry' => 'BE',
            ],
            'nationality' => ['@type' => 'Country', 'name' => 'Belgique'],
            'knowsLanguage' => ['fr', 'en'],
            'knowsAbout' => [
                'Laravel', 'PHP', 'Livewire', 'Tailwind CSS', 'Alpine.js',
                'Vue.js', 'JavaScript', 'MySQL', 'Git', 'Docker', 'Filament',
            ],
            'sameAs' => [
                'https://www.linkedin.com/in/renaud-van-meerbergen/',
                'https://github.com/VanMeerbergenRenaud',
                'https://www.instagram.com/web_developer.renaud/',
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
            'datePublished' => '2023-01-01',
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
            'inLanguage' => 'fr-BE',
        ];
    }

    protected function getBlogSchema($articles): array
    {
        return [
            '@type' => 'Blog',
            '@id' => route('articles').'#blog',
            'url' => route('articles'),
            'name' => 'Blog - Renaud Van Meerbergen',
            'description' => 'Articles, réflexions et tutoriels sur le développement web, Laravel et les bonnes pratiques.',
            'isPartOf' => ['@id' => url('/').self::WEBSITE_ID],
            'author' => ['@id' => url('/').self::PERSON_ID],
            'publisher' => ['@id' => url('/').self::PERSON_ID],
            'inLanguage' => 'fr-BE',
            'blogPost' => $articles->map(function ($article) {
                return ['@id' => route('articles.show', $article->slug).'#article'];
            })->toArray(),
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
                        '@id' => route('projects.show', $project->slug),
                        'name' => $project->name,
                        'description' => $project->description,
                        'url' => route('projects.show', $project->slug),
                        'image' => ['@type' => 'ImageObject', 'url' => $imageUrl],
                        'dateCreated' => $project->year,
                        'creator' => ['@id' => url('/').self::PERSON_ID],
                        'keywords' => is_array($project->tags) ? implode(', ', $project->tags) : $project->tags,
                    ],
                ];

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

                return [
                    '@type' => 'ListItem',
                    'position' => $index + 1,
                    'item' => [
                        '@type' => 'BlogPosting',
                        '@id' => route('articles.show', $article->slug).'#article',
                        'headline' => $article->title,
                        'description' => $article->excerpt,
                        'url' => route('articles.show', $article->slug),
                        'image' => ['@type' => 'ImageObject', 'url' => $imageUrl],
                        'datePublished' => $article->created_at?->toIso8601String(),
                        'dateModified' => $article->updated_at?->toIso8601String(),
                        'author' => ['@id' => url('/').self::PERSON_ID],
                        'publisher' => ['@id' => url('/').self::PERSON_ID],
                        'timeRequired' => 'PT'.($article->reading_time ?? 5).'M',
                        'articleSection' => $article->category?->value ?? $article->category,
                        'keywords' => is_array($article->tags) ? implode(', ', $article->tags) : $article->tags,
                        'inLanguage' => 'fr-BE',
                    ],
                ];
            })->toArray(),
        ];
    }

    protected function getProjectDetailSchema(Project $project): array
    {
        $imageUrl = $project->image
            ? Storage::disk('s3')->url($project->image)
            : asset('img/placeholder.png');

        $schema = [
            '@type' => 'WebPage',
            '@id' => route('projects.show', $project->slug).'#webpage',
            'url' => route('projects.show', $project->slug),
            'name' => $project->name,
            'description' => $project->description,
            'isPartOf' => ['@id' => url('/').self::WEBSITE_ID],
            'inLanguage' => 'fr-BE',
            'mainEntity' => [
                '@type' => 'CreativeWork',
                '@id' => route('projects.show', $project->slug).'#project',
                'name' => $project->name,
                'description' => $project->description,
                'url' => route('projects.show', $project->slug),
                'image' => ['@type' => 'ImageObject', 'url' => $imageUrl],
                'creator' => ['@id' => url('/').self::PERSON_ID],
                'dateCreated' => $project->year ? $project->year.'-01-01' : null,
                'keywords' => is_array($project->tags) ? implode(', ', $project->tags) : $project->tags,
            ],
        ];

        if ($project->url) {
            $schema['mainEntity']['url'] = $project->url;
        }

        if ($project->client) {
            $schema['mainEntity']['sourceOrganization'] = [
                '@type' => 'Organization',
                'name' => $project->client,
            ];
        }

        return $schema;
    }

    protected function getArticleDetailSchema(Article $article): array
    {
        $imageUrl = $article->cover_image
            ? Storage::disk('s3')->url($article->cover_image)
            : asset('img/placeholder.png');

        return [
            '@type' => 'BlogPosting',
            '@id' => route('articles.show', $article->slug).'#article',
            'mainEntityOfPage' => route('articles.show', $article->slug),
            'headline' => $article->title,
            'description' => $article->excerpt,
            'url' => route('articles.show', $article->slug),
            'image' => [
                '@type' => 'ImageObject',
                'url' => $imageUrl,
            ],
            'datePublished' => $article->published_at?->toIso8601String() ?? $article->created_at?->toIso8601String(),
            'dateModified' => $article->updated_at?->toIso8601String(),
            'author' => ['@id' => url('/').self::PERSON_ID],
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'Renaud Van Meerbergen',
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => asset('img/opengraph.png'),
                ],
            ],
            'articleSection' => $article->category?->value ?? $article->category,
            'keywords' => is_array($article->tags) ? implode(', ', $article->tags) : $article->tags,
            'inLanguage' => 'fr-BE',
        ];
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
