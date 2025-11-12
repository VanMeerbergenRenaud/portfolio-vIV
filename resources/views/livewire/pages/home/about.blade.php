<div>
    <section id="about" class="px-4 md:px-8 lg:px-10 pt-30 pb-20 md:pt-40 md:pb-25 lg:pt-50 lg:pb-30">
        <h2 role="heading" aria-level="2" class="sr-only">
            À propos de moi
        </h2>

        <div class="flex flex-col lg:grid lg:grid-cols-2 gap-15 lg:gap-25">

            {{-- Colonne de gauche --}}
            <div>
                <div class="flex justify-between items-center">
                    <div class="flex-center gap-1.5">
                        <x-font.text-md class="text-gray-light">
                            01
                        </x-font.text-md>

                        <span class="text-red" aria-hidden="true">|</span>

                        <x-font.text>
                            À propos
                        </x-font.text>
                    </div>
                    <x-font.text-sm class="text-gray-medium">2025</x-font.text-sm>
                </div>

                <x-font.title class="mt-8">
                    Artisan du code Laravel, je forge des applications web robustes, scalables et pensées pour tous les utilisateurs.
                </x-font.title>

                <x-font.text-lg class="mt-4 text-gray-medium max-w-[480px]">
                    Adepte des principes SOLID et du TDD, je vise le "zéro dette technique" pour un code qui reste propre et évolutif.
                </x-font.text-lg>

                <x-link.secondary link="#projects" class="mt-7 lg:mt-20">
                    En savoir plus
                </x-link.secondary>
            </div>

            {{-- Colonne de droite --}}
            <div>
                <div class="
                        grid grid-cols-2 gap-2 overflow-auto
                        lg:grid-cols-[minmax(6rem,8rem)_auto_auto_minmax(6rem,8rem)]
                        xl:grid-cols-[minmax(8rem,12rem)_auto_auto_minmax(8rem,12rem)]
                        2xl:grid-cols-[minmax(10rem,16rem)_auto_auto_minmax(10rem,16rem)]
                ">

                    {{-- CARTE 1: Stat 1 --}}
                    <div data-border="true"
                         class="bg-transparent p-5 pb-4 rounded-xl flex flex-col justify-between h-30 lg:col-start-2 lg:row-start-1">
                        <p class="text-xl font-medium">
                            {!! preg_replace('/([+x])/i', '<span class="text-xl font-medium text-[#FC4040]">$1</span>', $about->stat1_value) !!}
                        </p>
                        <p class="mt-1 text-sm text-neutral-500">{{ $about->stat1_label }}</p>
                    </div>

                    {{-- CARTE 2: Vide --}}
                    <div class="z-1 bg-white rounded-xl h-30 lg:col-start-3 lg:row-start-1"></div>

                    {{-- CARTE 3: Vide --}}
                    <div class="z-1 bg-white rounded-xl h-30 lg:col-start-2 lg:row-start-2"></div>

                    {{-- CARTE 4: Stat 2 --}}
                    <div data-border="true"
                         class="p-5 pb-3 rounded-xl flex flex-col justify-between h-30 lg:col-start-3 lg:row-start-2">
                        <p class="text-xl font-medium">
                            {!! preg_replace('/([+x])/i', '<span class="text-xl font-medium text-[#FC4040]">$1</span>', $about->stat2_value) !!}
                        </p>
                        <p class="mt-1 text-sm text-neutral-500">{{ $about->stat2_label }}</p>
                    </div>

                    {{-- CARTE 5: Stat 3 --}}
                    <div data-border="true"
                         class="p-5 pb-3 rounded-xl flex flex-col justify-between h-30 lg:col-start-2 lg:row-start-3">
                        <p class="text-xl font-medium">
                            {!! preg_replace('/([+x])/i', '<span class="text-xl font-medium text-[#FC4040]">$1</span>', $about->stat3_value) !!}
                        </p>
                        <p class="mt-1 text-sm text-neutral-500">{{ $about->stat3_label }}</p>
                    </div>

                    {{-- CARTE 6: Vide --}}
                    <div class="z-1 bg-white rounded-xl h-30 lg:col-start-3 lg:row-start-3"></div>

                    {{-- CARTE 7: Vide --}}
                    <div class="z-1 bg-white rounded-xl h-30 lg:col-start-2 lg:row-start-4"></div>

                    {{-- CARTE 8: Stat 4 --}}
                    <div data-border="true"
                         class="p-5 pb-3 rounded-xl flex flex-col justify-between h-30 lg:col-start-3 lg:row-start-4">
                        <p class="text-xl font-medium">
                            {!! preg_replace('/([+x])/i', '<span class="text-xl font-medium text-[#FC4040]">$1</span>', $about->stat4_value) !!}
                        </p>
                        <p class="mt-1 text-sm text-neutral-500">{{ $about->stat4_label }}</p>
                    </div>

                    {{-- Eléments uniquement visibles sur DESKTOP --}}

                    {{-- CARTE 9: Vide (Desktop seulement) --}}
                    <div class="hidden lg:block z-1 bg-white rounded-xl h-30 lg:col-start-1 lg:row-start-1"></div>

                    {{-- CARTE 10: Image 1 (Desktop seulement) --}}
                    <div
                        class="hidden lg:block z-1 bg-white rounded-xl h-30 lg:col-start-4 lg:row-start-1 overflow-hidden">
                        @if($about->image1)
                            <img src="{{ Storage::disk('s3')->url($about->image1) }}"
                                 alt="{{ $about->image1_alt ?? 'Image' }}"
                                 class="w-full h-full object-cover"
                                 loading="lazy"
                            >
                        @else
                            <img src="{{ asset('img/placeholder.png') }}"
                                 alt=""
                                 class="w-full h-full object-cover"
                                 loading="lazy"
                            >
                        @endif
                    </div>

                    {{-- CARTE 11: Image 2 (Desktop seulement) --}}
                    <div
                        class="hidden lg:block z-1 bg-white rounded-xl h-30 lg:col-start-1 lg:row-start-2 overflow-hidden">
                        @if($about->image2)
                            <img src="{{ Storage::disk('s3')->url($about->image2) }}"
                                 alt="{{ $about->image2_alt ?? 'Image' }}"
                                 class="w-full h-full object-cover"
                                 loading="lazy"
                            >
                        @else
                            <img src="{{ asset('img/placeholder.png') }}"
                                 alt=""
                                 class="w-full h-full object-cover"
                                 loading="lazy"
                            >
                        @endif
                    </div>

                    {{-- CARTE 12: Vide (Desktop seulement) --}}
                    <div class="hidden lg:block z-1 bg-white rounded-xl h-30 lg:col-start-4 lg:row-start-2"></div>

                    {{-- CARTE 13: Vide (Desktop seulement) --}}
                    <div class="hidden lg:block z-1 bg-white rounded-xl h-30 lg:col-start-1 lg:row-start-3"></div>

                    {{-- CARTE 14: Image 3 (Desktop seulement) --}}
                    <div
                        class="hidden lg:block z-1 bg-white rounded-xl h-30 lg:col-start-4 lg:row-start-3 overflow-hidden">
                        @if($about->image3)
                            <img src="{{ Storage::disk('s3')->url($about->image3) }}"
                                 alt="{{ $about->image3_alt ?? 'Image' }}"
                                 class="w-full h-full object-cover"
                                 loading="lazy"
                            >
                        @else
                            <img src="{{ asset('img/placeholder.png') }}"
                                 alt=""
                                 class="w-full h-full object-cover"
                                 loading="lazy"
                            >
                        @endif
                    </div>

                    {{-- CARTE 15: Image 4 (Desktop seulement) --}}
                    <div
                        class="hidden lg:block z-1 bg-white rounded-xl h-30 lg:col-start-1 lg:row-start-4 overflow-hidden">
                        @if($about->image4)
                            <img src="{{ Storage::disk('s3')->url($about->image4) }}"
                                 alt="{{ $about->image4_alt ?? 'Image' }}"
                                 class="w-full h-full object-cover"
                                 loading="lazy"
                            >
                        @else
                            <img src="{{ asset('img/placeholder.png') }}"
                                 alt=""
                                 class="w-full h-full object-cover"
                                 loading="lazy"
                            >
                        @endif
                    </div>

                    {{-- CARTE 16: Vide (Desktop seulement) --}}
                    <div class="hidden lg:block z-1 bg-white rounded-xl h-30 lg:col-start-4 lg:row-start-4"></div>
                </div>
            </div>
        </div>
    </section>
</div>
