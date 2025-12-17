@props([
    'article'
])

<article>
    <a href="{{ route('articles.show', $article->slug) }}"
       aria-label="Lire l'article : {{ $article->title }}"
       class="bg-white p-1.5 h-full rounded-2xl flex flex-col gap-2 border border-transparent border-dashed hover:border-red group"
       wire:navigate
    >
        {{-- Img --}}
        <div class="relative rounded-2xl overflow-hidden min-h-52 max-h-95">
            <noindex>
                <img
                    src="{{ $article->cover_image ? Storage::disk('s3')->url($article->cover_image) : asset('img/placeholder.png') }}"
                    alt="{{ $article->cover_image ? 'Image de couverture de l\'article : ' . $article->title : '' }}"
                    class="scale-110 group-hover:scale-100 transition-all duration-500 w-full h-full object-cover"
                    loading="lazy"
                >
            </noindex>

            @if($article->category)
                <div class="z-2 absolute top-2 right-2" aria-hidden="true">
                    <x-font.text-sm class="py-1 px-2 bg-whitesmoke rounded-lg">
                        <x-article.category-label :category="$article->category" />
                    </x-font.text-sm>
                </div>
            @endif
        </div>

        {{-- Content --}}
        <div class="grid justify-between p-4 lg:p-6">
            <div class="flex flex-col gap-1.5">
                <time datetime="{{ $article->published_at->format('Y-m-d') }}" class="text-sm text-gray-medium">
                    {{ $article->published_at->format('M d, Y') }}
                </time>

                <x-font.text-2xl :isTitle="true" level="3">
                    {{ $article->title }}
                </x-font.text-2xl>
            </div>

            <x-font.text class="mt-3 text-gray-medium">
                {{ $article->excerpt }}
            </x-font.text>
        </div>
    </a>
</article>
