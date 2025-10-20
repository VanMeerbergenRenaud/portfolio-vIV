<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body class="bg-[#FAFAFA] text-[#1b1b18] min-h-screen">
        <x-custom-cursor />

        <header class="sr-only">
            <h1 role="heading" aria-level="1">Portfolio de Renaud Van Meerbergen</h1>
        </header>

        <main class="min-h-screen bg-[#FAFAFA] text-[#111111] font-sans overflow-hidden flex-center flex-col">
            <!-- Navbar -->
            <nav class="fixed top-10 lg:top-6 bg-white/80 backdrop-blur-md border border-gray-200/60 rounded-full p-2 flex items-center gap-1">
                <h2 role="heading" aria-level="2" class="sr-only">
                    Menu de navigation
                </h2>
                <!-- Profile -->
                <a href="{{ route('home') }}" class="pr-2 pl-1 flex items-center gap-2">
                    <img src="{{ asset('img/me.jpeg') }}" alt="Profile" class="w-8 h-8 rounded-full border border-gray-200">
                    <span class="text-sm-semibold text-gray-900">Renaud Vmb</span>
                </a>

                <!-- Links -->
                <div class="hidden md:flex items-center text-gray-600">
                    <a href="#projects" class="px-4 py-2 text-sm-semibold hover:text-black transition-colors">Projets</a>
                    <a href="#about" class="px-4 py-2 text-sm-semibold hover:text-black transition-colors">À propos</a>
                    <a href="#blog" class="px-4 pr-6 py-2 text-sm-semibold hover:text-black transition-colors">Blog</a>
                </div>

                <!-- CTA -->
                <a href="mailto:renaud.vanmeerbergen@gmail.com" class="px-5 py-1 bg-white hover:bg-gray-50 border border-gray-200 text-sm-semibold rounded-full transition-colors">
                    Contact
                </a>
            </nav>

            <!-- Main Hero Content -->
            <section class="pt-24 lg:pt-44 flex-grow container mx-auto max-w-7xl border-l border-r border-l-gray-300 border-r-gray-300">
                <div class="grid lg:grid-cols-2 gap-12 items-center px-6 lg:px-8 py-16 lg:py-8 border-t border-b border-t-gray-300 border-b-gray-300">
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
                        <a href="mailto:renaud.vanmeerbergen@gmail.com" class="relative group flex items-center gap-3 bg-black text-white pl-2 pr-6 py-2 rounded-full hover:bg-gray-900 transition-all shadow-lg hover:shadow-xl active:scale-95">
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
        </main>

        <!-- Footer -->
        <footer class="bg-slate-100 text-gray-700" aria-labelledby="footer-heading">
            <h2 role="heading" aria-level="2" class="sr-only">Menu de bas de page</h2>

            <!-- Copyright -->
            <div class="p-3 text-center text-gray-700">
                <p class="text-sm">&copy; 2025 - Renaud Van Meerbergen</p>
            </div>
        </footer>
    </body>

    @livewireScripts
</html>
