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
                    <img src="{{ asset('img/projects/logo.svg') }}"
                         alt=""
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

                    <x-font.text>
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
                            <x-font.text class="text-gray-medium max-w-150 leading-relaxed">
                                {{ $project->context_description }}
                            </x-font.text>
                        @endif

                        @if($project->context_gallery && count($project->context_gallery) > 0)
                            <div class="grid grid-cols-1 gap-4 my-8">
                                @foreach($project->context_gallery as $index => $image)
                                    <img
                                        src="{{ Storage::disk('s3')->url($image) }}"
                                        alt="Image contexte {{ $project->name }} - {{ $index + 1 }}"
                                        class="rounded-2xl w-full h-auto object-cover {{ count($project->context_gallery) === 1 ? 'md:col-span-2' : '' }}"
                                        loading="lazy"
                                    >
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

                    <x-font.text>
                        Résultats obtenus
                    </x-font.text>
                </div>

                @if($project->results_title || $project->results_description || ($project->results_gallery && count($project->results_gallery) > 0))
                    <div class="flex flex-col gap-6">
                        @if($project->results_title)
                            <x-font.title class="pr-4 max-w-225">
                                {{ $project->results_title }}
                            </x-font.title>
                        @endif

                        @if($project->results_description)
                            <x-font.text class="text-gray-medium max-w-150 leading-relaxed">
                                {{ $project->results_description }}
                            </x-font.text>
                        @endif

                        @if($project->results_gallery && count($project->results_gallery) > 0)
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
                                @foreach($project->results_gallery as $index => $image)
                                    <img
                                        src="{{ Storage::disk('s3')->url($image) }}"
                                        alt="Résultat {{ $project->name }} - {{ $index + 1 }}"
                                        class="rounded-2xl w-full h-auto object-cover hover:scale-[1.02] transition-transform duration-300 {{ count($project->results_gallery) === 1 ? 'md:col-span-2' : '' }}"
                                        loading="lazy"
                                    >
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
            <div class="flex flex-col gap-7">
                <div class="flex items-center gap-1.5">
                    <span class="text-red" aria-hidden="true">|</span>

                    <x-font.text>
                        Détails techniques
                    </x-font.text>
                </div>

                    {{-- Technologies utilisées --}}
                <div class="flex flex-col gap-8">
                    {{-- Technologies utilisées --}}
                    @if($project->tags && count($project->tags) > 0)
                        <div class="flex flex-col gap-4">
                            <x-font.title class="pr-4">
                                Technologies
                            </x-font.title>
                            <div class="flex flex-wrap gap-2">
                                @foreach($project->tags as $tag)
                                    <span class="px-4 py-2 bg-white border border-gray-200 text-gray-dark rounded-lg text-sm font-medium hover:border-red transition-colors">
                                        {{ $tag }}
                                    </span>
                                @endforeach
                            </div>
                        </div>

                        {{-- Informations complémentaires --}}
                        @if($project->roles || $project->difficulty || $project->tools_details)
                            <div class="flex flex-col gap-8">
                                {{-- Mes rôles --}}
                                @if($project->roles && count($project->roles) > 0)
                                    <div class="flex flex-col gap-3">
                                        <div class="flex items-baseline gap-1.5">
                                            <x-font.text-md class="text-gray-medium">Mes rôles</x-font.text-md>
                                            <x-divider-dash class="flex-1"/>
                                        </div>
                                        <div class="flex flex-wrap gap-2">
                                            @foreach($project->roles as $role)
                                                <x-project-role-label :role="$role"/>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif

                                {{-- Complexité --}}
                                @if($project->difficulty)
                                    <div class="flex flex-col gap-3">
                                        <div class="flex items-baseline gap-1.5">
                                            <x-font.text-md class="text-gray-medium">Complexité</x-font.text-md>
                                            <x-divider-dash class="flex-1"/>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="flex-1 max-w-[200px] h-1 bg-gray-100 rounded-full overflow-hidden">
                                                <div class="h-full rounded-full transition-all duration-500
                                                    {{ $project->difficulty->value === 'easy' ? 'w-1/3 bg-gray-dark' : '' }}
                                                    {{ $project->difficulty->value === 'medium' ? 'w-2/3 bg-gray-dark' : '' }}
                                                    {{ $project->difficulty->value === 'hard' ? 'w-full bg-gray-dark' : '' }}
                                                "></div>
                                            </div>
                                            <x-font.text-md class="text-gray-dark font-medium">
                                                {{ $project->difficulty->label() }}
                                            </x-font.text-md>
                                        </div>
                                    </div>
                                @endif

                                {{-- Outils & Logiciels --}}
                                @if($project->tools_details && $project->tools_details->isNotEmpty())
                                    <div class="flex flex-col gap-3">
                                        <div class="flex items-baseline gap-1.5">
                                            <x-font.text-md class="text-gray-medium">Outils & Logiciels</x-font.text-md>
                                            <x-divider-dash class="flex-1"/>
                                        </div>
                                        <div class="flex flex-col gap-2">
                                            @foreach($project->tools_details as $tool)
                                                <div class="flex items-center gap-2">
                                                    <span class="w-1 h-1 rounded-full bg-gray-medium"></span>
                                                    <x-font.text-md class="text-gray-dark">
                                                        {{ $tool->name }}
                                                    </x-font.text-md>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </section>

    {{-- Other projects --}}
    <section class="px-4 md:px-8 lg:px-10 py-15 flex flex-col gap-12 lg:gap-15">
        <h2 role="heading" aria-level="2" class="sr-only">
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

        <x-projects.list :$projects />
    </section>

    <x-home.section.cta/>
</div>
