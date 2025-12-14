<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="theme-color" content="#121212">

<title>{{ $title ?? 'Renaud Van Meerbergen' }}</title>

<meta name="title" content="Renaud Vmb">
<meta name="author" content="Renaud Van Meerbergen">
<meta name="keywords" content="développeur liège, développeur web liège, développeur fullstack liège, Renaud développeur, développeur fullstack, développeur Laravel, développeur web frontend, développeur web backend">
<meta name="description" content="Développeur fullstack junior spécialisé en Laravel. Je transforme le chaos des specs en code élégant, performant et qui traverse le temps.">
<link rel="canonical" href="{{ url()->current() }}">
<meta name="robots" content="all">

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="Renaud Van Meerbergen">
<meta property="og:description" content="Développeur fullstack junior spécialisé en Laravel. Je transforme le chaos des specs en code élégant, performant et qui traverse le temps.">

<meta property="og:image" content="{{ asset('img/opengraph.png') }}">
<meta property="og:image:secure_url" content="{{ secure_asset('img/opengraph.png') }}">
<meta property="og:image:alt" content="Logo Renaud Van Meerbergen">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="265">
<meta property="og:image:height" content="265">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ url()->current() }}">
<meta property="twitter:title" content="Renaud Van Meerbergen">
<meta property="twitter:description" content="Développeur fullstack junior spécialisé en Laravel. Je transforme le chaos des specs en code élégant, performant et qui traverse le temps.">
<meta property="twitter:image" content="{{ asset('img/opengraph.png') }}">

<!-- Favicons -->
<link rel="icon" href="{{ asset('public/favicons/favicon.ico') }}" sizes="any">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/favicons/favicon-16x16.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/favicons/favicon-32x32.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/favicons/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="192x192" href="{{ asset('public/favicons/android-chrome-192x192.png') }}">
<link rel="icon" type="image/png" sizes="512x512" href="{{ asset('public/favicons/android-chrome-512x512.png') }}">
<link rel="manifest" href="{{ asset('public/favicons/site.webmanifest') }}">

<!-- JavaScript required -->
<noscript>
    <style>
        .js-disabled-message {
            display: block !important;
        }
    </style>
</noscript>

<!-- Title -->
<title>
    @if (!empty($title))
        {{ $title }}
    @else
        {{ config('app.name', 'Renaud Vmb') }}
    @endif
</title>

<!-- Styles -->
@livewireStyles
@vite(['resources/css/app.css', 'resources/js/app.js'])

<!-- Schema.org JSON-LD -->
@if(request()->routeIs('home'))
    <x-schema.home />
@elseif(request()->routeIs('about'))
    <x-schema.about />
@elseif(request()->routeIs('projects'))
    <x-schema.projects />
@elseif(request()->routeIs('articles'))
    <x-schema.articles />
@endif

