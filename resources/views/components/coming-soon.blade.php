<div>
    <section id="coming-soon" class="px-4 md:px-8 lg:px-10 pt-30 pb-10 md:pt-34 lg:pt-38" role="status" aria-live="polite">
        <div class="flex flex-col gap-7">

            {{-- Row first --}}
            <div class="flex flex-col lg:grid gap-6 lg:grid-cols-[1fr_315px] lg:items-end">
                <x-font.title-2xl level="2">
                    En construction
                </x-font.title-2xl>

                <x-font.text-xl class="lg:pt-6 max-w-[475px]">
                    Cette page arrive bientôt.
                </x-font.text-xl>
            </div>

            {{-- Row second --}}
            <div class="flex flex-col lg:grid gap-6 lg:grid-cols-[1fr_315px]">
                <div class="relative overflow-hidden rounded-2xl max-h-[62.5vh] lg:min-h-[425px]">
                    <img
                        src="{{ asset('img/coming-soon.jpg') }}"
                        alt="Image humoristique indiquant que la page est en construction"
                        class="w-full h-full object-cover"
                        loading="lazy"
                    >
                </div>

                {{-- Column right --}}
                <div class="flex flex-col justify-between pb-1 md:grid md:grid-cols-2 md:gap-8 lg:flex lg:gap-0">

                    <div class="flex flex-col gap-4">
                        <x-divider-dash class="hidden lg:block"/>

                        {{-- Top --}}
                        <x-font.text-md>
                            Je travaille actuellement sur cette section du site. Revenez bientôt pour découvrir du nouveau contenu passionnant !
                        </x-font.text-md>
                    </div>

                    <div class="mt-auto">
                        <x-link.primary variant="wb" link="{{ route('home') }}" class="mt-6 md:hidden lg:flex lg:mt-4">
                            Retour à l'accueil
                        </x-link.primary>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
