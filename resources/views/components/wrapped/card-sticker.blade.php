@props([
    'startIndex' => 0
])

@php
    $totalStickers = 9;
    $stickerWidth = 360;
    $stickerHeight = 327;
@endphp

<div
    x-data="{
        isLoaded: false,
        currentIndex: {{ $startIndex }},
        totalStickers: {{ $totalStickers }},

        init() {
            this.$watch('isLoaded', value => {
                if (value) this.$el.dispatchEvent(new CustomEvent('sticker-loaded', { bubbles: true }));
            });
        },

        nextSticker() {
            this.currentIndex = (this.currentIndex + 1) % this.totalStickers;
        },

        handleImageLoad() {
            this.isLoaded = true;
        }
    }"
    {{ $attributes->merge(['class' => 'mb-6 break-inside-avoid']) }}
>
    <div class="group relative flex-center min-h-80 w-full max-w-none overflow-hidden rounded-xl bg-neutral-100 md:max-w-90">
        <div
            x-show="!isLoaded"
            role="status" aria-live="polite"
            class="absolute inset-0 flex-center"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
        >
            <span class="text-sm font-medium text-neutral-600">Chargement de l'image...</span>
        </div>

        @foreach(range(1, $totalStickers) as $index)
            @php
                $stickerNumber = $index;
                $isFirstSticker = $index === 1;
                $zeroBasedIndex = $index - 1;
            @endphp

            <img
                src="{{ asset("img/wrapped/random{$stickerNumber}.svg") }}"
                alt="Sticker décoratif {{ $stickerNumber }}"
                width="{{ $stickerWidth }}"
                height="{{ $stickerHeight }}"
                loading="{{ $isFirstSticker ? 'eager' : 'lazy' }}"
                x-show="currentIndex === {{ $zeroBasedIndex }}"
                @load="handleImageLoad"
                @if(!$isFirstSticker) x-cloak @endif
                class="h-full w-full object-contain flex-center"
            />
        @endforeach

        <button
            type="button"
            @click="nextSticker"
            aria-label="Changer de sticker"
            class="absolute right-3 top-3 rounded-lg bg-white p-2 shadow-sm transition-colors"
        >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="text-neutral-500"  fill="none" aria-hidden="true">
                <path d="M18 15L21 18M21 18L18 21M21 18H18.5689C17.6297 18 17.1601 18 16.7338 17.8705C16.3564 17.7559 16.0054 17.5681 15.7007 17.3176C15.3565 17.0348 15.096 16.644 14.575 15.8626L14.3333 15.5M18 3L21 6M21 6L18 9M21 6H18.5689C17.6297 6 17.1601 6 16.7338 6.12945C16.3564 6.24406 16.0054 6.43194 15.7007 6.68236C15.3565 6.96523 15.096 7.35597 14.575 8.13744L9.42496 15.8626C8.90398 16.644 8.64349 17.0348 8.29933 17.3176C7.99464 17.5681 7.64357 17.7559 7.2662 17.8705C6.83994 18 6.37033 18 5.43112 18H3M3 6H5.43112C6.37033 6 6.83994 6 7.2662 6.12945C7.64357 6.24406 7.99464 6.43194 8.29933 6.68236C8.64349 6.96523 8.90398 7.35597 9.42496 8.13744L9.66667 8.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
    </div>
</div>

