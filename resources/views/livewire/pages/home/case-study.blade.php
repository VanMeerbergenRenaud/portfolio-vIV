<div>
    @if($caseStudy)
        <section id="case_study" class="px-4 md:px-8 lg:px-10 py-30 md:py-35 lg:py-40 flex flex-col gap-15 bg-dark-primary text-white">
            <h2 role="heading" aria-level="2" class="sr-only">
                Cas d'étude
            </h2>

            {{-- Header section --}}
            <div class="flex flex-col md:flex-row gap-7 md:grid md:grid-cols-[30%_1fr]">
                {{-- Infos --}}
                <div class="flex flex-col gap-1">
                    <div class="flex items-center gap-1.5">
                        <x-font.text-md class="text-gray-light">
                            08
                        </x-font.text-md>

                        <span class="text-red" aria-hidden="true">|</span>

                        <x-font.text>
                            {{ $caseStudy->subtitle ?? 'Case study' }}
                        </x-font.text>
                    </div>
                    <x-font.text-sm class="pl-8.5 text-gray-medium">
                        {{ $caseStudy->period ?? $caseStudy->year }}
                    </x-font.text-sm>
                </div>

                <div class="flex flex-col justify-between md:items-end gap-7 md:flex-row">
                    {{-- Title --}}
                    <x-font.title-lg class="max-w-[550px]">
                        {{ $caseStudy->title }}
                    </x-font.title-lg>

                    {{-- Link --}}
                    @if($caseStudy->url)
                        <x-link.secondary
                            link="{{ $caseStudy->url }}"
                            title="Vers le projet {{ $caseStudy->project_name }}"
                            class="mt-4"
                            color="white"
                        >
                            Voir le projet
                        </x-link.secondary>
                    @endif
                </div>
            </div>

            {{-- Case study --}}
            <div class="flex flex-col gap-2">

                {{-- First row --}}
                <div class="flex flex-col gap-2 md:grid md:grid-cols-2 lg:grid-cols-3">

                    {{-- Element 1 - Overview --}}
                    <div class="p-6 lg:p-7 h-62 md:h-115 flex flex-col content-between bg-dark-secondary rounded-2xl">
                        <x-font.text class="text-gray-medium">
                            Aperçu
                        </x-font.text>

                        <x-font.text-xl class="mt-auto">
                            {{ $caseStudy->overview }}
                        </x-font.text-xl>
                    </div>

                    {{-- Element 2 - Project Image --}}
                    <div class="relative p-4 lg:p-7 h-90 md:h-115 flex flex-col items-center bg-dark-secondary rounded-2xl overflow-hidden">
                        <x-font.text-xl class="z-2 text-white">
                            {{ $caseStudy->project_name }}
                        </x-font.text-xl>

                        @if($caseStudy->image)
                            <img src="{{ Storage::disk('s3')->url($caseStudy->image) }}"
                                 alt="{{ $caseStudy->project_name }}"
                                 class="absolute inset-0 h-full w-full object-cover"
                                 loading="lazy"
                            >
                        @else
                            <img src="{{ asset('img/placeholder.png') }}"
                                 alt=""
                                 class="absolute inset-0 h-full w-full object-cover"
                                 loading="lazy"
                            >
                        @endif

                        <x-font.text-md class="mt-auto z-2 text-white">
                            {{ $caseStudy->period ?? $caseStudy->year }}
                        </x-font.text-md>
                    </div>

                    {{-- Element 3 - Quote --}}
                    @if($caseStudy->quote)
                        <div class="relative p-6 lg:p-8 md:h-115 flex flex-col content-between gap-20 md:hidden lg:flex lg:gap-37.5 rounded-2xl border border-dashed border-gray-light">
                            <x-font.text-2xl>
                                "{{ $caseStudy->quote }}"
                            </x-font.text-2xl>

                            <div class="flex md:items-center gap-3 md:mt-auto">
                                @if($caseStudy->author_image)
                                    <img src="{{ Storage::disk('s3')->url($caseStudy->author_image) }}"
                                         alt="{{ $caseStudy->author_name }}"
                                         class="w-13 h-13 rounded-xl object-cover"
                                         loading="lazy"
                                    >
                                @else
                                    <img src="{{ asset('img/placeholder.png') }}"
                                         alt="{{ $caseStudy->author_name }}"
                                         class="w-13 h-13 rounded-xl object-cover"
                                         loading="lazy"
                                    >
                                @endif
                                <div class="flex flex-col gap-0.5">
                                    <x-font.text-xl>
                                        {{ $caseStudy->author_name }}
                                    </x-font.text-xl>
                                    <x-font.text class="text-gray-medium">
                                        {{ $caseStudy->author_title }}
                                    </x-font.text>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                {{-- Second row - Stats --}}
                @if($caseStudy->stats && count($caseStudy->stats) > 0)
                    <div class="flex flex-col gap-2 md:grid md:grid-cols-4">
                        @foreach($caseStudy->stats as $stat)
                            <div class="p-6 lg:p-7 h-30 md:h-45 lg:h-42 flex flex-col content-between bg-dark-secondary rounded-2xl">
                                <x-font.text-2xl class="font-semibold">
                                    {{ $stat['value'] }}
                                    <span class="text-red">{{ $stat['highlight'] }}</span>
                                </x-font.text-2xl>

                                <x-font.text-md class="mt-auto text-gray-medium">
                                    {{ $stat['description'] }}
                                </x-font.text-md>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </section>
    @endif
</div>
