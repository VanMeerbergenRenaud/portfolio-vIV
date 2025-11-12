@props([
    'color' => 'dark-primary',
])

{{-- Font-size: 13px (mobile) | 14px (tablet) | 14px (desktop) --}}
<x-font.typography
    variant="text-md"
    :color="$color"
    {{ $attributes }}
>
    {{ $slot }}
</x-font.typography>
