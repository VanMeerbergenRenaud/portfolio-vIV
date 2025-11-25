<!-- Footer -->
<footer
    id="footer"
    aria-labelledby="footer-heading"
    class="relative px-6 pt-24 pb-12 md:px-10 lg:p-12 bg-dark-primary text-whitesmoke"
>
    <h2 id="footer-heading" class="sr-only">Menu de bas de page</h2>

    {{-- Content --}}
    <div class="relative px-6 pb-12 md:px-8 md:pb-16">

        {{-- 1. Section supérieure : Logo et lien retour en haut --}}
        <div class="flex justify-between items-start mb-12">
            <x-svg.logo.brand class="w-24 h-24 md:w-32 md:h-32" aria-hidden="true" />

            <a
                href="#page-top"
                aria-label="Retour en haut de la page"
                class="p-1 bg-transparent hover:bg-whitesmoke rounded-full group"
            >
                <x-svg.back-top class="w-8 h-10 text-white group-hover:text-dark-primary" aria-hidden="true" />
            </a>
        </div>

        {{-- 2. Grille de contenu principale --}}
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 lg:gap-16 text-sm uppercase">

            {{-- Colonne 1: Adresse --}}
            <address class="space-y-4 not-italic">
                <h3 class="font-bold tracking-widest-plus text-gray-medium">Adresse</h3>
                <p class="leading-relaxed text-sm text-whitesmoke">
                    Rue Petit Bioleux, 18<br>
                    4122, Plainevaux<br>
                    Liège – Belgique
                </p>
            </address>

            {{-- Colonne 2 & 3: Navigation rapide --}}
            <div class="md:col-span-2">
                <h3 class="font-bold tracking-widest-plus mb-4 text-gray-medium">Navigation rapide</h3>
                <ul class="grid grid-cols-2 lg:grid-rows-4 lg:grid-flow-col lg:pr-20 justify-items-start gap-2">
                    {{-- Colonne 1 --}}
                    <li><x-link.tertiary link="{{ route('home') }}#hero" :navigate="false" color="white" fontStyle="text-sm">Introduction</x-link.tertiary></li>
                    <li><x-link.tertiary link="{{ route('home') }}#about" :navigate="false" color="white" fontStyle="text-sm">À mon sujet</x-link.tertiary></li>
                    <li><x-link.tertiary link="{{ route('home') }}#projects" :navigate="false" color="white" fontStyle="text-sm">Projets</x-link.tertiary></li>
                    <li><x-link.tertiary link="{{ route('home') }}#services" :navigate="false" color="white" fontStyle="text-sm">Services</x-link.tertiary></li>
                    {{-- Colonne 2 --}}
                    <li><x-link.tertiary link="{{ route('home') }}#processes" :navigate="false" color="white" fontStyle="text-sm">Processus</x-link.tertiary></li>
                     <li><x-link.tertiary link="{{ route('home') }}#skills" :navigate="false" color="white" fontStyle="text-sm">Compétences</x-link.tertiary></li>
                    <li><x-link.tertiary link="{{ route('home') }}#tools" :navigate="false" color="white" fontStyle="text-sm">Outils</x-link.tertiary></li>
                    <li><x-link.tertiary link="{{ route('home') }}#testimonials" :navigate="false" color="white" fontStyle="text-sm">Témoignages</x-link.tertiary></li>
                    {{-- Colonne 3 --}}
                    <li><x-link.tertiary link="{{ route('home') }}#case_study" :navigate="false" color="white" fontStyle="text-sm">Cas d'étude</x-link.tertiary></li>
                    <li><x-link.tertiary link="{{ route('home') }}#faq" :navigate="false" color="white" fontStyle="text-sm">Faq</x-link.tertiary></li>
                    <li><x-link.tertiary link="{{ route('home') }}#articles" :navigate="false" color="white" fontStyle="text-sm">Articles</x-link.tertiary></li>
                    <li><x-link.tertiary link="{{ route('home') }}#cta" :navigate="false" color="white" fontStyle="text-sm">Me suivre</x-link.tertiary></li>
                </ul>
            </div>

            {{-- Colonne 4: Pages principales --}}
            <div>
                <h3 class="font-bold tracking-widest-plus mb-4 text-gray-medium">Pages principales</h3>
                <ul class="flex flex-col gap-2 max-md:flex-wrap">
                    <li><x-link.tertiary link="{{ route('home') }}" color="white" fontStyle="text-sm">Accueil</x-link.tertiary></li>
                    <li><x-link.tertiary link="{{ route('about') }}" color="white" fontStyle="text-sm">À propos</x-link.tertiary></li>
                    <li><x-link.tertiary link="{{ route('projects') }}" color="white" fontStyle="text-sm">Projets</x-link.tertiary></li>
                    <li><x-link.tertiary link="{{ route('articles') }}" color="white" fontStyle="text-sm">Articles</x-link.tertiary></li>
                </ul>
            </div>

        </div>
    </div>

    <!-- Legal & Socials -->
    <div class="relative py-8 border-t border-gray-800 flex flex-col md:flex-row md:justify-between gap-6">

        <!-- Copyright & Legal -->
        <div class="flex flex-wrap items-center justify-start gap-x-3 gap-y-2 text-xs uppercase tracking-wider text-gray-medium">
            <a href="{{ route('home') }}"
               title="Retour à la page d'accueil"
               class="hover:text-whitesmoke hover:underline rounded-sm transition-colors duration-300"
            >
                <span class="leading-none" aria-label="Copyright">&copy;</span> {{ date('Y') }} Renaud Van Meerbergen
            </a>
            <span class="hidden sm:inline leading-none" aria-hidden="true">·</span>
            <a
                href="{{ route('policies') }}"
                title="Lire la politique de confidentialité"
                class="hover:text-whitesmoke hover:underline rounded-sm transition-colors duration-300"
                rel="noopener noreferrer"
                wire:navigate
            >
                Politique de confidentialité
            </a>
            <span class="hidden sm:inline leading-none" aria-hidden="true">·</span>
            <a
                href="{{ route('conditions') }}"
                title="Lire les conditions d'utilisation"
                class="hover:text-whitesmoke hover:underline rounded-sm transition-colors duration-300"
                rel="noopener noreferrer"
                wire:navigate
            >
                Conditions d'utilisation
            </a>
        </div>

        <!-- Social Links -->
        <nav aria-label="Réseaux sociaux">
            <h3 class="sr-only">
                Réseaux sociaux
            </h3>
            <ul class="flex items-center md:justify-end gap-x-3 gap-y-2 text-xs uppercase tracking-wider text-gray-medium">
                <li>
                    <a
                        href="{{ asset('img/cv.pdf') }}"
                        target="_blank"
                        class="hover:text-whitesmoke hover:underline rounded-sm transition-colors duration-300"
                        aria-label="Découvrir mon CV"
                    >
                        CV
                    </a>
                </li>
                <li aria-hidden="true">·</li>
                <li>
                    <a
                        href="https://www.instagram.com/web_developer.renaud/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="hover:text-whitesmoke hover:underline rounded-sm transition-colors duration-300"
                        aria-label="Suivez-moi sur Instagram"
                    >
                        Instagram
                    </a>
                </li>
                <li aria-hidden="true">·</li>
                <li>
                    <a
                        href="https://www.linkedin.com/in/renaud-van-meerbergen/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="hover:text-whitesmoke hover:underline rounded-sm transition-colors duration-300"
                        aria-label="Connectez-vous avec moi sur LinkedIn"
                    >
                        LinkedIn
                    </a>
                </li>
                <li aria-hidden="true">·</li>
                <li>
                    <a
                        href="https://github.com/VanMeerbergenRenaud"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="hover:text-whitesmoke hover:underline rounded-sm transition-colors duration-300"
                        aria-label="Consultez mes projets sur GitHub"
                    >
                        GitHub
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    {{-- My name --}}
    <div aria-hidden="true" class="relative mt-4 flex w-full items-end justify-center">
        <x-svg.name/>
    </div>
</footer>
