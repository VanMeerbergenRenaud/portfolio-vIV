<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Erreur')</title>

    <!-- Scripts -->
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-whitesmoke">
    <div class="flex-center flex-col min-h-screen px-8 py-16">
        @yield('icon')

        <h1 class="my-8 text-red text-8xl leading-[5.75rem] font-semibold tracking-wider">
            @yield('code')
        </h1>

        <p class="mb-8 max-w-[40rem] text-center text-2xl font-semibold tracking-wide">
            @yield('description')
        </p>

        <p class="max-w-[30rem] text-center text-md text-gray-medium">
            @yield('message')
        </p>

        <div class="mt-12 flex-center flex-col gap-4 md:flex-row">
            <x-link.primary link="{{ url()->previous() }}" variant="bw" class="w-max">
                Retour en arrière
            </x-link.primary>
            <x-link.primary link="/" class="w-max">
                Aller à l'accueil
            </x-link.primary>
        </div>
    </div>
</body>
</html>
