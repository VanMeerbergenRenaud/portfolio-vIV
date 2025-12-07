@props(['title', 'value' => null, 'description', 'valueSize' => 'large'])

<div class="mb-6 break-inside-avoid">
    <div class="relative w-full overflow-hidden rounded-lg border border-gray-200 md:max-w-90 bg-white p-8 transition-shadow">
        <div class="mb-20 flex items-center gap-2">
            {{ $icon }}

            <x-font.text :isTitle="true" level="3" class="m-0">
                {{ $title }}
            </x-font.text>
        </div>

        @if($value)
            <p class="mb-3 text-neutral-800">
                <span class="{{ $valueSize === 'large' ? 'text-8xl' : ($valueSize === 'medium' ? 'text-6xl' : 'text-4xl') }} leading-none">
                    {{ $value }}
                </span>
            </p>
        @endif

        @if(isset($content))
            {{ $content }}
        @endif

        @if(isset($image))
            {{ $image }}
        @endif

        <x-font.text-sm
            class="lg:text-base text-pretty text-gray-medium
            {{ $value ? '' : '' }}
            {{ isset($content) || isset($image) ? 'mt-8' : '' }}"
        >
            {{ $description }}
        </x-font.text-sm>
    </div>
</div>

