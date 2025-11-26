<div>
    <section id="articles" class="px-4 md:px-8 lg:px-10 pt-20 pb-30 lg:pt-30 lg:pb-40 flex flex-col gap-15">
        <h2 class="sr-only">
            Articles
        </h2>

        <div class="flex flex-col md:flex-row gap-7 md:grid md:grid-cols-[30%_1fr]">
            {{-- Infos --}}
            <div class="flex flex-col gap-1">
                <div class="flex items-center gap-1.5">
                    <x-font.text-md class="text-gray-light">
                        10
                    </x-font.text-md>

                    <span class="text-red" aria-hidden="true">|</span>

                    <x-font.text>
                        Articles
                    </x-font.text>
                </div>
                <x-font.text-sm class="pl-7.5 text-gray-medium">
                    Réflexions & tutoriels
                </x-font.text-sm>
            </div>

            <div class="flex flex-col justify-between md:items-end gap-7 md:flex-row">
                {{-- Title --}}
                <x-font.title-lg class="max-w-[550px]">
                    Mes réflexions.
                </x-font.title-lg>

                {{-- Link --}}
                <x-link.secondary
                    class="mt-4"
                    link="{{ route('articles') }}"
                    title="Vers mon blog"
                >
                    Tous les articles
                </x-link.secondary>
            </div>
        </div>

        {{-- Articles --}}
        <ul class="flex flex-col gap-2 lg:grid lg:grid-cols-2">
            @if($featuredBlog)
                <li class="col-span-2">
                    <x-article.featured-card :article="$featuredBlog" />
                </li>
            @endif

            @foreach($articles as $article)
                <li>
                    <x-article.card :article="$article" />
                </li>
            @endforeach
        </ul>
    </section>
</div>
