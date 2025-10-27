@props([
    'color' => 'dark-primary',
])

{{-- Font-size: 20px (mobile) | 22px (tablet) | 24px (desktop) --}}
<x-font.typography
    variant="text-2xl"
    :color="$color"
    {{ $attributes }}
>
    {{ $slot }}
</x-font.typography>
