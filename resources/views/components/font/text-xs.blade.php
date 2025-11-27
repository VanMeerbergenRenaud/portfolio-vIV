@props([
    'level' => '3',
    'isTitle' => false
])

{{-- Font-size: 12px (mobile) | 12px (tablet) | 12px (desktop) --}}
<x-font.typography
    variant="text-xs"
    :level="$level"
    :isTitle="$isTitle"
    {{ $attributes }}
>
    {{ $slot }}
</x-font.typography>
