<div>
    <section id="faq" class="px-4 md:px-8 lg:px-10 pt-30 pb-20 lg:pt-40 lg:pb-30 flex flex-col gap-15 lg:gap-25 lg:grid lg:grid-cols-[30%_1fr]">
        <h2 class="sr-only">
            Faq
        </h2>

        {{-- Column left --}}
        <div class="flex flex-col gap-4 lg:sticky lg:top-25 lg:h-fit">

            {{-- Header infos --}}
            <div class="flex items-center gap-1.5">
                <x-font.text-md class="text-gray-light">
                    09
                </x-font.text-md>

                <span class="text-red" aria-hidden="true">|</span>

                <x-font.text>
                    Faq
                </x-font.text>
            </div>

            {{-- Title --}}
            <x-font.title class="mt-3 lg:mt-4 max-w-[525px]">
                Quelques questions…
            </x-font.title>

            {{-- Text --}}
            <x-font.text-lg class="text-gray-medium mb-3 lg:mb-4 max-w-[435px]">
                Probablement les questions que vous vous posez déjà. Si la vôtre n'est pas là, contactez-moi !
            </x-font.text-lg>

            <x-link.secondary
                link="mailto:renaud.vanmeerbergen@gmail.com"
                title="Vers votre application de mail"
                :navigate="false"
            >
                Poser une question
            </x-link.secondary>
        </div>


        {{-- Column right --}}
        <div class="flex flex-col gap-2">
            @foreach($faqs as $index => $faq)
                <div class="bg-white rounded-2xl overflow-hidden cursor-pointer" x-data="{ open: false }"
                     @click="open = !open">
                    <div class="p-6">
                        {{-- Header --}}
                        <div class="w-full flex justify-between md:items-center gap-2">
                            {{-- Text --}}
                            <div class="flex md:items-center gap-1.5">
                                <x-font.text class="text-gray-medium">
                                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                </x-font.text>

                                <span class="text-red" aria-hidden="true">|</span>

                                <x-font.text-xl :isTitle="true" level="3">
                                    {{ $faq->question }}
                                </x-font.text-xl>
                            </div>

                            {{-- Button --}}
                            <div class="flex-center bg-whitesmoke w-7 h-7 rounded-md flex-shrink-0">
                                <x-svg.plus class="text-dark-primary transition-transform duration-300"
                                            x-bind:class="open && 'rotate-45 text-red'"/>
                            </div>
                        </div>

                        {{-- Content --}}
                        <div x-collapse x-show="open">
                            <x-font.text class="text-gray-medium mt-3.5 max-w-2xl">
                                {{ $faq->answer }}
                            </x-font.text>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>
