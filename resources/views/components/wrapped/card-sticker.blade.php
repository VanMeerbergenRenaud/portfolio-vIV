@props(['startIndex' => 0])

<div class="mb-6 break-inside-avoid"
     x-data="{
        currentIndex: {{ $startIndex }},
        next() {
            this.currentIndex = (this.currentIndex + 1) % 9;
        }
     }"
>
    <div class="group relative flex-center min-h-80 w-full max-w-none md:max-w-90 overflow-hidden rounded-xl">
        <div x-show="currentIndex === 0">
            <x-svg.wrapped.random1 />
        </div>
        <div x-show="currentIndex === 1">
            <x-svg.wrapped.random2 />
        </div>
        <div x-show="currentIndex === 2">
            <x-svg.wrapped.random3 />
        </div>
        <div x-show="currentIndex === 3">
            <x-svg.wrapped.random4 />
        </div>
        <div x-show="currentIndex === 4">
            <x-svg.wrapped.random5 />
        </div>
        <div x-show="currentIndex === 5">
            <x-svg.wrapped.random6 />
        </div>
        <div x-show="currentIndex === 6">
            <x-svg.wrapped.random7 />
        </div>
        <div x-show="currentIndex === 7">
            <x-svg.wrapped.random8 />
        </div>
        <div x-show="currentIndex === 8">
            <x-svg.wrapped.random9 />
        </div>
        <button
            type="button"
            @click="next()"
            aria-label="Changer de sticker"
            class="absolute top-3 right-3 rounded-lg bg-white/80 p-2 shadow-sm transition-colors hover:bg-white active:bg-neutral-200 md:opacity-0 md:transition-opacity md:group-hover:opacity-100"
        >
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-neutral-500">
                <path d="M18 15L21 18M21 18L18 21M21 18H18.5689C17.6297 18 17.1601 18 16.7338 17.8705C16.3564 17.7559 16.0054 17.5681 15.7007 17.3176C15.3565 17.0348 15.096 16.644 14.575 15.8626L14.3333 15.5M18 3L21 6M21 6L18 9M21 6H18.5689C17.6297 6 17.1601 6 16.7338 6.12945C16.3564 6.24406 16.0054 6.43194 15.7007 6.68236C15.3565 6.96523 15.096 7.35597 14.575 8.13744L9.42496 15.8626C8.90398 16.644 8.64349 17.0348 8.29933 17.3176C7.99464 17.5681 7.64357 17.7559 7.2662 17.8705C6.83994 18 6.37033 18 5.43112 18H3M3 6H5.43112C6.37033 6 6.83994 6 7.2662 6.12945C7.64357 6.24406 7.99464 6.43194 8.29933 6.68236C8.64349 6.96523 8.90398 7.35597 9.42496 8.13744L9.66667 8.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </button>
    </div>
</div>

