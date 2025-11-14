@props([
    'color' => 'dark-primary',
    'level' => '3',
    'isTitle' => false
])

{{-- Font-size: 13px (mobile) | 13px (tablet) | 13px (desktop) --}}
<x-font.typography
    variant="text-sm"
    :color="$color"
    :level="$level"
    :isTitle="$isTitle"
    {{ $attributes }}
>
    {{ $slot }}
</x-font.typography>
