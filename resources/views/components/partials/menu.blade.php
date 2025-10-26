<!-- Menu -->
<nav class="absolute top-4 left-0 right-0 z-10 mx-4 lg:mx-10">

    <h2 role="heading" aria-level="2" class="sr-only">
        Menu de navigation
    </h2>

    <div class="bg-white rounded-xl flex items-center justify-between px-5 py-2 shadow-xs">

        {{-- Logo à gauche --}}
        <a href="{{ route('home') }}" title="Accueil" class="text-xl-medium tracking-tight">
            Renaud Vmb®
        </a>

        {{-- Liens de navigation (Desktop) --}}
        <ul class="hidden lg:flex items-center gap-8 text-neutral-700">
            <li>
                <a href="{{ route('about') }}"
                   class="text-sm-medium hover:text-black transition-colors"
                   title="Vers la page à propos de moi"
                   wire:navigate
                >
                    À propos
                </a>
            </li>
            <li>
                <a href="{{ route('projects') }}"
                   class="text-sm-medium hover:text-black transition-colors"
                   title="Vers la page de mes projets"
                   wire:navigate
                >
                    Projets
                </a>
            </li>
            <li>
                <a href="#blog"
                   class="text-sm-medium hover:text-black transition-colors"
                   title="Vers la page de mon blog"
                   wire:navigate
                >
                    Blog
                </a>
            </li>
            <li>
                <a href="{{ route('contact') }}"
                   class="text-sm-medium hover:text-black transition-colors"
                   title="Vers la page de contact"
                   wire:navigate
                >
                    Contact
                </a>
            </li>
        </ul>

        {{-- Bouton Hamburger (Mobile) --}}
        <button class="lg:hidden" aria-label="Ouvrir le menu">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6h16.5"/>
            </svg>
        </button>
    </div>
</nav>
