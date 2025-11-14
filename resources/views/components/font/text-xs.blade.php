@props([
    'color' => 'dark-primary',
    'level' => '6',
    'isTitle' => false
])

{{-- Font-size: 12px (mobile) | 12px (tablet) | 12px (desktop) --}}
<x-font.typography
    variant="text-xs"
    :color="$color"
    :level="$level"
    :isTitle="$isTitle"
    {{ $attributes }}
>
    {{ $slot }}
</x-font.typography>
