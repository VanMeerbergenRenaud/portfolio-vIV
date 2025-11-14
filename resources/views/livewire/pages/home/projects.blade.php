<div>
    <section id="projects" class="px-4 md:px-8 lg:px-10 pt-20 pb-30 lg:pt-30 lg:pb-40 flex flex-col gap-15">
        <h2 class="sr-only">
            Projets
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
                <x-font.title-lg level="3" class="max-w-[625px]">
                    Un code qui prend vie et impacte.
                </x-font.title-lg>

                {{-- Link --}}
                <x-link.secondary
                    link="{{ route('projects') }}"
                    class="mt-4"
                >
                    Tous les projets
                </x-link.secondary>
            </div>
        </div>

        {{-- Project list --}}
        <x-projects.list :$projects />
    </section>
</div>
