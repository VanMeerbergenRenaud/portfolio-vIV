@props([
    'variant' => 'text',
    'level' => null,
    'isTitle' => false,
])

@php
    static $config = [
        'title-2xl' => ['title-2xl', '3'],
        'title-xl'  => ['title-xl', '3'],
        'title-lg'  => ['title-lg', '3'],
        'title'     => ['title', '3'],
        'text-3xl'  => ['text-3xl', '3'],
        'text-2xl'  => ['text-2xl', '3'],
        'text-xl'   => ['text-xl', '3'],
        'text-lg'   => ['text-lg', '3'],
        'text'      => ['text', '3'],
        'text-md'   => ['text-md', '3'],
        'text-sm'   => ['text-sm', '3'],
        'text-xs'   => ['text-xs', '3'],
    ];

    [$cssClass, $defaultLevel] = $config[$variant] ?? ['text', '3'];

    $tag = $isTitle
        ? 'h' . ($level ?? $defaultLevel)
        : 'p';
@endphp

<{{ $tag }} {{ $attributes->merge(['class' => "typo-{$cssClass}"]) }}>
    {{ $slot }}
</{{ $tag }}>
