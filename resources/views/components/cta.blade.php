<section id="cta" class="px-4 md:px-8 lg:px-10 py-25 flex flex-col gap-15 bg-white">
    <h2 class="sr-only">
        Contact
    </h2>

    {{-- Header section --}}
    <div class="flex flex-col md:flex-row gap-7 md:grid md:grid-cols-[30%_1fr]">
        {{-- Infos --}}
        <div class="flex flex-col gap-1">
            <div class="flex items-center gap-1.5">
                <x-font.text-md class="text-gray-light">
                    00
                </x-font.text-md>

                <span class="text-red" aria-hidden="true">|</span>

                <x-font.text>
                    Contact
                </x-font.text>
            </div>
            <x-font.text-sm :isTitle="true" level="3" class="pl-7 text-gray-medium">
                Renaud Vmb®
            </x-font.text-sm>
        </div>

        <div class="flex flex-col justify-between md:items-end gap-7 md:flex-row">
            {{-- Content --}}
            <div class="flex flex-col gap-4">
                <x-font.title-lg>
                    Restons connectés
                </x-font.title-lg>

                <x-font.text-lg class="text-gray-medium max-w-[450px]">
                    Retrouvez-moi sur
                    <a href="https://github.com/VanMeerbergenRenaud"
                       class="text-dark-primary hover:underline"
                       target="_blank"
                       rel="noopener noreferrer"
                       aria-label="Consulter mon profil GitHub (ouvre dans un nouvel onglet)">GitHub</a>
                    ou
                    <a href="https://www.linkedin.com/in/renaud-van-meerbergen/"
                       class="text-dark-primary hover:underline"
                       target="_blank"
                       rel="noopener noreferrer"
                       aria-label="Consulter mon profil LinkedIn (ouvre dans un nouvel onglet)">LinkedIn</a>
                    pour suivre mon évolution et découvrir mes derniers projets.
                </x-font.text-lg>
            </div>

            {{-- Link --}}
            <x-link.secondary
                link="mailto:renaud.vanmeerbergen@gmail.com"
                title="Vers votre application de mail"
                class="mt-4"
                :navigate="false"
            >
                Me contacter par mail
            </x-link.secondary>
        </div>
    </div>
</section>
