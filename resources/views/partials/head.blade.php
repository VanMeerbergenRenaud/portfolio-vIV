<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ $title ?? 'Renaud Van Meerbergen' }}</title>
<meta name="title" content="Renaud Vmb">
<meta name="author" content="Renaud Van Meerbergen">
<meta name="keywords" content="développeur fullstack, développeur Laravel, développement d'applications, développeur frontend, développeur backend, développeur Liège, Renaud développeur">
<meta name="description" content="Développeur fullstack junior spécialisé en Laravel. Je transforme le chaos des specs en code élégant, performant et qui traverse le temps.">

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
<link rel="icon" href="/favicons/favicon.ico" sizes="any">
<link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
<link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="192x192" href="/favicons/android-chrome-192x192.png">
<link rel="icon" type="image/png" sizes="512x512" href="/favicons/android-chrome-512x512.png">
<link rel="manifest" href="/favicons/site.webmanifest">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&family=Instrument+Sans:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

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
        {{ $title }}
    @else
        {{ config('app.name', 'Renaud Vmb') }}
    @endif
</title>

<!-- Styles -->
@livewireStyles
@vite(['resources/css/app.css', 'resources/js/app.js'])
