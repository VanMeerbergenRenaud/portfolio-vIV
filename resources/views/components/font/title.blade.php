@props([
    'level' => '3',
    'isTitle' => false
])

{{-- Font-size: 32px (mobile) | 36px (tablet) | 48px (desktop) --}}
<x-font.typography
    variant="title"
    :level="$level"
    :isTitle="$isTitle"
    {{ $attributes }}
>
    {{ $slot }}
</x-font.typography>
