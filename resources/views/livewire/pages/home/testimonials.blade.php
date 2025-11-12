<div>
    <section id="testimonials" class="px-4 md:px-8 lg:px-10 pt-20 pb-30 lg:pt-30 lg:pb-40 flex flex-col gap-15">
        <h2 role="heading" aria-level="2" class="sr-only">
            Témoignages
        </h2>

        {{-- Header section --}}
        <div class="flex flex-col md:flex-row gap-7 md:grid md:grid-cols-[30%_1fr]">
            {{-- Infos --}}
            <div class="flex flex-col gap-1">
                <div class="flex items-center gap-1.5">
                    <x-font.text-md class="text-gray-light">
                        07
                    </x-font.text-md>

                    <span class="text-red" aria-hidden="true">|</span>

                    <x-font.text>
                        Témoignages
                    </x-font.text>
                </div>
                <x-font.text-sm class="pl-8.5 text-gray-medium">
                    Retours d'Expérience.
                </x-font.text-sm>
            </div>

            <div class="flex flex-col justify-between md:items-end gap-7 md:flex-row">
                {{-- Title --}}
                <x-font.title-lg class="max-w-[650px]">
                    Ce qu'ils disent de mon code.
                </x-font.title-lg>

                {{-- Link --}}
                <x-link.secondary class="mt-4">
                    Laisser un avis
                </x-link.secondary>
            </div>
        </div>

        {{-- Testimonials --}}
        <div class="flex flex-col gap-2 lg:grid lg:grid-cols-[30%_1fr]">

            <div class="hidden lg:flex flex-col content-between p-6 border border-dashed border-gray-light rounded-2xl">
                <x-font.text class="text-gray-medium">
                    La plus grande fierté d'un développeur, c'est un code qui parle à ses utilisateurs et à ses pairs.
                </x-font.text>

                <div class="mt-auto flex gap-3.5">
                    <ul class="flex -space-x-4">
                        <li data-border-small="true" class="w-11 h-11">
                            <img src="{{ asset('img/avatars/a1.jpg') }}"
                                 alt=""
                                 class="w-full h-full rounded-2xl"
                            >
                        </li>
                        <li data-border-small="true" class="w-11 h-11">
                            <img src="{{ asset('img/avatars/a2.jpg') }}"
                                 alt=""
                                 class="w-full h-full rounded-2xl"
                            >
                        </li>
                        <li data-border-small="true" class="w-11 h-11">
                            <img src="{{ asset('img/avatars/a3.jpg') }}"
                                 alt=""
                                 class="w-full h-full rounded-2xl"
                            >
                        </li>
                        <li data-border-small="true" class="w-11 h-11">
                            <img src="{{ asset('img/avatars/a4.jpg') }}"
                                 alt=""
                                 class="w-full h-full rounded-2xl"
                            >
                        </li>
                        <li class="w-11 h-11 bg-whitesmoke flex-center rounded-2xl" data-border-small="true">
                            <x-font.text-md class="text-gray-dark">
                                95+
                            </x-font.text-md>
                        </li>
                    </ul>

                    <div class="flex flex-col gap-1">
                        <div class="flex items-center">
                            <x-svg.star/>
                            <x-svg.star/>
                            <x-svg.star/>
                            <x-svg.star/>
                            <x-svg.star/>
                            <x-font.text-sm class="ml-1">4.9/5</x-font.text-sm>
                        </div>

                        <x-font.text-sm class="text-gray-medium">
                            Trusted by our partners
                        </x-font.text-sm>
                    </div>
                </div>
            </div>

            <div class="relative grid grid-cols-[42px_1fr] gap-2" x-data="{ i: 0 }">

                {{-- Number --}}
                <div class="pt-2.5 pb-1.5 px-1.5 flex flex-col items-center" data-border-rounded="true">

                    <x-font.text-md class="p-1 text-gray-medium" x-text="(i + 1).toString().padStart(2, '0')">01
                    </x-font.text-md>

                    {{-- Lines --}}
                    <div class="flex flex-col gap-1.5 mt-auto">
                        <button
                            type="button"
                            class="flex-center bg-white w-8 h-8 rounded-full"
                            @click.prevent="i = i === 0
                                ? {{ count($testimonials) - 1 }}
                                : i - 1"
                        >
                            <x-svg.arrow-left/>
                        </button>
                        <button
                            type="button"
                            class="flex-center bg-white w-8 h-8 rounded-full"
                            @click.prevent="i = i === {{ count($testimonials) - 1 }}
                                ? 0
                                : i + 1"
                        >
                            <x-svg.arrow-right/>
                        </button>
                    </div>
                </div>

                @foreach($testimonials as $index => $testimonial)
                    {{-- Card --}}
                    <div
                        x-show="i === {{ $index }}"
                        class="p-4.5 lg:p-7.5 lg:pr-35 min-h-100 flex flex-col content-between gap-20 lg:gap-37.5 bg-white rounded-2xl"
                    >
                        <x-font.text-3xl>
                            "{{ $testimonial->content }}"
                        </x-font.text-3xl>

                        <div class="relative top-1.5 -left-1 flex md:items-center gap-3 mt-auto">
                            <img
                                src="{{
                                    $testimonial->image
                                        ? Storage::disk('s3')->url($testimonial->image)
                                        : asset('img/placeholder.png')
                                }}"
                                alt="{{ $testimonial->name }}"
                                class="w-10 h-10 lg:w-13 lg:h-13 rounded-xl object-cover"
                            >
                            <div class="flex flex-col gap-0.5">
                                <x-font.text-xl>
                                    {{ $testimonial->name }}
                                </x-font.text-xl>
                                <x-font.text class="text-gray-medium">
                                    {{ $testimonial->role }}
                                    @if($testimonial->company)
                                        , {{ $testimonial->company }}
                                    @endif
                                </x-font.text>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- Typo card desktop --}}
                <div class="hidden lg:block absolute bottom-4 right-5">
                    <x-font.title-xl class="text-whitesmoke" aria-hidden="true">
                        <span class="sr-only">Guillemet typographique</span>
                        <svg class="w-auto h-28" display="block" role="presentation" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M 7 0 L 1 0 C 0.448 0 0 0.448 0 1 L 0 9.5 C 0 10.052 0.448 10.5 1 10.5 L 3.5 10.5 C 3.776 10.5 4 10.724 4 11 L 4 12 C 4 13.105 3.105 14 2 14 L 1 14 C 0.448 14 0 14.448 0 15 L 0 17 C 0 17.552 0.448 18 1 18 L 2 18 C 5.314 18 8 15.314 8 12 L 8 1 C 8 0.448 7.552 0 7 0 Z"
                                fill="transparent" height="18px" stroke-dasharray="" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="1.5" stroke="#f2f2f2"
                                transform="translate(2 3)" width="8px"></path>
                            <path
                                d="M 7 0 L 1 0 C 0.448 0 0 0.448 0 1 L 0 9.5 C 0 10.052 0.448 10.5 1 10.5 L 3.5 10.5 C 3.776 10.5 4 10.724 4 11 L 4 12 C 4 13.105 3.105 14 2 14 L 1 14 C 0.448 14 0 14.448 0 15 L 0 17 C 0 17.552 0.448 18 1 18 L 2 18 C 5.314 18 8 15.314 8 12 L 8 1 C 8 0.448 7.552 0 7 0 Z"
                                fill="transparent" height="18px" stroke-dasharray="" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="1.5" stroke="#f2f2f2"
                                transform="translate(14 3)" width="8px"></path>
                        </svg>
                    </x-font.title-xl>
                </div>
            </div>
        </div>
    </section>
</div>
