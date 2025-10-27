@props([
    'color' => 'dark-primary',
])

{{-- Font-size: 13px (mobile) | 13px (tablet) | 13px (desktop) --}}
<x-font.typography
    variant="text-sm"
    :color="$color"
    {{ $attributes }}
>
    {{ $slot }}
</x-font.typography>
