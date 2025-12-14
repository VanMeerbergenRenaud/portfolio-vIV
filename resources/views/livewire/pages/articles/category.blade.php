<div>
    <section id="articles" class="px-4 md:px-8 lg:px-10 pt-30 pb-25 lg:pt-52 lg:pb-40 flex flex-col gap-8 md:gap-12 lg:gap-20">

        {{-- Header section --}}
        <div class="flex flex-col gap-7">
            {{-- Infos --}}
            <div class="flex flex-col gap-1">
                <div class="flex items-center gap-1.5">
                    <x-font.text-md class="text-gray-light">
                        01
                    </x-font.text-md>

                    <span class="text-red" aria-hidden="true">|</span>

                    <x-font.text>
                        Articles
                    </x-font.text>
                </div>
                <x-font.text-sm class="pl-8.5 text-gray-medium">
                    Renaud Vmb®
                </x-font.text-sm>
            </div>

            <div class="flex flex-col justify-between md:items-end gap-7 md:flex-row">
                {{-- Title --}}
                <x-font.title-2xl :isTitle="true" level="2" class="max-w-[1000px]">
                    Articles <x-article.category-label :category="$category" />
                </x-font.title-2xl>

                {{-- List of categories --}}
                <ul class="flex flex-wrap gap-2 justify-end" role="list" aria-label="Filtrer les articles par catégorie">
                   <li>
                        <a href="{{ route('articles') }}"
                           aria-label="Afficher tous les articles"
                           class="inline-block px-4 py-2 rounded-lg border border-gray-200 hover:border-red hover:text-red transition-colors"
                           wire:navigate
                        >
                            <x-font.text-md>Tous</x-font.text-md>
                        </a>
                    </li>
                    @foreach($categories as $cat)
                        <li>
                            <a href="{{ route('articles.category', $cat) }}"
                               class="inline-block px-4 py-2 rounded-lg transition-colors {{ $cat->value === $category ? 'border border-red text-red' : 'border border-gray-200 hover:border-red hover:text-red' }}"
                               {{ $cat->value === $category ? 'aria-current="page"' : '' }}
                               aria-label="Afficher les articles de catégorie {{ $cat }}"
                               wire:navigate
                            >
                                <x-font.text-md>
                                    <x-article.category-label :category="$cat" />
                                </x-font.text-md>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- Article list --}}
        <ul class="flex flex-col gap-3 md:grid md:grid-cols-[repeat(2,minmax(100px,1fr))]">
            @forelse($articles as $article)
                <li>
                    <a href="{{ route('articles.show', $article->slug) }}"
                       title="Vers l'article {{ $article->title }}"
                       aria-label="Lire l'article {{ $article->title }}"
                       class="bg-white p-1.5 h-full rounded-2xl flex flex-col gap-2 border border-transparent border-dashed hover:border-red group"
                       wire:navigate
                    >
                        {{-- Title and reading time --}}
                        <div class="flex items-center justify-between gap-4 px-3 py-2">
                            <x-font.text-xl :isTitle="true" level="3" class="font-semibold">
                                {{ $article->title }}.
                            </x-font.text-xl>
                            @if($article->reading_time)
                                <x-font.text class="text-gray-medium">
                                    {{ $article->reading_time }} min
                                </x-font.text>
                            @endif
                        </div>

                        {{-- Cover image --}}
                        <div class="relative rounded-2xl overflow-hidden min-h-52 max-h-125">
                            <noindex>
                                <img
                                    src="{{ $article->cover_image ? Storage::disk('s3')->url($article->cover_image) : asset('img/placeholder.png') }}"
                                    alt="{{ $article->title ? 'Image de couverture de l\'article : ' . $article->title : '' }}"
                                    class="scale-110 group-hover:scale-100 transition-all duration-500 w-full h-full object-cover"
                                    loading="lazy"
                                >
                            </noindex>

                            {{-- Category label --}}
                            <div class="z-2 absolute left-4 bottom-4 bg-red text-white px-4 py-2 rounded-lg">
                                <x-font.text-sm class="font-semibold">
                                    <x-article.category-label :category="$article->category" />
                                </x-font.text-sm>
                            </div>
                        </div>
                    </a>
                </li>
            @empty
                <li class="col-span-full text-center py-10">
                    <x-font.text-lg class="text-gray-medium">
                        Aucun article n'est disponible pour cette catégorie.
                    </x-font.text-lg>
                </li>
            @endforelse
        </ul>
    </section>

    <x-cta />
</div>

