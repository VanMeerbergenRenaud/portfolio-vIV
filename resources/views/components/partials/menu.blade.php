<!-- Menu -->
<nav class="fixed z-10 top-10 lg:top-6 bg-white/80 backdrop-blur-md border border-gray-200/60 rounded-full p-2 flex items-center gap-1">
    <h2 role="heading" aria-level="2" class="sr-only">
        Menu de navigation
    </h2>

    <!-- Profile -->
    <a href="{{ route('home') }}" class="pr-2 pl-1 flex items-center gap-2" title="Retour à l'accueil">
        <img src="{{ asset('img/me.jpeg') }}" alt="Profile" class="w-8 h-8 rounded-full border border-gray-200">
        <span class="text-sm-semibold text-gray-900">Renaud Vmb</span>
    </a>

    <!-- Links -->
    <div class="hidden md:flex items-center text-gray-600">
        <a href="{{ route('about') }}" class="px-4 py-2 text-sm-semibold hover:text-black transition-colors">À propos</a>
        <a href="{{ route('projects') }}" class="px-4 py-2 text-sm-semibold hover:text-black transition-colors">Projets</a>
    </div>

    <!-- CTA -->
    <a href="mailto:renaud.vanmeerbergen@gmail.com" class="mr-1 px-5 py-1 bg-white hover:bg-gray-50 border border-gray-200 text-sm-semibold rounded-full transition-colors">
        Contact {{-- {{ route('contact') }} --}}
    </a>
</nav>
