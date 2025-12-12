@props(['article'])

@if($article)
@php
    $schemaService = app(\App\Services\SchemaService::class);
    $schema = $schemaService->getArticleShowSchema($article);
@endphp

<script type="application/ld+json">
{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endif

