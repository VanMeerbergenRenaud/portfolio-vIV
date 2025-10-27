@props([
    'color' => 'dark-primary',
])

{{-- Font-size: 12px (mobile) | 12px (tablet) | 12px (desktop) --}}
<x-font.typography
    variant="text-xs"
    :color="$color"
    {{ $attributes }}
>
    {{ $slot }}
</x-font.typography>
