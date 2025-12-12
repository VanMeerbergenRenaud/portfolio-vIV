@php
    $schemaService = app(\App\Services\SchemaService::class);
    $schema = $schemaService->getAboutSchema();
@endphp

<script type="application/ld+json">
    {!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
