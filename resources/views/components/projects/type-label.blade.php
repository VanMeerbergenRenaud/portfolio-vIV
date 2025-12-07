@props(['type'])

{{
    is_string($type)
        ? \App\Enums\ProjectType::tryFrom($type)?->label() ?? ucfirst($type)
        : $type?->label()
}}

