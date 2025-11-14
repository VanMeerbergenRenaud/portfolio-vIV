<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body>
        <!-- Skip links pour navigation rapide -->
        <a href="#main-content" class="skip-link">
            1. Aller au contenu principal
        </a>
        <a href="#footer" class="skip-link">
            2. Aller au pied de page
        </a>

        @include('partials.no-js')

        @if(Route::is('home') || request()->is('/'))
            <x-pre-loader/>
        @endif

        {{--<x-custom-cursor />--}}

        <x-custom-bg />

        <x-partials.header />

        <main id="main-content" role="main">
            <!-- Navbar -->
            <x-partials.menu />

            {{-- Main content --}}
            {{ $slot }}
        </main>

        <x-partials.footer />
    </body>

    @livewireScripts
</html>
