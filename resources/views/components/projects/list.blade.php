@props([
    'projects' => $projects
])

<ul class="flex flex-col gap-2 md:grid md:grid-cols-[repeat(2,minmax(100px,1fr))] lg:flex">
    @forelse($projects as $index => $project)
        @php
            $isReverse = $index % 2 !== 0;
            $gridClass = $isReverse ? 'lg:grid-cols-[1fr_30%]' : 'lg:grid-cols-[30%_1fr]';
            $orderClass = $isReverse ? 'lg:order-2' : '';
        @endphp

        <li>
            <a href="{{ route('projects.show', $project->slug) }}"
               title="Vers le projet {{ $project->name }}"
               aria-label="Voir le projet {{ $project->name }}"
               class="max-lg:bg-white p-1.5 rounded-2xl flex flex-col gap-2 lg:grid {{ $gridClass }} max-lg:border max-lg:border-transparent max-lg:border-dashed max-lg:hover:border-red group"
               wire:navigate
            >
                {{-- Infos --}}
                <div class="flex flex-col justify-between p-2 lg:p-6 lg:rounded-2xl lg:bg-white lg:border lg:border-transparent lg:border-dashed lg:group-hover:border-red {{ $orderClass }}">
                    <div class="flex flex-col gap-2">
                        <div class="flex justify-between gap-1 max-lg:px-1">
                            <x-font.text-lg :isTitle="true" level="3">{{ $project->name }}</x-font.text-lg>
                            <span class="block lg:hidden text-sm text-gray-medium">{{ $project->year }}</span>
                        </div>

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
                <div class="relative rounded-2xl overflow-hidden min-h-[250px] max-h-[550px]">
                    @if($project->image)
                        <img src="{{ Storage::disk('s3')->url($project->image) }}"
                             alt="{{ $project->name }}"
                             class="scale-110 group-hover:scale-100 transition-all duration-500 w-full h-full object-cover"
                             loading="lazy"
                        >
                    @else
                        <img src="{{ asset('img/placeholder.png') }}"
                             alt=""
                             class="scale-110 group-hover:scale-100 transition-all duration-500 w-full h-full object-cover"
                             loading="lazy"
                        >
                    @endif

                    @if($project->logo_white)
                        <div class="z-2 absolute max-lg:left-4 bottom-4 {{ $isReverse ? 'lg:left-6' : 'lg:right-6' }}">
                            <img src="{{ Storage::disk('s3')->url($project->logo_white) }}"
                                 alt="{{ $project->name }} logo"
                                 class="
                                    object-contain transition-all duration-600 py-1 px-2
                                    min-w-24 max-w-32 max-h-18
                                    group-hover:scale-115 group-hover:max-h-20
                                    lg:group-hover:-translate-y-1
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
                                    object-contain transition-all duration-600 py-1 px-2
                                    min-w-24 max-w-32 max-h-18
                                    group-hover:scale-115 group-hover:max-h-20
                                    lg:group-hover:-translate-y-1
                                    {{ $isReverse ? 'lg:group-hover:translate-x-2' : 'lg:group-hover:-translate-x-2' }}
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
                Aucun projet n'a été développé pour le moment.
            </x-font.text-lg>
        </li>
    @endforelse
</ul>
