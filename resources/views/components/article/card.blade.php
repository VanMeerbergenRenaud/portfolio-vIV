@props([
    'article'
])

<article>
    <a href="{{ route('articles.show', $article->slug) }}"
       aria-label="Lire l'article : {{ $article->title }}"
       class="bg-white p-1.5 h-full rounded-2xl flex flex-col gap-2 border border-transparent hover:border-dashed hover:border-red focus:border-dashed focus:border-red focus:outline-none focus:ring-2 focus:ring-red focus:ring-offset-2 group"
       wire:navigate
    >
        <div class="relative rounded-2xl overflow-hidden min-h-[200px] max-h-[380px]">
            @if($article->cover_image)
                <img src="{{ Storage::disk('s3')->url($article->cover_image) }}"
                     alt="Image de couverture de l'article : {{ $article->title }}"
                     class="scale-110 group-hover:scale-100 group-focus:scale-100 transition-all duration-500 w-full h-full object-cover"
                     loading="lazy"
                >
            @else
                <img src="{{ asset('img/placeholder.png') }}"
                     alt=""
                     role="presentation"
                     class="scale-110 group-hover:scale-100 group-focus:scale-100 transition-all duration-500 w-full h-full object-cover"
                     loading="lazy"
                >
            @endif

            @if($article->category)
                <div class="z-2 absolute top-2 right-2" aria-hidden="true">
                    <x-font.text-sm class="py-1 px-2 bg-whitesmoke rounded-lg">
                        <x-article.category-label :category="$article->category" />
                    </x-font.text-sm>
                </div>
            @endif
        </div>

        <div class="grid justify-between p-4 lg:p-6">
            <div class="flex flex-col gap-1.5">
                <time datetime="{{ $article->published_at->format('Y-m-d') }}" class="text-sm text-gray-medium">
                    {{ $article->published_at->format('M d, Y') }}
                </time>

                <h3 class="text-2xl font-medium">
                    {{ $article->title }}
                </h3>
            </div>

            <p class="mt-3 text-gray-medium">
                {{ $article->excerpt }}
            </p>
        </div>
    </a>
</article>
