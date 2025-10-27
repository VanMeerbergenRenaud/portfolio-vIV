<div>
    {{-- Hero section--}}
    <section class="px-4 lg:px-10 pt-30 pb-5 lg:pt-38">
        <div class="flex flex-col gap-7">

            <div class="lg:grid gap-5 lg:grid-cols-[1fr_285px]">
                <x-font.title-2xl>
                    Portfolio — Web®
                </x-font.title-2xl>

                <x-font.text-xl class="lg:pt-6">
                    <span aria-hidden="true" class="px-7"></span>We create timeless design and strategic marketing that
                    <span class="text-neutral-500">make brands impossible to ignore.</span>
                </x-font.text-xl>
            </div>

            {{-- Image --}}
            <div class="lg:grid gap-5 lg:grid-cols-[1fr_285px]">
                <div class="relative group overflow-hidden rounded-2xl max-h-[590px]">
                    <img
                        src="{{ asset('img/me.jpeg') }}"
                        alt="Portrait of a person with motion blur effect, representing creative work."
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                    >
                </div>

                {{-- Colonne droite--}}
                <div class="flex flex-col justify-between pb-1">

                    <x-divider-dash class="hidden lg:block"/>

                    {{-- Informations du haut --}}
                    <ul class="flex flex-col gap-0.5 pt-6">
                        <li class="flex justify-between items-center">
                            <x-font.text-md>Branding</x-font.text-md>
                            <span
                                class="bg-gray-light h-[1px] overflow-clip rounded-[3px] flex-none w-2 relative"></span>
                        </li>
                        <li class="flex justify-between items-center">
                            <x-font.text-md>Digital design</x-font.text-md>
                            <span
                                class="bg-gray-light h-[1px] overflow-clip rounded-[3px] flex-none w-2 relative"></span>
                        </li>
                        <li class="flex justify-between items-center">
                            <x-font.text-md>Marketing strategy</x-font.text-md>
                            <span
                                class="bg-gray-light h-[1px] overflow-clip rounded-[3px] flex-none w-2 relative"></span>
                        </li>
                        <li class="flex justify-between items-center">
                            <x-font.text-md>Creative production</x-font.text-md>
                            <span
                                class="bg-gray-light h-[1px] overflow-clip rounded-[3px] flex-none w-2 relative"></span>
                        </li>
                    </ul>

                    {{-- Informations du milieu --}}
                    <div class="py-8 lg:py-28">
                        <x-font.text-xs class="text-neutral-500">
                            © 2017 - 2025
                        </x-font.text-xs>

                        <x-font.text-sm>
                            Based in Germany
                        </x-font.text-sm>
                    </div>

                    {{-- Informations du bas --}}
                    <div>
                        <div class="flex items-center">
                            <x-svg.star/>
                            <x-svg.star/>
                            <x-svg.star/>
                            <x-svg.star/>
                            <x-svg.star/>
                            <x-font.text-sm>4.9/5</x-font.text-sm>
                        </div>

                        <x-font.text-sm class="mt-1.5 text-gray-light">
                            We've helped
                            <span class="text-dark-primary">95+ brands</span><br>
                            elevate their businesses
                        </x-font.text-sm>

                        <x-divider-dash class="my-4"/>

                        <div class="flex justify-between gap-2">
                            <x-font.text-md class="flex items-center gap-2">
                                <span class="bg-green-400 rounded-full w-2 h-2 flex-shrink-0"></span> Available for Sep.
                            </x-font.text-md>
                            <x-font.text-md class="text-gray-dark">3 spots</x-font.text-md>
                        </div>

                        <x-font.link class="mt-4">
                            Start a project
                        </x-font.link>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- About us section --}}
    <section class="px-4 lg:px-10 pt-30 pb-20 lg:pt-49 lg:pb-28">

        <div class="lg:grid lg:grid-cols-2 lg:gap-x-24">

            {{-- Colonne de gauche: Contenu texte (prend 5/12 de l'espace sur desktop) --}}
            <div>
                <div class="flex justify-between items-center text-sm-medium">
                    <h3 class="flex items-center gap-2 subtitle">
                        <span class="text-sm-medium leading-5 tracking-tight text-[#9E9E9E]">01</span>
                        <span class="w-0.5 h-3 bg-gray-light" aria-hidden="true"></span>
                        <span class="text">About us</span>
                    </h3>
                    <span class="text-xs-medium text-neutral-500">© 2025</span>
                </div>

                <h2 class="mt-9 title">
                    Averra is a digital agency that help brands stand out and scale with bold design and smart
                    marketing.
                </h2>

                <p class="mt-6 text">
                    We blend bold creativity with strategic insight to help brands lead in the digital age.
                </p>

                <a href="#" class="mt-20 inline-flex items-center gap-2 group border-b border-neutral-900">
                    <span class="link">More about us</span>
                    <x-svg.arrow/>
                </a>
            </div>

            {{-- Colonne de droite: Grille de stats & images (prend 7/12 de l'espace sur desktop) --}}
            <div class="mt-12 lg:mt-0">

                <div class="grid grid-cols-2 lg:grid-cols-[128px_180px_180px_128px] gap-2">

                    {{-- CARTE 1: 12+ --}}
                    <div data-border="true"
                         class="bg-transparent p-5 pb-4 rounded-xl flex flex-col justify-between h-30 lg:col-start-2 lg:row-start-1">
                        <p class="text-xl font-medium">
                            12<span class="text-xl font-medium text-[#FC4040]">+</span>
                        </p>
                        <p class="mt-1 text-sm text-neutral-500">Years of experience</p>
                    </div>

                    {{-- CARTE 2: Vide --}}
                    <div class="z-1 bg-white rounded-xl h-30 lg:col-start-3 lg:row-start-1"></div>

                    {{-- CARTE 3: Vide --}}
                    <div class="z-1 bg-white rounded-xl h-30 lg:col-start-2 lg:row-start-2"></div>

                    {{-- CARTE 4: 95+ --}}
                    <div data-border="true"
                         class="p-5 pb-3 rounded-xl flex flex-col justify-between h-30 lg:col-start-3 lg:row-start-2">
                        <p class="text-xl font-medium">
                            200<span class="text-xl font-medium text-[#FC4040]">%</span>
                        </p>
                        <p class="mt-1 text-sm text-neutral-500">Brands Elevated</p>
                    </div>

                    {{-- CARTE 5: 200% --}}
                    <div data-border="true"
                         class="p-5 pb-3 rounded-xl flex flex-col justify-between h-30 lg:col-start-2 lg:row-start-3">
                        <p class="text-xl font-medium">
                            12<span class="text-xl font-medium text-[#FC4040]">+</span>
                        </p>
                        <p class="mt-1 text-sm text-neutral-500">Average Growth</p>
                    </div>

                    {{-- CARTE 6: Vide --}}
                    <div class="z-1 bg-white rounded-xl h-30 lg:col-start-3 lg:row-start-3"></div>

                    {{-- CARTE 7: Vide --}}
                    <div class="z-1 bg-white rounded-xl h-30 lg:col-start-2 lg:row-start-4"></div>

                    {{-- CARTE 8: 1M+ --}}
                    <div data-border="true"
                         class="p-5 pb-3 rounded-xl flex flex-col justify-between h-30 lg:col-start-3 lg:row-start-4">
                        <p class="text-xl font-medium">
                            12<span class="text-xl font-medium text-[#FC4040]">+</span>
                        </p>
                        <p class="mt-1 text-sm text-neutral-500">Campaign Impressions</p>
                    </div>

                    {{-- Eléments uniquement visibles sur DESKTOP --}}

                    {{-- CARTE 9: Vide (Desktop seulement) --}}
                    <div class="hidden lg:block z-1 bg-white rounded-xl h-30 lg:col-start-1 lg:row-start-1"></div>

                    {{-- CARTE 10: Image Building (Desktop seulement) --}}
                    <div
                        class="hidden lg:block z-1 bg-white rounded-xl h-30 lg:col-start-4 lg:row-start-1 overflow-hidden">
                        <img src="{{ asset('img/placeholder.png') }}"
                             alt="Modern architectural building with red light" class="w-full h-full object-cover">
                    </div>

                    {{-- CARTE 11: Image Zen Stones (Desktop seulement) --}}
                    <div
                        class="hidden lg:block z-1 bg-white rounded-xl h-30 lg:col-start-1 lg:row-start-2 overflow-hidden">
                        <img src="{{ asset('img/placeholder.png') }}" alt="Stack of balanced zen stones"
                             class="w-full h-full object-cover">
                    </div>

                    {{-- CARTE 12: Vide (Desktop seulement) --}}
                    <div class="hidden lg:block z-1 bg-white rounded-xl h-30 lg:col-start-4 lg:row-start-2"></div>

                    {{-- CARTE 13: Vide (Desktop seulement) --}}
                    <div class="hidden lg:block z-1 bg-white rounded-xl h-30 lg:col-start-1 lg:row-start-3"></div>

                    {{-- CARTE 14: Image Mannequin (Desktop seulement) --}}
                    <div
                        class="hidden lg:block z-1 bg-white rounded-xl h-30 lg:col-start-4 lg:row-start-3 overflow-hidden">
                        <img src="{{ asset('img/placeholder.png') }}" alt="Futuristic black mannequin bust"
                             class="w-full h-full object-cover">
                    </div>

                    {{-- CARTE 15: Image Desk (Desktop seulement) --}}
                    <div
                        class="hidden lg:block z-1 bg-white rounded-xl h-30 lg:col-start-1 lg:row-start-4 overflow-hidden">
                        <img src="{{ asset('img/placeholder.png') }}"
                             alt="Modern desk setup with tablet and keyboard" class="w-full h-full object-cover">
                    </div>

                    {{-- CARTE 16: Vide (Desktop seulement) --}}
                    <div class="hidden lg:block z-1 bg-white rounded-xl h-30 lg:col-start-4 lg:row-start-4"></div>
                </div>
            </div>
        </div>
    </section>
</div>
