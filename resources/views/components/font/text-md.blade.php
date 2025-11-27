@props([
    'level' => '3',
    'isTitle' => false
])

{{-- Font-size: 13px (mobile) | 14px (tablet) | 14px (desktop) --}}
<x-font.typography
    variant="text-md"
    :level="$level"
    :isTitle="$isTitle"
    {{ $attributes }}
>
    {{ $slot }}
</x-font.typography>
