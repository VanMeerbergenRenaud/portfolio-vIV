<div>
    <section id="projects" class="px-4 md:px-8 lg:px-10 pt-30 pb-25 lg:pt-52 lg:pb-40 flex flex-col gap-8 md:gap-12 lg:gap-20">

        {{-- Header section --}}
        <div class="flex flex-col gap-7">

            {{-- Infos --}}
            <div class="flex flex-col gap-1">
                <div class="flex items-center gap-1.5">
                    <x-font.text-md class="text-gray-light">
                        01
                    </x-font.text-md>

                    <span class="text-red" aria-hidden="true">|</span>

                    <x-font.text>
                        Projets - <x-projects.type-label :type="$type" />
                    </x-font.text>
                </div>
                <x-font.text-sm class="pl-8.5 text-gray-medium">
                    {{ $projects->count() }} projet{{ $projects->count() > 1 ? 's' : '' }}
                </x-font.text-sm>
            </div>

            {{-- Title and filters --}}
            <div class="flex flex-col justify-between md:items-end gap-7 md:flex-row">
                <x-font.title-2xl :isTitle="true" level="2" class="max-w-[1000px]">
                    Projets <x-projects.type-label :type="$type" />
                </x-font.title-2xl>

                {{-- List of types --}}
                <ul class="flex flex-wrap gap-2 justify-end" role="list" aria-label="Filtrer les projets par type">
                    <li>
                        <a href="{{ route('projects') }}"
                           aria-label="Afficher tous les projets"
                           class="inline-block px-4 py-2 rounded-lg border border-gray-200 hover:border-red hover:text-red transition-colors"
                           wire:navigate
                        >
                            <x-font.text-md>Tous</x-font.text-md>
                        </a>
                    </li>
                    @foreach($types as $projectType)
                        <li>
                            <a href="{{ route('projects.type', $projectType) }}"
                               class="inline-block px-4 py-2 rounded-lg border transition-colors {{ $projectType === $type ? 'border-red text-red' : 'border-gray-200 hover:border-red hover:text-red' }}"
                               aria-label="Afficher les projets de type {{ $projectType }}"
                               {{ $projectType === $type ? 'aria-current="page"' : '' }}
                               wire:navigate
                            >
                                <x-font.text-md>
                                    <x-projects.type-label :type="$projectType" />
                                </x-font.text-md>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- Project list --}}
        <ul class="flex flex-col gap-3 md:grid md:grid-cols-[repeat(2,minmax(100px,1fr))]">
            @forelse($projects as $index => $project)
                <li>
                    <a href="{{ route('projects.show', $project->slug) }}"
                       title="Vers le projet {{ $project->name }}"
                       aria-label="Voir le projet {{ $project->name }}"
                       class="bg-white p-1.5 h-full rounded-2xl flex flex-col gap-2 border border-transparent border-dashed hover:border-red group"
                       wire:navigate
                    >
                        {{-- Infos --}}
                        <div class="flex items-center justify-between gap-4 px-3 py-2">
                            <x-font.text-xl :isTitle="true" level="3" class="font-semibold">
                                {{ $project->name }}.
                            </x-font.text-xl>
                            <x-font.text class="text-gray-medium">
                                {{ $project->year }}
                            </x-font.text>
                        </div>

                        {{-- Image --}}
                        <div class="relative rounded-2xl overflow-hidden min-h-52 max-h-135 h-full">
                            <noindex>
                                <img
                                    src="{{ $project->image ? Storage::disk('s3')->url($project->image) : asset('img/placeholder.png') }}"
                                    alt="{{ $project->name ? 'Image du projet : ' . $project->name : '' }}"
                                    class="scale-110 group-hover:scale-100 transition-all duration-500 w-full h-full min-h-55 object-cover"
                                    loading="lazy"
                                >
                            </noindex>

                            {{-- Logo --}}
                            <div class="z-2 absolute left-4 bottom-4">
                                <noindex>
                                    <img
                                        src="{{ $project->logo_white ? Storage::disk('s3')->url($project->logo_white) : asset('img/projects/logo.svg') }}"
                                        alt="{{ $project->name ? 'Logo du projet : ' . $project->name : 'logo par défaut' }}"
                                        class="object-contain transition-all duration-600 py-1 px-2 min-w-24 max-w-32 max-h-18 group-hover:scale-115 group-hover:max-h-20 group-hover:-translate-y-1 group-hover:translate-x-2"
                                        loading="lazy"
                                    >
                                </noindex>
                            </div>
                        </div>
                    </a>
                </li>
            @empty
                <li class="col-span-full text-center py-10">
                    <x-font.text-lg class="text-gray-medium">
                        Aucun projet de type "<x-projects.type-label :type="$type" />" n'a été développé pour le moment.
                    </x-font.text-lg>
                </li>
            @endforelse
        </ul>
    </section>

    <x-cta />
</div>

