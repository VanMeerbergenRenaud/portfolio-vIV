<div>
    <section class="px-6 lg:px-10 pt-30 pb-20 lg:pt-40 max-w-[1300px] mx-auto">
        <h2 class="sr-only">
            À propos de moi
        </h2>

        <div class="mb-15 lg:mb-20">
            <div class="flex justify-between items-center mb-8">
                <div class="flex-center gap-1.5">
                    <x-font.text-md class="text-gray-light">CV</x-font.text-md>
                    <span class="text-red" aria-hidden="true">|</span>
                    <x-font.text>À propos de moi</x-font.text>
                </div>
                <x-font.text-sm class="text-gray-medium">2025</x-font.text-sm>
            </div>

            <x-font.title-2xl class="mb-6">
                Renaud <span class="text-red">Van Meerbergen</span>
            </x-font.title-2xl>

            <x-font.title-lg level="2" class="text-gray-medium mb-8">
                Développeur Fullstack Laravel & PHP
            </x-font.title-lg>

            <div class="pr-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 text-sm">
                <a href="tel:+32470596065"
                   class="flex items-center gap-2 text-gray-medium hover:text-dark-primary transition-colors"
                >
                    <span class="text-red">→</span> +32 (0)470 59 60 65
                </a>
                <a href="mailto:renaud.vanmeerbergen@gmail.com"
                   class="flex items-center gap-2 text-gray-medium hover:text-dark-primary transition-colors"
                >
                    <span class="text-red">→</span> renaud.vanmeerbergen@gmail.com
                </a>
                <a href="https://github.com/VanMeerbergenRenaud" target="_blank"
                   class="flex items-center gap-2 text-gray-medium hover:text-dark-primary transition-colors"
                >
                    <span class="text-red">→</span> github.com/VanMeerbergenRenaud
                </a>
                <a href="https://maps.app.goo.gl/qY7TrBUW6BLtoNBn7" target="_blank"
                   class="flex items-center gap-2 text-gray-medium hover:text-dark-primary transition-colors"
                >
                    <span class="text-red">→</span>Neupré, Liège, Belgique
                </a>
            </div>
        </div>

        <section class="mb-15 lg:mb-20">
            <div class="flex justify-between items-center mb-6">
                <x-font.title level="3" :isTitle="true">
                    Profil
                </x-font.title>
                <x-divider-dash class="flex-1 mt-5 ml-3 lg:mt-7.5 lg:ml-6"/>
            </div>

            <x-font.text-lg class="text-gray-medium max-w-[900px] leading-relaxed">
                Développeur passionné avec une expertise en PHP 8.2, Laravel et Livewire. Je crée des applications web
                robustes et scalables en suivant les principes SOLID et les bonnes pratiques de développement. Mon
                objectif : transformer des besoins complexes en solutions techniques élégantes et maintenables.
            </x-font.text-lg>
        </section>

        <section class="mb-15 lg:mb-20">
            <div class="flex justify-between items-center mb-6">
                <x-font.title level="3" :isTitle="true">
                    Compétences
                </x-font.title>
                <x-divider-dash class="flex-1 mt-5 ml-3 lg:mt-7.5 lg:ml-6"/>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <x-font.text-md class="font-medium mb-3">Backend & Frameworks</x-font.text-md>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">PHP 8.2 / Laravel / Livewire</x-font.text>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">MySQL / PostgreSQL</x-font.text>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">REST API / GraphQL</x-font.text>
                        </li>
                    </ul>
                </div>

                <div>
                    <x-font.text-md class="font-medium mb-3">Frontend</x-font.text-md>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">HTML5 / CSS3 / Tailwind CSS</x-font.text>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">JavaScript / Alpine.js</x-font.text>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">Responsive Design / Accessibilité</x-font.text>
                        </li>
                    </ul>
                </div>

                <div>
                    <x-font.text-md class="font-medium mb-3">Outils & DevOps</x-font.text-md>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">Git / GitHub / GitLab</x-font.text>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">Docker / Laravel Sail</x-font.text>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">CI/CD / Forge</x-font.text>
                        </li>
                    </ul>
                </div>

                <div>
                    <x-font.text-md class="font-medium mb-3">Méthodologies</x-font.text-md>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">TDD / SOLID / Clean Code</x-font.text>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">Agile / Scrum</x-font.text>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">Architecture MVC / DDD</x-font.text>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="mb-15 lg:mb-20">
            <div class="flex justify-between items-center mb-6">
                <x-font.title level="3" :isTitle="true">
                    Expérience professionnelle
                </x-font.title>
                <x-divider-dash class="flex-1 mt-5 ml-3 lg:mt-7.5 lg:ml-6"/>
            </div>

            <div class="space-y-8">
                <div class="border-l-2 border-red pl-6 relative">
                    <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-red"></div>

                    <div class="flex flex-col md:flex-row md:justify-between md:items-baseline mb-2">
                        <x-font.text-md class="font-medium">Stage - Développeur Web</x-font.text-md>
                        <x-font.text-sm class="text-gray-medium">Sept. 2024 – Déc. 2024</x-font.text-sm>
                    </div>

                    <x-font.text class="mb-3">
                        <a href="https://www.spade.be/fr/" class="text-red" target="_blank" aria-label="Vers le site de Spade">
                            SPADE · Bruxelles
                        </a>
                    </x-font.text>

                    <ul class="space-y-4 mt-4">
                        <li class="flex items-center gap-2">
                            <span class="text-red">→</span>
                            <x-font.text class="text-gray-medium">Migration de sites legacy PHP 5.6 vers versions
                                modernes avec maintien de la compatibilité
                            </x-font.text>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-red">→</span>
                            <x-font.text class="text-gray-medium">Développement de blocs Gutenberg personnalisés pour
                                WordPress
                            </x-font.text>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-red">→</span>
                            <x-font.text class="text-gray-medium">Refactoring et optimisation de code existant
                            </x-font.text>
                        </li>
                    </ul>
                </div>

                <div class="border-l-2 border-gray-medium pl-6 relative">
                    <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-gray-medium"></div>

                    <div class="flex flex-col md:flex-row md:justify-between md:items-baseline mb-2">
                        <x-font.text-md class="font-medium">Développeur Fullstack (Projet Personnel)</x-font.text-md>
                        <x-font.text-sm class="text-gray-medium">Été 2024</x-font.text-sm>
                    </div>

                    <x-font.text class="mb-3">
                        <a href="https://ludifica.be/" class="text-dark-primary" target="_blank" aria-label="Vers le site de Ludifica">
                            Ludifica · Embourg
                        </a>
                    </x-font.text>

                    <ul class="space-y-4 mt-4">
                        <li class="flex items-start gap-2">
                            <span class="text-red">→</span>
                            <x-font.text class="text-gray-medium">Conception et développement d'une plateforme SaaS
                                complète avec Laravel
                            </x-font.text>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red">→</span>
                            <x-font.text class="text-gray-medium">Mise en place d'un dashboard administrateur avec
                                Filament PHP
                            </x-font.text>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red">→</span>
                            <x-font.text class="text-gray-medium">Gestion complète du projet (architecture,
                                développement, tests, déploiement)
                            </x-font.text>
                        </li>
                    </ul>
                </div>

            </div>
        </section>

        <section class="mb-15 lg:mb-20">
            <div class="flex justify-between items-center mb-6">
                <x-font.title level="3" :isTitle="true">
                    Formation
                </x-font.title>
                <x-divider-dash class="flex-1 mt-5 ml-3 lg:mt-7.5 lg:ml-6"/>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="border-l-2 border-red pl-6 relative">
                    <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-red"></div>

                    <x-font.text-md class="font-medium mb-2">Bachelier en Informatique</x-font.text-md>
                    <x-font.text class="text-red mb-2">HEPL - INPRES</x-font.text>
                    <x-font.text-sm class="text-gray-medium mb-3">2021 – 2025</x-font.text-sm>

                    <x-font.text class="text-gray-medium">
                        Formation complète en développement d'applications et de sites web, en architecture logicielle et en méthodologies agiles.
                    </x-font.text>
                </div>

                <div class="border-l-2 border-gray-medium pl-6 relative">
                    <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-gray-medium"></div>

                    <x-font.text-md class="font-medium mb-2">Ingénieur Industriel</x-font.text-md>
                    <x-font.text class="text-dark-primary mb-2 uppercase">Helmo Gramme</x-font.text>
                    <x-font.text-sm class="text-gray-medium mb-3">2019 – 2021</x-font.text-sm>

                    <x-font.text class="text-gray-medium">
                        Deux années d'ingénierie apportant rigueur scientifique et méthodologie de résolution de
                        problèmes.
                    </x-font.text>
                </div>
            </div>
        </section>

        <section class="lg:mb-10">
            <div class="flex justify-between items-center mb-6">
                <x-font.title level="3" :isTitle="true">
                    Informations complémentaires
                </x-font.title>
                <x-divider-dash class="flex-1 mt-5 ml-3 lg:mt-7.5 lg:ml-6"/>
            </div>

            <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <x-font.text-md class="font-medium mb-3">Langues</x-font.text-md>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">Français (Natif)</x-font.text>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">Anglais (Professionnel)</x-font.text>
                        </li>
                    </ul>
                </div>

                <div>
                    <x-font.text-md class="font-medium mb-3">Mobilité</x-font.text-md>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">Permis B</x-font.text>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">Véhicule personnel</x-font.text>
                        </li>
                    </ul>
                </div>

                <div>
                    <x-font.text-md class="font-medium mb-3">Centres d'intérêt</x-font.text-md>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">Open Source</x-font.text>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">Veille technologique</x-font.text>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </section>
</div>
