<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body>
        @include('partials.no-js')

        <x-custom-cursor />

        <x-partials.header />

        <main class="flex-center flex-col max-w-6xl mx-auto border-l border-r border-gray-200">
            <!-- Navbar -->
            <x-partials.menu />

            <div class="block py-12 lg:py-22" aria-hidden="true">
                <p class="sr-only">Empty space</p>
            </div>

            <section class="relative border-before">
                <div class="grid lg:grid-cols-2 gap-12 items-center px-6 lg:px-8 py-16 lg:py-8">
                    <!-- Left Column (Text) -->
                    <div class="flex flex-col items-start">
                        <!-- Availability Badge -->
                        <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-white border border-gray-200/60 rounded-full shadow-xs mb-8">
                            <span class="relative flex h-2.5 w-2.5">
                              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                              <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-green-500"></span>
                            </span>
                            <span class="text-xs font-medium text-gray-700">Disponible dès maintenant</span>
                        </div>

                        <!-- Headline -->
                        <h1 class="mb-6">
                            <span class="text-gray-500 font-medium text-5xl sm:text-6xl lg:text-[4.5rem] leading-[1.1] tracking-tighter">
                                Développeur
                            </span><br>
                            <span class="text-black font-bold text-5xl sm:text-6xl lg:text-[4.5rem] leading-[1.1] tracking-tighter">
                                web fullstack.
                            </span>
                        </h1>

                        <!-- Subheadline -->
                        <p class="text-lg sm:text-xl text-gray-600 max-w-lg leading-relaxed mb-10">
                            <strong class="text-gray-900 font-semibold">
                                Développeur web de 24 ans, passionné par la création d'expériences en ligne.
                            </strong>
                            Toujours curieux et motivé, j'aime relever des défis techniques et explorer de nouvelles technologies.
                        </p>

                        <!-- CTA Button -->
                        <a href="{{ route('contact') }}" class="relative group flex items-center gap-3 bg-black text-white pl-2 pr-6 py-2 rounded-full hover:bg-gray-900 transition-all shadow-lg hover:shadow-xl active:scale-95">
                            <img src="{{ asset('img/me_2.jpg') }}" alt="Photo de Renaud Van Meerbergen" class="w-10 h-10 rounded-full border-2 border-black grayscale group-hover:grayscale-0 transition-all">
                            <span class="text-[15px] font-medium">Discutons de votre projet</span>
                        </a>
                    </div>

                    <!-- Right Column (Images Stack) -->
                    <div class="relative h-[500px] w-full hidden lg:block perspective-1000">
                        <!-- Back Right Image -->
                        <div class="absolute top-12 right-0 w-[85%] h-auto aspect-[4/3] rounded-[2rem] shadow-2xl border-[6px] border-white bg-gray-100 rotate-[8deg] translate-x-8 opacity-90 z-10 overflow-hidden">
                            <img src="{{ asset('img/projects/cv.png') }}" alt="Aperçu d'une interface utilisateur claire" class="w-full h-full object-cover object-top opacity-50 mix-blend-multiply">
                        </div>
                        <!-- Middle Left Image -->
                        <div class="absolute top-8 left-0 w-[85%] h-auto aspect-[4/3] rounded-[2rem] shadow-2xl border-[6px] border-white bg-gray-600 -rotate-[8deg] -translate-x-4 z-20 overflow-hidden">
                            <img src="{{ asset('img/projects/jiri.png') }}" alt="Aperçu d'une interface utilisateur sombre" class="w-full h-full object-cover object-top opacity-80">
                        </div>
                        <!-- Front Center Image -->
                        <div class="absolute top-0 left-[7.5%] w-[85%] h-auto aspect-[4/3] rounded-[2rem] shadow-[0_35px_60px_-15px_rgba(0,0,0,0.3)] border-[6px] border-white bg-black -rotate-[3deg] z-30 overflow-hidden hover:rotate-0 hover:scale-[1.02] transition-all duration-500 ease-out">
                            <img src="{{ asset('img/projects/familynest.png') }}" alt="Aperçu de l'interface principale d'un projet" class="w-full h-full object-cover object-top">
                        </div>
                    </div>
                </div>
            </section>

            <section class="relative flex-grow py-15 border-before">
                <p class="sr-only">Espace vide</p>
            </section>

            <section class="hidden relative flex-grow py-20 border-before">
                Empty space
            </section>

            <section class="hidden relative flex-grow py-20 border-before">
                Empty space
            </section>

            <section class="hidden relative flex-grow py-20 border-before">
                Empty space
            </section>
        </main>

        <x-partials.footer />
    </body>

    @livewireScripts
</html>
