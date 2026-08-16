<div>
    <x-schema.article-show :article="$article" />

    <div class="px-6 lg:px-12 pt-30 pb-25 lg:pt-45 flex flex-col gap-10">

        {{-- Article with aside --}}
        <article class="flex flex-col gap-10 lg:gap-15 lg:grid lg:grid-cols-[25%_1fr]">

            {{-- Left column --}}
            <aside
                class="flex flex-col gap-6 w-full max-w-185 self-start"
                role="complementary"
            >
                <h2 class="sr-only">Informations sur l'article</h2>

                {{-- Main card --}}
                <div class="flex flex-col gap-5 p-5 bg-gradient-to-br from-red/3 via-red/1 to-transparent rounded-xl border border-red/10">

                    {{-- Back link --}}
                    <nav aria-label="Fil d'Ariane" role="navigation">
                        <h3 class="sr-only">Navigation secondaire</h3>

                        <div class="flex items-center gap-1.5">
                            <span class="text-red text-xs" aria-hidden="true">|</span>
                            <x-font.text-sm>
                                <a href="{{ route('articles') }}"
                                   wire:navigate
                                   class="hover:text-red rounded transition-colors font-medium"
                                   aria-label="Retour à la liste des articles"
                                >
                                    Articles
                                </a>
                                {{-- Catégory --}}
                                @if($article->category)
                                    <span class="text-red text-xs mx-1" aria-hidden="true">→</span>
                                    <a href="{{ route('articles.category', $article->category) }}"
                                       wire:navigate
                                       class="hover:text-red rounded transition-colors font-medium"
                                       aria-label="Voir les articles de la catégorie {{ $article->category }}"
                                    >
                                        <x-article.category-label :category="$article->category"/>
                                    </a>
                                @endif
                            </x-font.text-sm>
                        </div>
                    </nav>

                    <div class="hidden lg:flex lg:flex-col lg:gap-6">
                        {{-- Reading time --}}
                        @if($article->reading_time)
                            <div class="flex items-baseline gap-1">
                                <x-font.text-lg class="font-medium">
                                    {{ $article->reading_time }}
                                </x-font.text-lg>
                                <x-font.text-sm class="text-gray-medium">
                                    <span aria-label="{{ $article->reading_time }} minutes de lecture">min de lecture</span>
                                </x-font.text-sm>
                            </div>
                        @endif

                        {{-- Divider --}}
                        <div class="h-px bg-red/10" role="separator" aria-hidden="true"></div>

                        {{-- Meta list --}}
                        <dl class="flex flex-col gap-3">
                            @if($article->published_at)
                                <div class="flex items-start gap-2">
                                    <span class="text-red text-xs" aria-hidden="true">→</span>
                                    <div class="flex-1 flex flex-col gap-0.5">
                                        <dt class="sr-only">Date de publication</dt>
                                        <dd>
                                            <x-font.text-xs class="text-gray-medium">
                                                Publié le
                                                <time
                                                    datetime="{{ $article->published_at->format('Y-m-d') }}"
                                                    class="ml-0.5 text-dark-primary"
                                                >
                                                    {{ $article->published_at->translatedFormat('d M Y') }}
                                                </time>
                                            </x-font.text-xs>
                                        </dd>
                                    </div>
                                </div>
                            @endif

                            @if($article->category)
                                <div class="flex items-start gap-2">
                                    <span class="text-red text-xs" aria-hidden="true">→</span>
                                    <div class="flex-1 flex flex-col gap-0.5">
                                        <dt class="sr-only">Catégorie de l'article</dt>
                                        <dd>
                                            <x-font.text-xs class="text-gray-medium">
                                                Catégorie
                                                <span class="ml-0.5 text-dark-primary">
                                                <x-article.category-label :category="$article->category"/>
                                            </span>
                                            </x-font.text-xs>
                                        </dd>
                                    </div>
                                </div>
                            @endif
                        </dl>

                        {{-- Tags --}}
                        @if($article->tags && count($article->tags) > 0)
                            <div>
                                <div class="h-px bg-red/10 mb-3" role="separator" aria-hidden="true"></div>
                                <div class="flex flex-col gap-2">
                                    <x-font.text-xs class="text-gray-medium" id="tags-label">
                                        Tags
                                    </x-font.text-xs>
                                    <ul class="flex flex-wrap gap-1.5" aria-labelledby="tags-label" role="list">
                                        @foreach($article->tags as $tag)
                                            <li>
                                                <span class="text-xs px-2 py-1 bg-white/70 text-gray-dark rounded hover:bg-white transition-colors">
                                                    {{ $tag }}
                                                </span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </aside>

            {{-- Right column --}}
            <div class="flex flex-col gap-8 max-w-185" id="main-content">
                <div class="flex flex-col gap-7">
                    <x-font.title-lg id="article-title">
                        {{ $article->title }}
                    </x-font.title-lg>

                    @if($article->excerpt)
                        <p class="text-lg text-gray-dark" role="doc-subtitle">
                            {{ $article->excerpt }}
                        </p>
                    @endif
                </div>

                @if($article->cover_image)
                    <figure class="rounded-2xl overflow-hidden min-h-50 max-h-150">
                        <img src="{{ Storage::disk('s3')->url($article->cover_image) }}"
                             alt="{{ $article->title }} - Image de couverture"
                             class="w-full h-full object-cover"
                             loading="eager"
                             fetchpriority="high"
                        >
                    </figure>
                @endif

                {{-- Table of Contents --}}
                @php
                    $headingIndex = 0;
                    $headings = collect($article->content_blocks ?? [])
                        ->map(function($block, $index) use (&$headingIndex) {
                            if ($block['type'] === 'heading') {
                                $level = $block['data']['level'] ?? 'h3';
                                return [
                                    'level' => $level,
                                    'content' => $block['data']['content'] ?? '',
                                    'id' => 'heading-' . $index,
                                    'order' => $level === 'h3' ? ++$headingIndex : null
                                ];
                            }
                            return null;
                        })
                        ->filter();
                @endphp

                @if($headings->isNotEmpty())
                    <nav
                        class="flex flex-col gap-4 py-5 px-6 bg-gradient-to-br from-red/5 via-red/3 to-transparent rounded-xl border border-red/10"
                        aria-labelledby="toc-heading"
                    >
                        <div class="flex items-center gap-1.5">
                            <span class="text-red text-xs" aria-hidden="true">|</span>
                            <x-font.text-md :isTitle="true" level="2" class="font-medium text-dark-primary" id="toc-heading">
                                Sommaire
                            </x-font.text-md>
                        </div>

                        <ol class="px-1 flex flex-col gap-2.5" role="list">
                            @foreach($headings as $heading)
                                <li class="flex items-start gap-2 {{ $heading['level'] === 'h4' ? 'pl-6' : '' }}">
                                    @if($heading['order'])
                                        <span class="text-gray-medium text-xs mt-0.5 min-w-4" aria-hidden="true">
                                            {{ str_pad($heading['order'], 2, '0', STR_PAD_LEFT) }}
                                        </span>
                                    @else
                                        <span class="text-red text-xs mt-0.5 mr-0.5" aria-hidden="true">→</span>
                                    @endif
                                    <a href="#{{ $heading['id'] }}"
                                       class="flex-1 hover:text-red rounded transition-colors text-sm text-gray-dark {{ $heading['level'] === 'h3' ? 'font-medium' : 'font-normal' }}"
                                       aria-label="Aller à la section : {{ $heading['content'] }}"
                                    >
                                        {{ $heading['content'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ol>
                    </nav>
                @endif

                <div class="prose prose-lg max-w-none" role="article">
                    @if($article->content_blocks)
                        @foreach($article->content_blocks as $index => $block)
                            @if($block['type'] === 'heading')
                                @php
                                    $block['data']['id'] = 'heading-' . $index;
                                @endphp
                            @endif

                            {{-- Content of the article --}}
                            <x-article.content-block :block="$block"/>
                        @endforeach
                    @endif
                </div>
            </div>
        </article>
    </div>

    {{-- Related articles - Outside the grid --}}
    @if($articles && count($articles) > 0)
        <section class="px-4 md:px-8 lg:px-10 py-15 flex flex-col gap-12">
            <h2 class="sr-only">
                Articles similaires
            </h2>

            <div class="px-2 flex flex-col justify-between md:items-end gap-7 md:flex-row">
                {{-- Title --}}
                <x-font.title-lg class="max-w-[625px]">
                    Explorez d'autres articles similaires
                </x-font.title-lg>

                {{-- Link --}}
                <x-link.secondary class="mt-4" link="{{ route('articles') }}">
                    Tous les articles
                </x-link.secondary>
            </div>

            {{-- Article list --}}
            <ul class="flex flex-col gap-2" role="list">
                @foreach($articles as $index => $relatedArticle)
                    <li>
                        <x-article.featured-card :article="$relatedArticle" :reverse="$index % 2 !== 0"/>
                    </li>
                @endforeach
            </ul>
        </section>
    @endif

    <x-cta />
</div>
