<div>
    <section id="hero" class="px-4 md:px-8 lg:px-10 pt-30 pb-5 md:pt-34 lg:pt-38">
        <div class="flex flex-col gap-7">

            {{-- Row first --}}
            <div class="flex flex-col lg:grid gap-6 lg:grid-cols-[1fr_315px]">
                <x-font.title-2xl :isTitle="true" level="2" aria-hidden="true">
                    {!! $hero->title !!}
                </x-font.title-2xl>

                <x-font.text-xl class="lg:pt-6 max-w-[475px]">
                    <x-whitespace/>{!! $hero->description !!}
                </x-font.text-xl>
            </div>

            {{-- Row second --}}
            <div class="flex flex-col lg:grid gap-6 lg:grid-cols-[1fr_315px]">
                <div class="relative group overflow-hidden rounded-2xl max-h-[62.5vh] lg:min-h-[425px]">
                    <img
                        src="{{ $hero->hero_image ? Storage::disk('s3')->url($hero->hero_image) : asset('img/placeholder.png') }}"
                        alt="{{ $hero->hero_image_alt ?? 'Portrait de Renaud Van Meerbergen' }}"
                        class="w-full h-full min-h-50 max-h-250 object-cover transition-transform duration-500 group-hover:scale-105"
                        fetchpriority="high"
                    >
                    <span class="absolute bottom-0 right-0 md:bottom-2 md:right-3 text-white text-xs md:text-sm font-semibold py-2 px-4 backdrop-blur-[5px] rounded-lg">
                        Le "GOAT" des devs
                    </span>
                </div>

                {{-- Column right --}}
                <div class="flex flex-col justify-between pb-1 md:grid md:grid-cols-2 md:gap-8 lg:flex lg:gap-0">

                    <x-divider-dash class="hidden lg:block"/>

                    {{-- Top --}}
                    <ul class="flex flex-col gap-0.5 lg:pt-6 md:order-2 lg:order-none"
                        aria-label="Technologies principales">
                        <li class="flex justify-between items-center">
                            <x-font.text-md>{{ $hero->tech1 }}</x-font.text-md>
                            <span class="bg-gray-light h-[1px] overflow-clip rounded-[3px] flex-none w-2 relative"
                                  aria-hidden="true"></span>
                        </li>
                        <li class="flex justify-between items-center">
                            <x-font.text-md>{{ $hero->tech2 }}</x-font.text-md>
                            <span class="bg-gray-light h-[1px] overflow-clip rounded-[3px] flex-none w-2 relative"
                                  aria-hidden="true"></span>
                        </li>
                        <li class="flex justify-between items-center">
                            <x-font.text-md>{{ $hero->tech3 }}</x-font.text-md>
                            <span class="bg-gray-light h-[1px] overflow-clip rounded-[3px] flex-none w-2 relative"
                                  aria-hidden="true"></span>
                        </li>
                        <li class="flex justify-between items-center">
                            <x-font.text-md>{{ $hero->tech4 }}</x-font.text-md>
                            <span class="bg-gray-light h-[1px] overflow-clip rounded-[3px] flex-none w-2 relative"
                                  aria-hidden="true"></span>
                        </li>
                    </ul>

                    {{-- Middle --}}
                    <div class="py-10 my-auto md:order-1 lg:order-none md:pt-0">
                        <x-font.text-xs class="text-gray-medium">
                            {{ $hero->copyright }}
                        </x-font.text-xs>

                        <x-font.text-sm>
                            {{ $hero->location }}
                        </x-font.text-sm>
                    </div>

                    {{-- Bottom (split into info and link on tablet) --}}
                    <div class="md:order-3 md:col-span-1 lg:order-none lg:col-span-1">
                        <div class="flex items-center">
                            <x-svg.star/>
                            <x-svg.star/>
                            <x-svg.star/>
                            <x-svg.star/>
                            <x-svg.star/>
                            <x-font.text-sm>
                                {{ $hero->badge_text }}
                            </x-font.text-sm>
                        </div>

                        <x-font.text-sm class="mt-1.5 text-gray-medium">
                            {!! $hero->badge_description !!}
                        </x-font.text-sm>

                        <x-divider-dash class="my-4"/>

                        <div class="flex justify-between gap-2">
                            <x-font.text-md class="flex items-center gap-2">
                                @if($hero->is_available)
                                    <span class="bg-green-400 rounded-full w-2 h-2 flex-shrink-0"
                                          aria-hidden="true"></span>
                                @else
                                    <span class="bg-gray-400 rounded-full w-2 h-2 flex-shrink-0"
                                          aria-hidden="true"></span>
                                @endif
                                {{ $hero->availability_status }}
                            </x-font.text-md>
                            <x-font.text-md class="text-gray-medium">{{ $hero->availability_type }}</x-font.text-md>
                        </div>

                        <x-link.primary
                            link="mailto:{{ $hero->contact_email }}"
                            title="Vers votre application de mail"
                            class="mt-6 md:hidden lg:flex lg:mt-4"
                            :navigate="false"
                        >
                            Me contacter
                        </x-link.primary>
                    </div>

                    {{-- Link (separate column on tablet) --}}
                    <div class="hidden md:flex md:items-end md:order-4 md:col-span-1 lg:hidden">
                        <x-link.primary
                            link="mailto:{{ $hero->contact_email }}"
                            title="Vers votre application de mail"
                            :navigate="false"
                        >
                            Me contacter
                        </x-link.primary>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
