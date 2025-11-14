@props([
    'level' => '3',
    'isTitle' => false
])

{{-- Font-size: 24px (mobile) | 26px (tablet) | 28px (desktop) --}}
<x-font.typography
    variant="text-3xl"
    :level="$level"
    :isTitle="$isTitle"
    {{ $attributes }}
>
    {{ $slot }}
</x-font.typography>
