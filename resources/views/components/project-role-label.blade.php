@props(['role'])

@php
    use App\Enums\ProjectRole;

    $roleEnum = ProjectRole::tryFrom($role);
    $label = $roleEnum ? $roleEnum->label() : ucfirst($role);
@endphp

<span {{ $attributes->merge(['class' => 'inline-flex items-center px-3 py-1.5 text-sm font-medium text-gray-dark bg-white rounded-lg hover:bg-gray-200 transition-colors duration-300']) }}>
    {{ $label }}
</span>

