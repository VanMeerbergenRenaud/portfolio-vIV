{{-- Menu --}}
<div x-data="animatedMenu" @keydown.escape.window="menuOpen = false">
    <div
        :class="{
            'top-4 left-4 right-4 lg:left-10 lg:right-10 rounded-2xl p-2 h-14 w-auto': !menuOpen,
            'inset-0 rounded-none p-4 h-screen': menuOpen
        }"
        class="fixed z-25 bg-white transition-all duration-500 ease-in-out flex flex-col"
        x-trap.inert.noscroll="menuOpen"
        aria-live="polite"
    >
        {{-- Basic menu --}}
        <div class="flex items-center justify-between flex-shrink-0 px-3">
            <!-- Logo -->
            <div @mouseenter="animation.animate()" @mouseleave="animation.reset()">
                <a href="{{ route('home') }}" title="Retour à l’accueil" @click="if (menuOpen) menuOpen = false" wire:navigate>
                    <template x-for="(a, i) in animation.text.split('')">
                        <span x-text="a"
                              class="text-lg font-medium tracking-tighter leading-8 opacity-0 transition ease-in"
                              :class="{'opacity-100': animation.char >= i}"></span>
                    </template>
                </a>
            </div>

            <!-- Desktop links -->
            <div class="flex gap-4">
                <ul class="hidden lg:flex items-center justify-end gap-4 lg:gap-6 transition-opacity duration-300"
                    :class="{ 'opacity-0 pointer-events-none': menuOpen, 'opacity-100': !menuOpen }">
                    <li class="leading-none mt-0.5">
                        <x-link.tertiary link="{{ route('about') }}" fontStyle="text-sm font-semibold" wire:navigate>À
                            propos
                        </x-link.tertiary>
                    </li>
                    <li class="leading-none mt-0.5">
                        <x-link.tertiary link="{{ route('projects') }}" fontStyle="text-sm font-semibold" wire:navigate>
                            Projets
                        </x-link.tertiary>
                    </li>
                    <li class="leading-none mt-0.5">
                        <x-link.tertiary link="{{ route('articles') }}" fontStyle="text-sm font-semibold" wire:navigate>
                            Articles
                        </x-link.tertiary>
                    </li>
                </ul>

                <!-- Hamburger button -->
                <button
                    @click="menuOpen = !menuOpen"
                    class="relative z-15 h-8 w-8 lg:w-10 lg:h-10 rounded-full"
                    :aria-expanded="menuOpen.toString()"
                    aria-controls="fullscreen-menu"
                    :aria-label="menuOpen ? 'Fermer le menu' : 'Ouvrir le menu'"
                >
                    <div class="absolute top-1/2 left-1/2 w-6 -translate-x-1/2 -translate-y-1/2 transform">
                        <span aria-hidden="true"
                              class="block absolute h-0.5 w-6 transform bg-dark-primary transition duration-300 ease-in-out"
                              :class="{'rotate-45': menuOpen, '-translate-y-1': !menuOpen }"></span>
                        <span aria-hidden="true"
                              class="block absolute h-0.5 w-6 transform bg-dark-primary transition duration-300 ease-in-out"
                              :class="{'-rotate-45': menuOpen, 'translate-y-1': !menuOpen }"></span>
                    </div>
                </button>
            </div>
        </div>

       {{-- Overlay --}}
        <div
            x-cloak
            id="fullscreen-menu"
            class="flex-grow flex flex-col justify-center transition-all duration-300"
            :class="{ 'opacity-100 delay-200': menuOpen, 'opacity-0 -translate-y-4 pointer-events-none': !menuOpen }"
        >
            <!-- Nav links -->
            <nav class="flex-grow flex items-center justify-center" aria-label="Menu principal">
                <ul class="flex flex-col items-center gap-4 text-center">
                    <li>
                        <x-link.tertiary
                            link="{{ route('home') }}"
                            @click="menuOpen = false"
                            fontStyle="text-5xl md:text-7xl font-semibold -tracking-wider"
                            wire:navigate
                        >
                            Accueil
                        </x-link.tertiary>
                    </li>
                    <li>
                        <x-link.tertiary
                            link="{{ route('about') }}"
                            @click="menuOpen = false"
                            fontStyle="text-5xl md:text-7xl font-semibold -tracking-wider"
                            wire:navigate
                        >
                            À propos
                        </x-link.tertiary>
                    </li>
                    <li>
                        <x-link.tertiary
                            link="{{ route('projects') }}"
                            @click="menuOpen = false"
                            fontStyle="text-5xl md:text-7xl font-semibold -tracking-wider"
                            wire:navigate
                        >
                            Projets
                        </x-link.tertiary>
                    </li>
                    <li>
                        <x-link.tertiary
                            link="{{ route('articles') }}"
                            @click="menuOpen = false"
                            fontStyle="text-5xl md:text-7xl font-semibold -tracking-wider"
                            wire:navigate
                        >
                            Articles
                        </x-link.tertiary>
                    </li>
                </ul>
            </nav>

            <!-- Contact infos -->
            <div class="text-center pb-4">
                <div class="flex flex-col gap-1">
                    <x-link.tertiary
                        link="mailto:renaud.vanmeerbergen@gmail.com"
                        fontStyle="text-md font-medium"
                    >
                        renaud.vanmeerbergen@gmail.com
                    </x-link.tertiary>
                    <x-link.tertiary
                        link="tel:+32470596065"
                        fontStyle="text-md font-medium"
                    >
                        +32 (0) 470 59 60 65
                    </x-link.tertiary>
                </div>
                <div class="flex-center mt-4">
                    <!-- Lien vers Instagram -->
                    <a href="https://www.instagram.com/web_developer.renaud/"
                       target="_blank"
                       rel="noopener noreferrer"
                       title="Vers mon profil Instagram"
                       class="group p-2" aria-label="Lien vers Instagram"
                    >
                        <x-svg.logo.instagram class="text-dark-primary group-hover:text-red transition-colors"/>
                    </a>
                    <!-- Lien vers Github -->
                    <a href="https://github.com/VanMeerbergenRenaud"
                       target="_blank"
                       rel="noopener noreferrer"
                       title="Vers mon profil Github"
                       class="group p-2" aria-label="Lien vers Github"
                    >
                        <x-svg.logo.github class="text-dark-primary group-hover:text-red transition-colors"/>
                    </a>
                    <!-- Lien vers LinkedIn -->
                    <a href="https://www.linkedin.com/in/renaud-van-meerbergen/"
                       target="_blank"
                       rel="noopener noreferrer"
                       title="Vers mon profil LinkedIn"
                       class="group p-2" aria-label="Lien vers LinkedIn"
                    >
                        <x-svg.logo.linkedin class="text-dark-primary group-hover:text-red transition-colors"/>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('animatedMenu', () => ({
            menuOpen: false,
            animation: {
                text: 'Renaud Vmb®',
                char: 11,
                timer: null,
                animate() {
                    this.char = -1;
                    if (this.timer) clearInterval(this.timer);
                    this.timer = setInterval(() => {
                        this.char++;
                        if (this.char === this.text.length) {
                            clearInterval(this.timer);
                            this.timer = null;
                        }
                    }, 50);
                },
                reset() {
                    if (this.timer) {
                        clearInterval(this.timer);
                        this.timer = null;
                    }
                    this.char = this.text.length;
                }
            },

            init() {
                this.$watch('menuOpen', value => {
                    if (value) {
                        document.body.classList.add('overflow-hidden');
                    } else {
                        setTimeout(() => {
                            document.body.classList.remove('overflow-hidden');
                        }, 500);
                    }
                });
            }
        }));
    });
</script>
