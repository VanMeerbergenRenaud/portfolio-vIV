@props(['article'])

@if($article)
    @php
        $schemaService = app(\App\Services\SchemaService::class);
        $schema = $schemaService->getArticleShowSchema($article);
        $imageUrl = $article->cover_image
            ? Storage::disk('s3')->url($article->cover_image)
            : asset('img/opengraph.png');
    @endphp

    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $article->title }}">
    <meta property="og:description" content="{{ $article->excerpt }}">
    <meta property="og:url" content="{{ route('articles.show', $article->slug) }}">
    <meta property="og:image" content="{{ $imageUrl }}">
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

    <script type="application/ld+json">
        {!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endif

