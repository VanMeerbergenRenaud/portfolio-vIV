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
        currentIndex: {{ $startIndex }},
        totalStickers: {{ $totalStickers }},
        loadedImages: new Set([0]),
        isLoading: false,

        init() {
            this.$watch('currentIndex', () => {
                this.checkLoading();
            });
            this.$watch('isLoading', value => {
                if (!value) this.$el.dispatchEvent(new CustomEvent('sticker-loaded', { bubbles: true }));
            });
        },

        checkLoading() {
            this.isLoading = !this.loadedImages.has(this.currentIndex);
        },

        nextSticker() {
            this.currentIndex = (this.currentIndex + 1) % this.totalStickers;
        },

        handleImageLoad(index) {
            this.loadedImages.add(index);
            if (index === this.currentIndex) {
                this.isLoading = false;
            }
        }
    }"
    {{ $attributes->merge(['class' => 'mb-6 break-inside-avoid']) }}
>
    <div class="group relative flex-center min-h-80 w-full max-w-none overflow-hidden rounded-2xl bg-neutral-100 md:max-w-90">
        <div
            x-show="isLoading"
            role="status" aria-live="polite"
            class="absolute inset-0 z-10 flex-center bg-neutral-50"
        >
            <svg class="mr-2.5 h-5 w-5 animate-spin text-neutral-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            <span class="text-sm font-medium text-neutral-500">Chargement de l'image...</span>
        </div>

        @foreach(range(1, $totalStickers) as $index)
            @php
                $stickerNumber = $index;
                $isFirstSticker = $index === 1;
                $zeroBasedIndex = $index - 1;
            @endphp

            <img
                src="{{ asset("img/wrapped/random$stickerNumber.svg") }}"
                alt="Sticker décoratif {{ $stickerNumber }}"
                width="{{ $stickerWidth }}"
                height="{{ $stickerHeight }}"
                loading="{{ $isFirstSticker ? 'eager' : 'lazy' }}"
                x-show="currentIndex === {{ $zeroBasedIndex }}"
                @load="handleImageLoad({{ $zeroBasedIndex }})"
                @if(!$isFirstSticker) x-cloak @endif
                class="no-reveal h-full w-full object-contain text-transparent"
            />
        @endforeach

        <button
            type="button"
            @click="nextSticker"
            aria-label="Changer de sticker"
            class="absolute right-3 top-3 z-20 rounded-lg bg-white p-2 shadow-sm transition-colors"
        >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="text-neutral-500"  fill="none" aria-hidden="true">
                <path d="M18 15L21 18M21 18L18 21M21 18H18.5689C17.6297 18 17.1601 18 16.7338 17.8705C16.3564 17.7559 16.0054 17.5681 15.7007 17.3176C15.3565 17.0348 15.096 16.644 14.575 15.8626L14.3333 15.5M18 3L21 6M21 6L18 9M21 6H18.5689C17.6297 6 17.1601 6 16.7338 6.12945C16.3564 6.24406 16.0054 6.43194 15.7007 6.68236C15.3565 6.96523 15.096 7.35597 14.575 8.13744L9.42496 15.8626C8.90398 16.644 8.64349 17.0348 8.29933 17.3176C7.99464 17.5681 7.64357 17.7559 7.2662 17.8705C6.83994 18 6.37033 18 5.43112 18H3M3 6H5.43112C6.37033 6 6.83994 6 7.2662 6.12945C7.64357 6.24406 7.99464 6.43194 8.29933 6.68236C8.64349 6.96523 8.90398 7.35597 9.42496 8.13744L9.66667 8.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
    </div>
</div>

