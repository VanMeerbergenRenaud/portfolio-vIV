@props([
    'level' => '3',
    'isTitle' => false
])

{{-- Font-size: 20px (mobile) | 22px (tablet) | 24px (desktop) --}}
<x-font.typography
    variant="text-2xl"
    :level="$level"
    :isTitle="$isTitle"
    {{ $attributes }}
>
    {{ $slot }}
</x-font.typography>
