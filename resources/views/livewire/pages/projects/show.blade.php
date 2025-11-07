<div>
    <section class="px-4 md:px-8 lg:px-10 pt-30 pb-20 lg:pt-40 lg:pb-30 flex flex-col gap-15 lg:gap-20">

        {{-- Infos --}}
        <div class="flex flex-col gap-7">
            <div class="flex flex-col-reverse md:flex-col md:grid md:grid-cols-[1fr_30%] md:items-end gap-4 md:gap-6">
                <x-font.title-2xl level="2">
                    {{ $project->name }}
                </x-font.title-2xl>

                @if($project->logo)
                    <img
                        src="{{ Storage::disk('s3')->url($project->logo) }}"
                        alt="{{ $project->name }} logo"
                        class="max-w-25"
                    >
                @else
                    <p>Aucun logo</p>
                @endif
            </div>

            <div class="flex flex-col md:grid md:grid-cols-[1fr_30%] gap-4 md:gap-6">
                <div class="max-sm:order-2 max-sm:mt-4">
                    @if($project->image)
                        <img
                            src="{{ Storage::disk('s3')->url($project->image) }}"
                            alt="{{ $project->name }}"
                            class="rounded-2xl"
                        >
                    @else
                        <p>Aucune image</p>
                    @endif
                </div>

                <div class="grid justify-between gap-15">
                    <div>
                        <x-divider-dash class="hidden lg:block"/>

                        <x-font.text-xl class="pt-6 pr-4 text-gray-dark">
                            {{ $project->description ?? 'Non renseignée' }}
                        </x-font.text-xl>
                    </div>

                    <div class="mt-auto flex flex-col gap-8">
                        <div class="space-y-2.5">
                            @if($project->year)
                                <div class="flex items-baseline gap-1.5">
                                    <x-font.text-md class="text-gray-medium">Année</x-font.text-md>
                                    <x-divider-dash class="flex-1"/>
                                    <x-font.text-md>{{ $project->year }}</x-font.text-md>
                                </div>
                            @endif

                            @if($project->client)
                                <div class="flex items-baseline gap-1.5">
                                    <x-font.text-md class="text-gray-medium">Client</x-font.text-md>
                                    <x-divider-dash class="flex-1"/>
                                    <x-font.text-md>{{ $project->client }}</x-font.text-md>
                                </div>
                            @endif

                            @if($project->type)
                                <div class="flex items-baseline gap-1.5">
                                    <x-font.text-md class="text-gray-medium">Type</x-font.text-md>
                                    <x-divider-dash class="flex-1"/>
                                    <x-font.text-md>
                                        <x-project-type-label :type="$project->type"/>
                                    </x-font.text-md>
                                </div>
                            @endif

                            @if($project->duration)
                                <div class="flex items-baseline gap-1.5">
                                    <x-font.text-md class="text-gray-medium">Durée</x-font.text-md>
                                    <x-divider-dash class="flex-1"/>
                                    <x-font.text-md>{{ $project->duration }}</x-font.text-md>
                                </div>
                            @endif
                        </div>

                        <x-link.primary
                            link="{{ $project->url ?? '#' }}"
                            variant="bw"
                            :navigate="false"
                            target="_blank"
                        >
                            Visiter le site
                        </x-link.primary>
                    </div>
                </div>
            </div>
        </div>

        {{-- Details (img, text, etc.) --}}
        <div class="py-20 flex flex-col gap-7">
            <div class="flex items-center gap-1.5">
                <span class="text-red" aria-hidden="true">|</span>

                <x-font.text>
                    Contexte de réalisation
                </x-font.text>
            </div>

            {{-- Missing data in db--}}
            {{-- Objectif/Contexte --}}
            <div class="flex flex-col gap-4">
                <x-font.title class="pr-4">
                    {{-- context project title --}}
                </x-font.title>

                <x-font.text class="text-gray-medium">
                    {{-- context project description --}}
                </x-font.text>

                <ul>
                    <li>{{-- context project gallery (several images) --}}</li>
                </ul>
            </div>

            {{-- Résultats --}}
            <div class="flex flex-col gap-4">
                <x-font.title class="pr-4">
                    {{-- result project title --}}
                </x-font.title>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    {{-- Rôles --}}
                    <x-font.text class="text-gray-medium">
                        {{-- result project description --}}
                    </x-font.text>

                    <ul>
                        <li>{{-- result project gallery (several images) --}}</li>
                    </ul>
                </div>

                {{-- Exhausitive list of details --}}
                <ul class="mb-12">
                    <li>1. Roles (front, back, design,..), || Select multiple (like tags)</li>
                    <li>2. Rapidité (GTMetrics, Lighthouse,...), || String</li>
                    <li>3. Difficulté (facile, moyen, difficile), || Select</li>
                    <li>4. Outils utilisés (Figma, VSCode, Laravel,...), || Select multiple (like tags)</li>
                    <li>5. durée de développement (6mois, 300h,...), || String</li>
                </ul>
            </div>

            <div class="flex flex-col justify-between md:items-end gap-7 md:flex-row">
                {{-- Title --}}
                <x-font.title-lg class="max-w-[625px]">
                    Explorez d'autres de mes réalisations.
                </x-font.title-lg>

                {{-- Link --}}
                <x-link.secondary class="mt-4" link="{{ route('projects') }}">
                    Tous les projets
                </x-link.secondary>
            </div>

            <ul class="flex flex-col gap-2 md:grid md:grid-cols-[repeat(2,minmax(100px,1fr))] lg:flex">
                @foreach($projects as $index => $project)
                    @php
                        $isReverse = $index % 2 !== 0;
                        $gridClass = $isReverse ? 'lg:grid-cols-[1fr_30%]' : 'lg:grid-cols-[30%_1fr]';
                        $orderClass = $isReverse ? 'lg:order-2' : '';
                    @endphp

                    <li>
                        <a href="{{ route('projects.show', $project->slug) }}"
                           title="Vers le projet {{ $project->name }}"
                           class="max-lg:bg-white p-1.5 rounded-2xl flex flex-col gap-2 lg:grid {{ $gridClass }} max-lg:border max-lg:border-transparent max-lg:border-dashed max-lg:hover:border-red group"
                           wire:navigate
                        >
                            {{-- Infos --}}
                            <div
                                class="grid justify-between p-2 lg:p-6 lg:rounded-2xl lg:bg-white lg:border lg:border-transparent lg:border-dashed lg:group-hover:border-red {{ $orderClass }}">
                                <div>
                                    <x-font.text-lg class="flex justify-between gap-1">
                                        {{ $project->name }}
                                        <span
                                            class="block lg:hidden text-sm text-gray-medium">{{ $project->year }}</span>
                                    </x-font.text-lg>

                                    <x-font.text-md class="hidden lg:block lg:mt-3 text-gray-medium">
                                        {{ $project->description }}
                                    </x-font.text-md>
                                </div>

                                <div class="hidden lg:block mt-auto space-y-2.5">
                                    @if($project->year)
                                        <div class="flex items-baseline gap-1.5">
                                            <x-font.text-md class="text-gray-medium">Année</x-font.text-md>
                                            <x-divider-dash class="flex-1"/>
                                            <x-font.text-md>{{ $project->year }}</x-font.text-md>
                                        </div>
                                    @endif

                                    @if($project->client)
                                        <div class="flex items-baseline gap-1.5">
                                            <x-font.text-md class="text-gray-medium">Client</x-font.text-md>
                                            <x-divider-dash class="flex-1"/>
                                            <x-font.text-md>{{ $project->client }}</x-font.text-md>
                                        </div>
                                    @endif

                                    @if($project->type)
                                        <div class="flex items-baseline gap-1.5">
                                            <x-font.text-md class="text-gray-medium">Type</x-font.text-md>
                                            <x-divider-dash class="flex-1"/>
                                            <x-font.text-md>
                                                <x-project-type-label :type="$project->type"/>
                                            </x-font.text-md>
                                        </div>
                                    @endif

                                    @if($project->duration)
                                        <div class="flex items-baseline gap-1.5">
                                            <x-font.text-md class="text-gray-medium">Durée</x-font.text-md>
                                            <x-divider-dash class="flex-1"/>
                                            <x-font.text-md>{{ $project->duration }}</x-font.text-md>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            {{-- Image --}}
                            <div class="relative rounded-2xl overflow-hidden max-h-[550px]">
                                @if($project->image)
                                    <img src="{{ Storage::disk('s3')->url($project->image) }}"
                                         alt="{{ $project->name }}"
                                         class="scale-110 group-hover:scale-100 transition-all duration-500 w-full h-full object-cover"
                                         loading="lazy"
                                    >
                                @else
                                    <img src="{{ asset('img/placeholder.png') }}"
                                         alt="{{ $project->name }}"
                                         class="scale-110 group-hover:scale-100 transition-all duration-500 w-full h-full object-cover"
                                         loading="lazy"
                                    >
                                @endif

                                @if($project->logo)
                                    <div
                                        class="z-2 absolute max-lg:left-4 bottom-4 {{ $isReverse ? 'lg:left-6' : 'lg:right-6' }}">
                                        <img src="{{ Storage::disk('s3')->url($project->logo) }}"
                                             alt="{{ $project->name }} logo"
                                             class="
                                            object-contain transition-all duration-600 p-1
                                            min-w-24 max-w-32 max-h-16
                                            group-hover:scale-115 group-hover:max-h-18
                                            group-hover:-translate-y-1
                                            {{ $isReverse ? 'lg:group-hover:translate-x-2' : 'lg:group-hover:-translate-x-2' }}
                                        "
                                             loading="lazy"
                                        >
                                    </div>
                                @else
                                    <div
                                        class="z-2 absolute max-lg:left-4 bottom-4 {{ $isReverse ? 'lg:left-6' : 'lg:right-6' }}">
                                        <img src="{{ asset('img/projects/logo.svg') }}"
                                             alt="logo par défaut"
                                             class="
                                            object-contain transition-all duration-600 p-1
                                            min-w-24 max-w-32 max-h-16
                                            group-hover:scale-115 group-hover:max-h-18
                                            group-hover:-translate-y-1
                                            {{ $isReverse ? 'lg:group-hover:translate-x-2' : 'lg:group-hover:-translate-x-2' }}
                                        "
                                             loading="lazy"
                                        >
                                    </div>
                                @endif
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <x-home.section.cta/>
</div>
