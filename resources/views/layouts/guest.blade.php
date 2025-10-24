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

            <!-- Main content -->
            {{ $slot }}
        </main>

        <x-partials.footer />
    </body>

    @livewireScripts
</html>
