<div class="js-disabled-message hidden">
    <div class="fixed top-0 left-0 right-0 z-80 w-full bg-[var(--color-dark-secondary)] border-b border-[var(--color-gray-dark)]">
        <div class="mx-auto px-4 md:px-8 lg:px-10 py-4 flex items-center justify-between gap-4">
            {{-- Warning text --}}
            <x-font.text class="flex gap-3 text-white font-semibold">
                <x-svg.warning class="mt-0.5 w-5 h-5 text-red"/>

                JavaScript est désactivé
            </x-font.text>
            {{-- Instructions and link --}}
            <x-font.text-md class="flex items-center gap-4 text-gray-400">
                Ce portfolio requiert l'activation de JavaScript dans votre navigateur pour un fonctionnement
                optimal.
                <a
                    href="https://www.enable-javascript.com/fr/"
                    title="Voir les instructions pour activer JavaScript"
                    class="text-white underline font-semibold"
                    target="_blank"
                >
                    Voir les instructions
                </a>
            </x-font.text-md>
        </div>
    </div>
</div>
