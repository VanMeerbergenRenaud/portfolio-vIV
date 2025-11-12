<div>
    <section id="services" class="bg-dark-primary text-white px-4 md:px-8 lg:px-10 py-30 md:py-35 lg:py-40 flex flex-col gap-15 lg:gap-20">
        <h2 role="heading" aria-level="2" class="sr-only">
            Services
        </h2>

        {{-- Header section --}}
        <div class="flex flex-col md:flex-row gap-7 md:grid md:grid-cols-[35%_1fr]">
            {{-- Infos --}}
            <div class="flex flex-col gap-1">
                <div class="flex items-center gap-1.5">
                    <x-font.text-md class="text-gray-light">
                        03
                    </x-font.text-md>

                    <span class="text-red" aria-hidden="true">|</span>

                    <x-font.text>
                        Services
                    </x-font.text>
                </div>
                <x-font.text-sm class="pl-8.5 text-gray-light">
                    Édition v1
                </x-font.text-sm>
            </div>

            <div class="flex flex-col justify-between md:items-end gap-7 md:flex-row">
                {{-- Title --}}
                <x-font.text-xl class="max-w-[385px] tracking-tight">
                    <x-whitespace/>
                    Mon clavier, votre vision. Ensemble,
                    <span class="text-gray-light">créons des applications web qui performent.</span>
                </x-font.text-xl>

                {{-- Link --}}
                <x-link.secondary
                    link="{{ route('home') }}#skills"
                    :navigate="false"
                    color="white"
                    class="mt-4"
                >
                    Voir mes compétences
                </x-link.secondary>
            </div>
        </div>

        {{-- Grid --}}
        <div class="lg:grid lg:grid-cols-[35%_1fr] lg:gap-3"
             x-data="{
                activeService: 0,
                services: @js($this->servicesWithUrls)
             }">
            {{-- Column left: Image & Info --}}
            <div class="hidden lg:flex lg:flex-col pt-2 pr-6">
                <div class="flex grow flex-col mb-4">
                    <x-font.text-3xl x-text="services[activeService]?.number || services[0].number"></x-font.text-3xl>
                    <x-font.text class="text-gray-light mt-auto" x-text="services[activeService]?.title || services[0].title"></x-font.text>
                </div>

                <div class="rounded-2xl overflow-hidden max-h-[350px]">
                    {{-- If no active service add an image placeholder --}}
                    <img :src="services[activeService]?.image_url || services[0].image_url"
                         :alt="services[activeService]?.title || 'Service'"
                         class="w-full h-full object-cover transition-opacity duration-500 bg-transparent">
                </div>
            </div>

            {{-- Column right: Service List --}}
            <div class="flex flex-col gap-2">
                @foreach($services as $index => $service)
                    <x-home.section.services.item
                        :index="$index"
                        :title="$service->title"
                        :description="$service->description"
                        :tags="$service->tags"
                    />
                @endforeach
            </div>
        </div>
    </section>
</div>
