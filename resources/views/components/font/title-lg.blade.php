@props([
    'level' => '3',
    'isTitle' => false
])

{{-- Font-size: 40px (mobile) | 48px (tablet) | 72px (desktop) --}}
<x-font.typography
    variant="title-lg"
    :level="$level"
    :isTitle="$isTitle"
    {{ $attributes }}
>
    {{ $slot }}
</x-font.typography>
