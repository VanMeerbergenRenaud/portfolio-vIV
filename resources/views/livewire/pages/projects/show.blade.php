<div>
    <section class="px-4 md:px-8 lg:px-10 pt-30 pb-20 lg:pt-40 lg:pb-30 flex flex-col gap-15 lg:gap-20">

        {{-- Infos --}}
        <div class="flex flex-col gap-7">
            <div class="flex flex-col-reverse md:flex-col md:grid md:grid-cols-[1fr_30%] md:items-end gap-4 md:gap-6">
                <x-font.title-2xl :isTitle="true" level="2">
                    {{ $project->name }}
                </x-font.title-2xl>

                @if($project->logo_black)
                    <img
                        src="{{ Storage::disk('s3')->url($project->logo_black) }}"
                        alt="{{ $project->name }} logo"
                        class="max-w-25"
                    >
                @else
                    <img src="{{ asset('img/projects/logo.svg') }}"
                         alt="logo par défaut"
                         class="max-w-25"
                         loading="lazy"
                    >
                @endif
            </div>

            <div class="flex flex-col md:grid md:grid-cols-[1fr_30%] gap-4 md:gap-6">
                <div class="max-sm:order-2 max-sm:mt-4">
                    @if($project->image)
                        <img
                            src="{{ Storage::disk('s3')->url($project->image) }}"
                            alt="{{ $project->name }}"
                            class="rounded-2xl"
                            loading="lazy"
                        >
                    @else
                        <img src="{{ asset('img/placeholder.png') }}"
                             alt=""
                             class="rounded-2xl"
                             loading="lazy"
                        >
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
                            variant="wb"
                            :navigate="false"
                            target="_blank"
                        >
                            Visiter le site
                        </x-link.primary>
                    </div>
                </div>
            </div>
        </div>

        {{-- Project infos --}}
        <div class="pt-20 flex flex-col gap-15">

            {{-- Context--}}
            <div class="flex flex-col gap-7">
                <div class="flex items-center gap-1.5">
                    <span class="text-red" aria-hidden="true">|</span>

                    <x-font.text :isTitle="true" level="3">
                        Contexte de réalisation
                    </x-font.text>
                </div>

                {{-- Objectif/Contexte --}}
                @if($project->context_title || $project->context_description || ($project->context_gallery && count($project->context_gallery) > 0))
                    <div class="flex flex-col gap-6">
                        @if($project->context_title)
                            <x-font.title class="pr-4 max-w-220">
                                {{ $project->context_title }}
                            </x-font.title>
                        @endif

                        @if($project->context_description)
                            <x-font.text class="text-gray-medium max-w-175 leading-relaxed">
                                {{ $project->context_description }}
                            </x-font.text>
                        @endif

                        @if($project->context_gallery && count($project->context_gallery) > 0)
                            <div class="grid grid-cols-1 gap-4 my-8">
                                @foreach($project->context_gallery as $index => $image)
                                    <div class="rounded-2xl overflow-hidden {{ count($project->context_gallery) === 1 ? 'md:col-span-2' : '' }}">
                                        <img
                                            src="{{ Storage::disk('s3')->url($image) }}"
                                            alt="Image contexte {{ $project->name }} - {{ $index + 1 }}"
                                            class="gallery-zoom-effect w-full h-auto object-cover"
                                            loading="lazy"
                                        >
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                @else
                    <div class="p-6 bg-gray-50 rounded-2xl border border-dashed border-gray-200">
                        <x-font.text class="text-gray-medium text-center">
                            Aucun contexte renseigné pour ce projet
                        </x-font.text>
                    </div>
                @endif
            </div>

            {{-- Résultats --}}
            <div class="flex flex-col gap-7">
                <div class="flex items-center gap-1.5">
                    <span class="text-red" aria-hidden="true">|</span>

                    <x-font.text :isTitle="true" level="3">
                        Résultats obtenus
                    </x-font.text>
                </div>

                @if($project->results_title || $project->results_description || ($project->results_gallery && count($project->results_gallery) > 0))
                    <div class="flex flex-col gap-6">
                        @if($project->results_title)
                            <x-font.title class="pr-4 max-w-220">
                                {{ $project->results_title }}
                            </x-font.title>
                        @endif

                        @if($project->results_description)
                            <x-font.text class="text-gray-medium max-w-175 leading-relaxed">
                                {{ $project->results_description }}
                            </x-font.text>
                        @endif

                        @if($project->results_gallery && count($project->results_gallery) > 0)
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
                                @foreach($project->results_gallery as $index => $image)
                                    <div class="rounded-2xl overflow-hidden {{ count($project->results_gallery) === 1 ? 'md:col-span-2' : '' }}">
                                        <img
                                            src="{{ Storage::disk('s3')->url($image) }}"
                                            alt="Résultat {{ $project->name }} - {{ $index + 1 }}"
                                            class="gallery-zoom-effect w-full h-auto object-cover"
                                            loading="lazy"
                                        >
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                @else
                    <div class="p-6 bg-gray-50 rounded-2xl border border-dashed border-gray-200">
                        <x-font.text class="text-gray-medium text-center">
                            Aucun résultat renseigné pour ce projet
                        </x-font.text>
                    </div>
                @endif
            </div>

            {{-- Détails techniques --}}
            @if($project->tags || $project->roles || $project->difficulty || $project->tools_details)
                <div class="flex flex-col gap-7">
                    <div class="flex items-center gap-1.5">
                        <span class="text-red" aria-hidden="true">|</span>

                        <x-font.text :isTitle="true" level="3">
                            Détails techniques
                        </x-font.text>
                    </div>

                    <div class="flex flex-col gap-6">
                        <x-font.title class="pr-4 max-w-220">
                            Utilisation de technologies venant du fin fond du nectar technologique.
                        </x-font.title>

                        <x-font.text class="text-gray-medium max-w-175 leading-relaxed">
                            Découvrez les aspects techniques et les outils qui m'ont permis de mener à bien ce projet.
                            Que ce soit des outils open-source, des frameworks modernes ou des méthodologies agiles, chaque élément a joué un rôle crucial dans la réussite de cette réalisation.
                            Issu d'une réflexion approfondie, chaque choix technique a été fait pour garantir la qualité, la performance et la pérennité du projet.
                        </x-font.text>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        {{-- Technologies --}}
                        @if($project->tags && count($project->tags) > 0)
                            <div class="flex flex-col gap-4">
                                <x-font.text-md class="text-gray-medium">
                                    Technologies utilisées
                                </x-font.text-md>
                                <div class="flex flex-wrap gap-2">
                                    @foreach($project->tags as $tag)
                                        <span class="px-3 py-1.5 text-sm font-medium text-gray-dark bg-white rounded-lg hover:bg-gray-200 transition-colors duration-300">
                                        {{ $tag }}
                                    </span>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        {{-- Mes rôles --}}
                        @if($project->roles && count($project->roles) > 0)
                            <div class="flex flex-col gap-4">
                                <x-font.text-md class="text-gray-medium">
                                    Rôles & compétences
                                </x-font.text-md>
                                <div class="flex flex-wrap gap-2">
                                    @foreach($project->roles as $role)
                                        <x-project-role-label :role="$role"/>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        {{-- Outils & Logiciels --}}
                        @if($project->tools_details)
                            <div class="flex flex-col gap-4">
                                <x-font.text-md class="text-gray-medium">
                                    Outils & logiciels
                                </x-font.text-md>
                                <div class="flex flex-wrap gap-x-6 gap-y-4">
                                    @foreach($project->tools_details as $tool)
                                        <div class="flex items-center gap-2 group">
                                            <span class="w-1.5 h-1.5 rounded-full bg-red"></span>
                                            <x-font.text-md>
                                                {{ $tool->name }}
                                            </x-font.text-md>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        {{-- Complexité --}}
                        @if($project->difficulty)
                            <div class="flex flex-col gap-4 lg:pl-4">
                                <x-font.text-md class="text-gray-medium">
                                    Complexité
                                </x-font.text-md>
                                <div class="flex items-center gap-4">
                                    <div class="flex-1 h-1.5 max-w-2/3 bg-white rounded-full overflow-hidden">
                                        <div class="h-full rounded-full transition-all duration-700 ease-out
                                        {{ $project->difficulty->value === 'easy' ? 'w-1/3 bg-gray-dark' : '' }}
                                        {{ $project->difficulty->value === 'medium' ? 'w-2/3 bg-gray-dark' : '' }}
                                        {{ $project->difficulty->value === 'hard' ? 'w-full bg-gradient-to-r from-gray-dark to-red' : '' }}
                                    "></div>
                                    </div>
                                    <x-font.text-md class="text-dark-primary whitespace-nowrap">
                                        {{ $project->difficulty->label() }}
                                    </x-font.text-md>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            @endif

        </div>
    </section>

    {{-- Other projects --}}
    <section class="px-4 md:px-8 lg:px-10 py-15 flex flex-col gap-12 lg:gap-15">
        <h2 class="sr-only">
            Mes autres projets
        </h2>

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

        {{-- Project list --}}
        <x-projects.list :$projects />
    </section>

    <x-home.section.cta/>
</div>
