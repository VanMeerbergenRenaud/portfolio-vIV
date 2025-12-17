<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="theme-color" content="#121212">

        <title>{{ $title ?? 'Renaud Van Meerbergen' }}</title>

        <meta name="title" content="{{ $title ?? 'Renaud Van Meerbergen' }}">
        <meta name="author" content="Renaud Van Meerbergen">

        @if(isset($article))
            <meta name="description" content="{{ $article->excerpt ?? 'Développeur web fullstack à Liège – Renaud Van Meerbergen' }}">
            <meta name="keywords" content="{{ implode(', ', array_merge($article->tags ?? [], ['développeur web', 'Laravel News', 'développeur fullstack', 'blog développement'])) }}">
            <link rel="canonical" href="{{ route('articles.show', $article->slug) }}">

            <meta property="og:type" content="article">
            <meta property="og:title" content="{{ $article->title }}">
            <meta property="og:description" content="{{ $article->excerpt }}">
            <meta property="og:url" content="{{ route('articles.show', $article->slug) }}">
            <meta property="og:image" content="{{ $article->cover_image ? Storage::disk('s3')->url($article->cover_image) : asset('img/opengraph.png') }}">
            <meta property="article:published_time" content="{{ $article->published_at?->toIso8601String() ?? $article->created_at?->toIso8601String() }}">
            <meta property="article:modified_time" content="{{ $article->updated_at?->toIso8601String() }}">
            <meta property="article:author" content="Renaud Van Meerbergen">

            @if($article->category)
                <meta property="article:section" content="{{ $article->category->value ?? $article->category }}">
            @endif

            @if($article->tags)
                @foreach(is_array($article->tags) ? $article->tags : [$article->tags] as $tag)
                    <meta property="article:tag" content="{{ $tag }}">
                @endforeach
            @endif

            <meta property="twitter:card" content="summary_large_image">
            <meta property="twitter:url" content="{{ route('articles.show', $article->slug) }}">
            <meta property="twitter:title" content="{{ $article->title }}">
            <meta property="twitter:description" content="{{ $article->excerpt }}">
            <meta property="twitter:image" content="{{ $article->cover_image ? Storage::disk('s3')->url($article->cover_image) : asset('img/opengraph.png') }}">
        @else
            <meta name="description" content="Portfolio de Renaud Van Meerbergen, développeur web à Liège. Projets d’applications web avec Laravel, création de sites WordPress et travaux de dev front-end et back-end.">
            <meta name="keywords" content="Renaud Van Meerbergen, Renaud développeur, Renaud développeur web, Renaud développeur Liège, renaud developpeur, développeur Liège, développeur fullstack Liège, dev web Liège, développeur Laravel Liège, développeur WordPress Liège">
            <link rel="canonical" href="{{ url()->current() }}">

            <meta property="og:type" content="website">
            <meta property="og:url" content="{{ url()->current() }}">
            <meta property="og:title" content="Renaud Van Meerbergen">
            <meta property="og:description" content="Portfolio de Renaud Van Meerbergen, développeur web à Liège. Projets d’applications web avec Laravel, création de sites WordPress et travaux de dev front-end et back-end.">
            <meta property="og:image" content="{{ asset('img/opengraph.png') }}">
        @endif

        <meta name="robots" content="all">

        <meta property="og:image:secure_url" content="{{ asset('img/opengraph.png') }}">
        <meta property="og:image:alt" content="Logo Renaud Van Meerbergen">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="265">
        <meta property="og:image:height" content="265">

        <link rel="icon" href="{{ asset('public/favicons/favicon.ico') }}" sizes="any">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/favicons/favicon-16x16.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/favicons/favicon-32x32.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/favicons/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('public/favicons/android-chrome-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('public/favicons/android-chrome-512x512.png') }}">
        <link rel="manifest" href="{{ asset('public/favicons/site.webmanifest') }}">

        <noscript>
            <style>
                .js-disabled-message {
                    display: block !important;
                }
            </style>
        </noscript>

        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- Schema --}}
        @if(isset($article))
            @php
                $schemaService = app(\App\Services\SchemaService::class);
                $schema = $schemaService->getArticleShowSchema($article);
            @endphp

            <script type="application/ld+json">
                {!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
            </script>
        @endif
    </head>
    <body>
        @include('partials.no-js')

        <x-custom-bg />

        <header class="sr-only" id="page-top">
            <h1>{{ $title ?? 'Renaud Van Meerbergen' }}</h1>
        </header>

        <a href="#main" class="skip-link" aria-label="Aller au contenu principal">Aller au contenu principal</a>
        <a href="#footer" class="skip-link" aria-label="Aller au pied de page">Aller au pied de page</a>

        <main id="main" role="main">
            <x-partials.menu />

            <article role="article" aria-labelledby="article-title">
                {{ $slot }}
            </article>
        </main>

        <x-partials.footer />
    </body>

    @livewireScripts
</html>

