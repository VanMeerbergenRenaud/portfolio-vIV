<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ $title ?? 'Renaud Van Meerbergen - Développeur Full-Stack Laravel' }}</title>
<meta name="description" content="Développeur Full-Stack senior spécialisé en Laravel et architecture cloud. Je conçois des applications web performantes, évolutives et maintenables pour propulser votre croissance digitale.">
<meta name="keywords" content="développeur full-stack, Laravel expert, architecture web, développement d'applications, PHP senior developer, performance web, solutions cloud, développeur freelance">
<meta name="author" content="Renaud Van Meerbergen">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="Renaud Van Meerbergen - Développeur Full-Stack">
<meta property="og:description" content="Architecture web moderne, performance optimale et code maintenable. Je transforme vos ambitions digitales en succès mesurables.">
<meta property="og:image" content="{{ asset('img/og-image.jpg') }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ url()->current() }}">
<meta property="twitter:title" content="Renaud Van Meerbergen - Développeur Full-Stack">
<meta property="twitter:description" content="Architecture web moderne, performance optimale et code maintenable. Applications web robustes et évolutives.">
<meta property="twitter:image" content="{{ asset('img/og-image.jpg') }}">

<!-- Favicons -->
<link rel="icon" href="/favicons/favicon.ico" sizes="any">
<link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
<link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="192x192" href="/favicons/android-chrome-192x192.png">
<link rel="icon" type="image/png" sizes="512x512" href="/favicons/android-chrome-512x512.png">
<link rel="manifest" href="/favicons/site.webmanifest">

<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

<!-- JavaScript required -->
<noscript>
    <style>
        .js-required {
            display: none !important;
        }

        .js-disabled-message {
            display: block !important;
        }
    </style>
</noscript>

<!-- Title -->
<title>
    @if (!empty($title))
        {{ $title }} | {{ config('app.name', 'Portfolio') }}
    @else
        {{ config('app.name', 'Portfolio - Renaud Vmb') }}
    @endif
</title>

<!-- Styles -->
@fluxAppearance
@livewireStyles
@vite(['resources/css/app.css', 'resources/js/app.js'])
