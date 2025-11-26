<div>
    <section class="px-6 lg:px-10 pt-30 pb-12 lg:pt-40 max-w-[1300px] mx-auto">
        <h2 class="sr-only">
            À propos de moi
        </h2>

        {{-- Intro --}}
        <div class="mb-15 lg:mb-20">
            <div class="flex justify-between items-center mb-8">
                <div class="flex-center gap-1.5">
                    <x-font.text-md class="text-gray-light">CV</x-font.text-md>
                    <span class="text-red" aria-hidden="true">|</span>
                    <x-font.text>À propos de moi</x-font.text>
                </div>
                <x-font.text-sm class="text-gray-medium">2025</x-font.text-sm>
            </div>

            {{-- Change  from here only --}}
            <x-font.title-2xl class="mb-6">
                Renaud <span class="text-red">Van Meerbergen</span>
            </x-font.title-2xl>

            <a href="#complement-infos" class="group inline-block scroll-smooth" aria-label="Note de bas de page">
                <x-font.title-lg level="2" class="relative mb-8">
                    <span class="bg-gradient-to-r from-gray-medium to-gray-medium bg-clip-text text-transparent opacity-100 transition-opacity duration-[500ms] ease-[cubic-bezier(0.4,0,0.2,1)]">
                        Dompteur de code · Backend Lord
                    </span>
                    <span class="absolute inset-0 bg-gradient-to-r from-dark-primary via-red to-dark-primary bg-clip-text text-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-[500ms] ease-[cubic-bezier(0.4,0,0.2,1)]">
                        Dompteur de code · Backend Lord
                    </span>
                    <sup class="text-base -left-1 lg:-left-2 relative -top-5 md:-top-7.5 lg:-top-12 text-gray-light group-hover:text-red group-hover:scale-110 transition-all duration-[1200ms] ease-[cubic-bezier(0.34,1.56,0.64,1)]">1</sup>
                </x-font.title-lg>
            </a>

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
                    <span class="text-red">→</span> Neupré, Liège, Belgique (127.0.0.1)
                </a>
            </div>
        </div>

        {{-- Profil --}}
        <section class="mb-15 lg:mb-20">
            <div class="flex justify-between items-center mb-6">
                <x-font.title level="3" :isTitle="true">
                    Profil
                </x-font.title>
                <x-divider-dash class="flex-1 mt-5 ml-3 lg:mt-7.5 lg:ml-6"/>
            </div>

            <x-font.text-lg class="text-gray-medium max-w-[900px] leading-relaxed">
                Je suis un alchimiste du chaos maîtrisé, je transforme des tickets douteux en résultats solides, le tout accompagné d'une playlist légendaire et de jurons poétiques.
                Je répare la production d’un geste nonchalant tout en semant une nouvelle énigme pour l’équipe afin de préserver le suspense.
                Je corrige des erreurs légendaires et passer 30 minutes à centrer une image me plonge dans une profonde méditation existentielle.
                Je commente le code comme un romancier en plein mélodrame en choisissant des mots que je ne comprends pas moi-même.
                Mon code est nettoyé à la manière d’un illusionniste de sorte qu’il ne reste aucun témoin.
                Je suis disponible pour des missions payées en euros et je refuse les paiements en visibilité. J’accepte les propositions sérieuses et les pâtisseries comme bonus de négociation.<br>
            </x-font.text-lg>
        </section>

        {{-- Compétences --}}
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
                            <x-font.text class="text-gray-medium">PHP 8.5 (Non, il n'est pas mort)</x-font.text>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">Laravel (Magie noire incluse)</x-font.text>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">SQL (J'aime les relations compliquées)</x-font.text>
                        </li>
                    </ul>
                </div>

                <div>
                    <x-font.text-md class="font-medium mb-3">Frontend</x-font.text-md>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">Tailwind CSS (J'ai banni le CSS pur)</x-font.text>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">JavaScript (Le langage du chaos)</x-font.text>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">Alpine.js (Le jQuery du futur)</x-font.text>
                        </li>
                    </ul>
                </div>

                <div>
                    <x-font.text-md class="font-medium mb-3">Outils & DevOps</x-font.text-md>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">Git (commit -m "oups je répare")</x-font.text>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">Docker (L'usine à gaz portable)</x-font.text>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">CI/CD (La roulette russe du vendredi)</x-font.text>
                        </li>
                    </ul>
                </div>

                <div>
                    <x-font.text-md class="font-medium mb-3">Méthodologies</x-font.text-md>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">SCRUM (Surtout pour les pauses café)</x-font.text>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">
                                FED (Fuir l'Écriture de Documentation)
                            </x-font.text>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">TDD (Trop De Détails)</x-font.text>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        {{-- Expériences --}}
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
                        <x-font.text-md class="font-medium">Stage - Développeur frontend</x-font.text-md>
                        <x-font.text-sm class="text-gray-medium">Sept. 2024 – Déc. 2024</x-font.text-sm>
                    </div>

                    <x-font.text class="my-3">
                        <a href="https://www.spade.be/fr/" class="text-red" target="_blank"
                           aria-label="Vers le site de Spade">
                            SPADE · Bruxelles
                        </a>
                    </x-font.text>

                    <ul class="space-y-4 mt-4">
                        <li class="flex items-center gap-2">
                            <span class="text-red">→</span>
                            <x-font.text class="text-gray-medium">
                                Chasseur de trésor dans du code fossilisé PHP 5.6.
                            </x-font.text>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-red">→</span>
                            <x-font.text class="text-gray-medium">
                                Dompteur de WordPress sauvage sans protection.
                            </x-font.text>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-red">→</span>
                            <x-font.text class="text-gray-medium">
                                J'ai appris à aimer les réunions sur Slack.
                            </x-font.text>
                        </li>
                    </ul>
                </div>

                <div class="border-l-2 border-gray-medium pl-6 relative">
                    <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-gray-medium"></div>

                    <div class="flex flex-col md:flex-row md:justify-between md:items-baseline mb-2">
                        <x-font.text-md class="font-medium">Développeur fullstack</x-font.text-md>
                        <x-font.text-sm class="text-gray-medium">Août 2025 - Sept. 2025</x-font.text-sm>
                    </div>

                    <x-font.text class="my-3">
                        <a href="https://ludifica.be/" class="text-dark-primary" target="_blank"
                           aria-label="Vers le site de Ludifica">
                            LUDIFICA · Embourg
                        </a>
                    </x-font.text>

                    <ul class="space-y-4 mt-4">
                        <li class="flex items-start gap-2">
                            <span class="text-red">→</span>
                            <x-font.text class="text-gray-medium">
                                J'ai tout fait moi même et je suis fatigué.
                            </x-font.text>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red">→</span>
                            <x-font.text class="text-gray-medium">
                                Filament m'a sauvé d'une dépression frontend.
                            </x-font.text>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-red">→</span>
                            <x-font.text class="text-gray-medium">
                                CEO/CTO et stagiaire du mois en même temps.
                            </x-font.text>
                        </li>
                    </ul>
                </div>

            </div>
        </section>

        {{-- Formation --}}
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
                    <x-font.text class="text-red mb-2">
                        <a href="https://www.hepl.be/fr/techniques-infographiques/web"
                           aria-label="Vers le site de l'HEPL"
                           target="_blank"
                        >
                            HEPL - INPRES
                        </a>
                    </x-font.text>
                    <x-font.text-sm class="text-gray-medium mb-3">2021 – 2025</x-font.text-sm>

                    <x-font.text class="text-gray-medium leading-relaxed">
                        Formation d'élite qui m'a transformé en couteau suisse humain du code. Encadré par des experts,
                        j'ai appris que les design patterns sont vitaux et que la documentation est une légende urbaine.
                        Je jongle entre un backend Laravel solide et un frontend Tailwind étincelant, tout en gérant la
                        base de données d'une main. J'ai aussi développé l'art subtil de réaliser des requêtes SQL
                        performantes sans perdre la raison. Résultat : je code propre, je livre en prod sans trembler.
                    </x-font.text>
                </div>

                <div class="border-l-2 border-gray-medium pl-6 relative">
                    <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-gray-medium"></div>

                    <x-font.text-md class="font-medium mb-2">Ingénieur Industriel</x-font.text-md>
                    <x-font.text class="b-2">
                        <a href="https://www.helmo.be/campus/helmo-campus-de-lourthe/institut-gramme"
                           class="text-dark-primary uppercase"
                           aria-label="Vers le site de l'HELMO"
                           target="_blank"
                        >
                            Helmo Gramme
                        </a>
                    </x-font.text>
                    <x-font.text-sm class="text-gray-medium mb-3">2019 – 2021</x-font.text-sm>

                    <x-font.text class="text-gray-medium leading-relaxed">
                        Un cursus d'ingénieur pour forger une rigueur scientifique, concept que j'applique surtout quand
                        le compilateur me regarde. Entre deux équations différentielles, j'ai compris que ma vocation
                        n'était pas la physique mais le débuggage intense. J'ai gardé l'esprit analytique mais changé de
                        terrain de jeu. Aujourd'hui, je ne calcule plus la résistance des matériaux, je teste la
                        résistance de mes nerfs sur des bugs obscurs.
                    </x-font.text>
                </div>
            </div>
        </section>

        {{-- Informations complémentaires --}}
        <section id="complement-infos" class="lg:mb-10">
            <div class="flex justify-between items-center mb-6">
                <x-font.title level="3" :isTitle="true">
                    Informations complémentaires
                </x-font.title>
                <x-divider-dash class="flex-1 mt-5 ml-3 lg:mt-7.5 lg:ml-6"/>
            </div>

            <div class="mt-8 flex flex-col md:flex-row gap-6 lg:gap-20">
                <div>
                    <x-font.text-md class="font-medium mb-3">Langues</x-font.text-md>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">Français (de la street)</x-font.text>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">Anglais (as good as you need)</x-font.text>
                        </li>
                    </ul>
                </div>

                <div>
                    <x-font.text-md class="font-medium mb-3">Mobilité</x-font.text-md>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">Permis B (Pilote du dimanche)</x-font.text>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">Véhicule (Batmobile rouillée)</x-font.text>
                        </li>
                    </ul>
                </div>

                <div>
                    <x-font.text-md class="font-medium mb-3">Passions obscures</x-font.text-md>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">Trading (Forex & Crypto)</x-font.text>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">Boxe Thai (Ceinture blanche)</x-font.text>
                        </li>
                    </ul>
                </div>

                <div>
                    <x-font.text-md class="font-medium mb-3">Exploits de geek</x-font.text-md>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">
                                Top 15 mondial sur
                                <a href="https://supercell.com/en/games/clashofclans" class="underline text-red"
                                   target="_blank" aria-label="Vers le site de Clash of Clans">
                                    coc
                                </a>
                            </x-font.text>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-red rounded-full"></span>
                            <x-font.text class="text-gray-medium">
                                Pousseur de pion hasardeur sur
                                <a href="https://www.chess.com" class="underline text-red" target="_blank"
                                   aria-label="Vers le site de Chess.com">
                                    chess
                                </a>
                            </x-font.text>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        {{-- Note de bas de page --}}
        <div class="mt-20">
            <x-divider-dash class="my-4" />

            <p class="text-sm text-gray-dark leading-relaxed scroll-mt-8">
                <span class="font-medium text-dark-primary">¹</span> Cette page est à prendre avec humour et légèreté.
            </p>
        </div>
    </section>

    <x-cta />
</div>
