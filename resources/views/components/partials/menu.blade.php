<!-- Menu -->
<nav class="absolute top-4 left-0 right-0 z-10 mx-4 lg:mx-10" aria-label="Menu de navigation">

    <h2 role="heading" aria-level="2" class="sr-only">
        Menu de navigation
    </h2>

    <div class="bg-white rounded-2xl flex items-center justify-between px-5 py-2">

        {{-- Logo à gauche --}}
        <a href="{{ route('home') }}" title="Accueil" class="text-lg font-medium tracking-tighter leading-8">
            Renaud Vmb®
        </a>

        {{-- Liens de navigation (Desktop) --}}
        <div class="flex items-center gap-6">
            <ul class="hidden lg:flex items-center gap-4">
                <li>
                    <a href="{{ route('about') }}"
                       class="text-sm font-semibold hover:text-black transition-colors"
                       title="Vers la page à propos de moi"
                       wire:navigate
                    >
                        <x-font.text-md class="font-semibold">À propos</x-font.text-md>
                    </a>
                </li>
                <li>
                    <a href="{{ route('projects') }}"
                       class="text-sm font-medium hover:text-black transition-colors"
                       title="Vers la page de mes projets"
                       wire:navigate
                    >
                        <x-font.text-md class="font-semibold">Projets</x-font.text-md>
                    </a>
                </li>
                <li>
                    <a href="{{ route('blog') }}"
                       class="text-sm font-medium hover:text-black transition-colors"
                       title="Vers la page de mon blog"
                       wire:navigate
                    >
                        <x-font.text-md class="font-semibold">Blog</x-font.text-md>
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact') }}"
                       class="text-sm font-medium hover:text-black transition-colors"
                       title="Vers la page de contact"
                       wire:navigate
                    >
                        <x-font.text-md class="font-semibold">Contact</x-font.text-md>
                    </a>
                </li>
            </ul>

            {{-- Bouton Hamburger (Mobile) --}}
            <button aria-label="Ouvrir le menu">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#3D3D3D" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6h16.5"/>
                </svg>
            </button>
        </div>
    </div>
</nav>
