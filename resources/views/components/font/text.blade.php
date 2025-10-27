@props([
    'color' => 'dark-primary',
])

{{-- Font-size: 15px (mobile) | 16px (tablet) | 16px (desktop) --}}
<x-font.typography
    variant="text"
    :color="$color"
    {{ $attributes }}
>
    {{ $slot }}
</x-font.typography>
