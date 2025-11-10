<div>
    <section id="projects" class="px-4 md:px-8 lg:px-10 pt-30 pb-25 lg:pt-52 lg:pb-40 flex flex-col gap-8 md:gap-12 lg:gap-20">
        <h2 role="heading" aria-level="2" class="sr-only">
            Mes projets
        </h2>

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
                        Projets
                    </x-font.text>
                </div>
                <x-font.text-sm class="pl-8.5 text-gray-medium">
                    Renaud Vmb®
                </x-font.text-sm>
            </div>

            <div class="flex flex-col justify-between md:items-end gap-7 md:flex-row">
                {{-- Title --}}
                <x-font.title-2xl class="max-w-[625px]">
                    Projets
                </x-font.title-2xl>

                {{-- List of different project types --}}
                <ul class="flex flex-wrap gap-2">
                   <li>
                        <a href="{{ route('projects') }}"
                           title="Voir tous les projets"
                           class="inline-block px-4 py-2 rounded-lg transition-colors {{ request()->routeIs('projects') ? 'border border-red text-red' : 'border border-gray-200 hover:border-red hover:text-red' }}"
                           wire:navigate
                        >
                            <x-font.text-md>Tous</x-font.text-md>
                        </a>
                    </li>
                    @foreach($types as $type)
                        <li>
                            <a href="{{ route('projects.type', $type) }}"
                               title="Voir les projets de type {{ $type }}"
                               class="inline-block px-4 py-2 rounded-lg border border-gray-200 hover:border-red hover:text-red transition-colors"
                               wire:navigate
                            >
                                <x-font.text-md>
                                    <x-project-type-label :type="$type" />
                                </x-font.text-md>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- Project list --}}
        <ul class="flex flex-col gap-2 md:grid md:grid-cols-[repeat(2,minmax(100px,1fr))]">
            @forelse($projects as $index => $project)
                <li>
                    <a href="{{ route('projects.show', $project->slug) }}"
                       title="Vers le projet {{ $project->name }}"
                       class="bg-white p-1.5 h-full rounded-2xl flex flex-col gap-2 border border-transparent border-dashed hover:border-red group"
                       wire:navigate
                    >
                        {{-- Infos --}}
                        <div class="flex items-center justify-between gap-4 px-3 py-2">
                            <x-font.text-xl class="font-semibold">
                                {{ $project->name }}.
                            </x-font.text-xl>
                            <x-font.text class="text-gray-medium">
                                {{ $project->year }}
                            </x-font.text>
                        </div>

                        {{-- Image --}}
                        <div class="relative rounded-2xl overflow-hidden min-h-[250px] max-h-[500px]">
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
                                <div class="z-2 absolute left-4 bottom-4">
                                    <img src="{{ Storage::disk('s3')->url($project->logo) }}"
                                         alt="{{ $project->name }} logo"
                                         class="
                                            object-contain transition-all duration-600 p-1
                                            min-w-24 max-w-32 max-h-16
                                            group-hover:scale-115 group-hover:max-h-18
                                            group-hover:-translate-y-1 group-hover:translate-x-1
                                        "
                                         loading="lazy"
                                    >
                                </div>
                            @else
                                <div class="z-2 absolute left-4 bottom-4">
                                    <img src="{{ asset('img/projects/logo.svg') }}"
                                         alt="logo par défaut"
                                         class="
                                            object-contain transition-all duration-600 p-1
                                            min-w-24 max-w-32 max-h-16
                                            group-hover:scale-115 group-hover:max-h-18
                                            group-hover:-translate-y-1  group-hover:translate-x-1
                                        "
                                         loading="lazy"
                                    >
                                </div>
                            @endif
                        </div>
                    </a>
                </li>
            @empty
                <li class="col-span-full text-center py-10">
                    <x-font.text-lg class="text-gray-medium">
                        Aucun projet n'est disponible pour le moment.
                    </x-font.text-lg>
                </li>
            @endforelse
        </ul>

    </section>
</div>
