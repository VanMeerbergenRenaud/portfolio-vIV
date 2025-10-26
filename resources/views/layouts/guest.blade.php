<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body>
        @include('partials.no-js')

        {{--<x-custom-cursor />--}}

        <x-custom-bg />

        <x-partials.header />

        <main>
            <!-- Navbar -->
            <x-partials.menu />

            {{-- Main content --}}
            {{ $slot }}
        </main>

        <x-partials.footer />
    </body>

    @livewireScripts
</html>
