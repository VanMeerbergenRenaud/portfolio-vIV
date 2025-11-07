<div>
    <section id="projects" class="px-4 md:px-8 lg:px-10 pt-20 pb-30 lg:pt-30 lg:pb-40 flex flex-col gap-15">
        <h2 role="heading" aria-level="2" class="sr-only">
            Projects
        </h2>

        {{-- Header section --}}
        <div class="flex flex-col md:flex-row gap-7 md:grid md:grid-cols-[30%_1fr]">
            {{-- Infos --}}
            <div class="flex flex-col gap-1">
                <div class="flex items-center gap-1.5">
                    <x-font.text-md class="text-gray-light">
                        02
                    </x-font.text-md>

                    <span class="text-red" aria-hidden="true">|</span>

                    <x-font.text>
                        Projets réalisés
                    </x-font.text>
                </div>
                <x-font.text-sm class="pl-8.5 text-gray-medium">
                    {{ $projectCount }}+ projets
                </x-font.text-sm>
            </div>

            <div class="flex flex-col justify-between md:items-end gap-7 md:flex-row">
                {{-- Title --}}
                <x-font.title-lg class="max-w-[625px]">
                    Un code qui prend vie et impactant.
                </x-font.title-lg>

                {{-- Link --}}
                <x-link.secondary class="mt-4" href="{{ route('projects') }}">
                    Tous les projets
                </x-link.secondary>
            </div>
        </div>

        {{-- Project list --}}
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
                        <div class="grid justify-between p-2 lg:p-6 lg:rounded-2xl lg:bg-white lg:border lg:border-transparent lg:border-dashed lg:group-hover:border-red {{ $orderClass }}">
                            <div>
                                <x-font.text-lg class="flex justify-between gap-1">
                                    <h4 role="heading" aria-level="4">{{ $project->name }}</h4>
                                    <span class="block lg:hidden text-sm text-gray-medium">{{ $project->year }}</span>
                                </x-font.text-lg>

                                <x-font.text-md class="hidden lg:block lg:mt-3 text-gray-medium">
                                    {{ $project->description }}
                                </x-font.text-md>
                            </div>

                            <div class="hidden lg:block mt-auto space-y-2.5">
                                @if($project->year)
                                    <div class="flex items-baseline gap-1.5">
                                        <x-font.text-md class="text-gray-medium">Année</x-font.text-md>
                                        <x-divider-dash class="flex-1" />
                                        <x-font.text-md>{{ $project->year }}</x-font.text-md>
                                    </div>
                                @endif

                                @if($project->client)
                                    <div class="flex items-baseline gap-1.5">
                                        <x-font.text-md class="text-gray-medium">Client</x-font.text-md>
                                        <x-divider-dash class="flex-1" />
                                        <x-font.text-md>{{ $project->client }}</x-font.text-md>
                                    </div>
                                @endif

                                @if($project->type)
                                    <div class="flex items-baseline gap-1.5">
                                        <x-font.text-md class="text-gray-medium">Type</x-font.text-md>
                                        <x-divider-dash class="flex-1" />
                                        <x-font.text-md>
                                            <x-project-type-label :type="$project->type" />
                                        </x-font.text-md>
                                    </div>
                                @endif

                                @if($project->duration)
                                    <div class="flex items-baseline gap-1.5">
                                        <x-font.text-md class="text-gray-medium">Durée</x-font.text-md>
                                        <x-divider-dash class="flex-1" />
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
                                <div class="z-2 absolute max-lg:left-4 bottom-4 {{ $isReverse ? 'lg:left-6' : 'lg:right-6' }}">
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
                                <div class="z-2 absolute max-lg:left-4 bottom-4 {{ $isReverse ? 'lg:left-6' : 'lg:right-6' }}">
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
    </section>
</div>
