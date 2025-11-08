@props(['role'])

@php
    use App\Enums\ProjectRole;

    $roleEnum = ProjectRole::tryFrom($role);
    $label = $roleEnum ? $roleEnum->label() : ucfirst($role);
@endphp

<span {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 bg-white border border-gray-200 text-gray-dark rounded-2xl text-sm font-medium hover:border-red transition-all duration-300']) }}>
    {{ $label }}
</span>

