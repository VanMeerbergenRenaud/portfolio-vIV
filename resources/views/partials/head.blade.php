<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>{{ $title ?? 'Renaud Van Meerbergen - Développeur Full-Stack Expert Laravel & React' }}</title>
<meta name="description" content="Développeur Full-Stack senior spécialisé en Laravel, React et architecture cloud. Je conçois des applications web performantes, évolutives et maintenables pour propulser votre croissance digitale.">
<meta name="keywords" content="développeur full-stack, Laravel expert, React developer, architecture web, développement d'applications, PHP senior developer, performance web, solutions cloud, développeur freelance">
<meta name="author" content="Renaud Van Meerbergen">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="Renaud Van Meerbergen - Développeur Full-Stack Expert">
<meta property="og:description" content="Architecture web moderne, performance optimale et code maintenable. Je transforme vos ambitions digitales en succès mesurables.">
<meta property="og:image" content="{{ asset('img/og-image.jpg') }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ url()->current() }}">
<meta property="twitter:title" content="Renaud Van Meerbergen - Développeur Full-Stack Expert">
<meta property="twitter:description" content="Architecture web moderne, performance optimale et code maintenable. Applications web robustes et évolutives.">
<meta property="twitter:image" content="{{ asset('img/og-image.jpg') }}">

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">

<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

@fluxAppearance
@livewireStyles
@vite(['resources/css/app.css', 'resources/js/app.js'])

