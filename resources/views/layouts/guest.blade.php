<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body class="bg-[#FAFAFA] text-[#1b1b18] min-h-screen">
        @include('partials.no-js')

        <x-custom-cursor />

        <x-partials.header />

        <main class="min-h-screen bg-[#FAFAFA] text-[#111111] font-sans overflow-hidden flex-center flex-col">
            <!-- Navbar -->
            <x-partials.menu />

            <!-- Main content -->
            {{ $slot }}
        </main>

        <x-partials.footer />
    </body>

    @livewireScripts
</html>
