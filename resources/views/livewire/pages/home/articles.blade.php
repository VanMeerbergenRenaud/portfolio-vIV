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
                <x-font.title-lg level="3" class="max-w-[550px]">
                    Mes Réflexions.
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
                    <a href="{{ route('articles.show', $featuredBlog->slug) }}"
                       title="Vers l'article {{ $featuredBlog->title }}"
                       class="max-lg:bg-white p-1.5 rounded-2xl flex flex-col gap-2 lg:grid lg:grid-cols-[30%_1fr] max-lg:border max-lg:border-transparent max-lg:border-dashed max-lg:hover:border-red group"
                       wire:navigate
                    >
                        {{-- Infos --}}
                        <div class="grid justify-between p-4 lg:p-6 lg:rounded-2xl lg:bg-white lg:border lg:border-transparent lg:border-dashed lg:group-hover:border-red">

                            <div class="flex flex-col gap-1.5">
                                <x-font.text-sm class="text-gray-medium">
                                    {{ $featuredBlog->published_at->format('M d, Y') }}
                                </x-font.text-sm>

                                <x-font.text-2xl>
                                    {{ $featuredBlog->title }}
                                </x-font.text-2xl>
                            </div>

                            <x-font.text class="mt-3 lg:mt-auto text-gray-medium">
                                {{ $featuredBlog->excerpt }}
                            </x-font.text>
                        </div>

                        {{-- Image --}}
                        <div class="relative rounded-2xl overflow-hidden min-h-[300px] max-h-[450px] -order-1 lg:order-none">
                            @if($featuredBlog->image)
                                <img src="{{ Storage::url($featuredBlog->image) }}"
                                     alt="{{ $featuredBlog->title }}"
                                     class="scale-110 group-hover:scale-100 transition-all duration-500 w-full h-full object-cover"
                                     loading="lazy"
                                >
                            @else
                                <img src="{{ asset('img/placeholder.png') }}"
                                     alt="{{ $featuredBlog->title }}"
                                     class="scale-110 group-hover:scale-100 transition-all duration-500 w-full h-full object-cover"
                                     loading="lazy"
                                >
                            @endif

                            @if($featuredBlog->category)
                                <div class="z-2 absolute top-2 right-2">
                                    <x-font.text-sm class="py-1 px-2 bg-whitesmoke rounded-lg">
                                        {{ $featuredBlog->category }}
                                    </x-font.text-sm>
                                </div>
                            @endif
                        </div>
                    </a>
                </li>
            @endif

            @foreach($articles as $article)
                <li>
                    <a href="{{ route('articles.show', $article->slug) }}"
                       title="Vers l'article {{ $article->title }}"
                       class="bg-white p-1.5 rounded-2xl flex flex-col gap-2 border border-transparent hover:border-dashed hover:border-red group"
                       wire:navigate
                    >
                        {{-- Image --}}
                        <div class="relative rounded-2xl overflow-hidden min-h-[200px] max-h-[380px]">
                            @if($article->image)
                                <img src="{{ Storage::url($article->image) }}"
                                     alt="{{ $article->title }}"
                                     class="scale-110 group-hover:scale-100 transition-all duration-500 w-full h-full object-cover"
                                     loading="lazy"
                                >
                            @else
                                <img src="{{ asset('img/placeholder.png') }}"
                                     alt="{{ $article->title }}"
                                     class="scale-110 group-hover:scale-100 transition-all duration-500 w-full h-full object-cover"
                                     loading="lazy"
                                >
                            @endif

                            @if($article->category)
                                <div class="z-2 absolute top-2 right-2">
                                    <x-font.text-sm class="py-1 px-2 bg-whitesmoke rounded-lg">
                                        {{ $article->category }}
                                    </x-font.text-sm>
                                </div>
                            @endif
                        </div>

                        {{-- Infos --}}
                        <div class="grid justify-between p-4 lg:p-6">
                            <div class="flex flex-col gap-1.5">
                                <x-font.text-sm class="text-gray-medium">
                                    {{ $article->published_at->format('M d, Y') }}
                                </x-font.text-sm>

                                <x-font.text-2xl>
                                    {{ $article->title }}
                                </x-font.text-2xl>
                            </div>

                            <x-font.text class="mt-3 text-gray-medium">
                                {{ $article->excerpt }}
                            </x-font.text>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </section>
</div>
