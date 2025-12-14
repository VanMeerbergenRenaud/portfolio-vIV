@props([
    'article',
    'reverse' => false
])

<article>
    <a href="{{ route('articles.show', $article->slug) }}"
       aria-label="Lire l'article : {{ $article->title }}"
       class="max-lg:bg-white p-1.5 rounded-2xl flex flex-col gap-2 lg:grid {{ $reverse ? 'lg:grid-cols-[1fr_30%]' : 'lg:grid-cols-[30%_1fr]' }} max-lg:border max-lg:border-transparent max-lg:border-dashed max-lg:hover:border-red group"
       wire:navigate
    >

        <div class="grid justify-between p-4 lg:p-6 lg:rounded-2xl lg:bg-white lg:border lg:border-transparent lg:border-dashed lg:group-hover:border-red {{ $reverse ? 'lg:order-2' : '' }}">
            <div class="flex flex-col gap-1.5">
                <time datetime="{{ $article->published_at->format('Y-m-d') }}" class="text-sm text-gray-medium">
                    {{ $article->published_at->format('M d, Y') }}
                </time>

                <h3 class="text-2xl font-medium">
                    {{ $article->title }}
                </h3>
            </div>

            <p class="mt-3 lg:mt-auto text-gray-medium">
                {{ $article->excerpt }}
            </p>
        </div>

        <div class="relative rounded-2xl overflow-hidden min-h-52 max-h-115 -order-1 {{ $reverse ? 'lg:order-1' : 'lg:order-none' }}">
            @if($article->cover_image)
                <noindex>
                    <img src="{{ Storage::disk('s3')->url($article->cover_image) }}"
                         alt="Image de couverture de l'article : {{ $article->title }}"
                         class="scale-110 group-hover:scale-100 group-focus:scale-100 transition-all duration-500 w-full h-full object-cover"
                         loading="lazy"
                         role="img"
                    >
                </noindex>
            @else
                <noindex>
                    <img src="{{ asset('img/placeholder.png') }}"
                         alt=""
                         role="presentation"
                         class="scale-110 group-hover:scale-100 group-focus:scale-100 transition-all duration-500 w-full h-full object-cover"
                         loading="lazy"
                    >
                </noindex>
            @endif

            <div class="z-2 absolute top-2 right-2" aria-hidden="true">
                <x-font.text-sm class="py-1 px-2 bg-whitesmoke rounded-lg">
                    <x-article.category-label :category="$article->category" />
                </x-font.text-sm>
            </div>
        </div>
    </a>
</article>
