<div>
    <section id="tools" class="px-4 md:px-8 lg:px-10 pt-30 pb-20 lg:pt-40 lg:pb-30 flex flex-col gap-15 lg:gap-x-2 lg:grid lg:grid-cols-[30%_1fr]">
        <h2 role="heading" aria-level="2" class="sr-only">
            Outils
        </h2>

        {{-- Header infos --}}
        <div class="flex flex-col gap-1">
            <div class="flex items-center gap-1.5">
                <x-font.text-md class="text-gray-light">
                    06
                </x-font.text-md>

                <span class="text-red" aria-hidden="true">|</span>

                <x-font.text>
                    Outils
                </x-font.text>
            </div>
            <x-font.text-sm class="pl-8.5 text-gray-medium">
                © 2021 - 2025
            </x-font.text-sm>
        </div>

        {{-- Grid --}}
        <div class="grid grid-rows-[repeat(2,minmax(0,1fr))] grid-cols-[repeat(2,minmax(50px,1fr))] md:grid-cols-[repeat(3,minmax(50px,1fr))] auto-rows-fr gap-1.5">

            @php
                // Grid position classes for stat cards
                $gridPositions = [
                    'md:col-[3] md:row-[1]',
                    'md:col-[2] md:row-[2]',
                    'md:col-[1] md:row-[3]',
                ];
            @endphp

            @foreach($tools->take(9) as $index => $tool)
                @if($tool->is_stat_card)
                    {{-- Stat Card --}}
                    @php
                        $statCardIndex = array_search($tool->order, [3, 6, 9]);
                        $gridClass = $statCardIndex !== false ? $gridPositions[$statCardIndex] : '';
                    @endphp

                    <div class="p-6 h-45 lg:h-55 flex flex-col content-between bg-white rounded-2xl max-md:col-span-2 {{ $gridClass }} border border-dashed border-gray-light">
                        <div class="flex flex-col gap-1.5">
                            <x-font.text-2xl class="font-semibold">
                                {{ $tool->stat_number }}
                                <span class="text-red">+</span>
                            </x-font.text-2xl>

                            <x-font.text-md>
                                {{ $tool->stat_title }}
                            </x-font.text-md>
                        </div>

                        <x-font.text-md class="mt-auto text-gray-medium">
                            {{ $tool->stat_description }}
                        </x-font.text-md>
                    </div>
                @else
                    {{-- Regular Tool --}}
                    <div class="bg-white rounded-2xl">
                        <a
                            href="{{ $tool->url }}"
                            title="Vers la page officielle de {{ $tool->name }}"
                            target="_blank" rel="noopener noreferrer"
                            class="group p-6 h-45 lg:h-55 flex-center"
                        >
                            @if($tool->logo)
                                <img
                                    src="{{ Storage::disk('s3')->url($tool->logo) }}"
                                    alt="{{ $tool->name }}"
                                    class="max-h-25 object-contain group-hover:scale-110 transition-transform"
                                    loading="lazy"
                                >
                            @else
                                <x-font.text-xl class="font-semibold text-gray-medium">
                                    {{ $tool->name }}
                                </x-font.text-xl>
                            @endif
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
    </section>
</div>
