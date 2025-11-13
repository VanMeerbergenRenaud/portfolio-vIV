<!-- Preloader -->
<div
    x-cloak
    x-data="preloader"
    x-show="show"
    x-transition:leave="transition ease-in-out duration-800"
    x-transition:leave-start="translate-y-0"
    x-transition:leave-end="-translate-y-full"
    class="will-change-transform fixed inset-0 bg-gray-100 items-center justify-center z-50 p-8 flex flex-col"
>
    <h1
        aria-level="1"
        aria-label="Chargement..."
        role="heading"
        class="font-bold"
    >
        <template x-for="(char, index) in text" :key="index">
            <span
                class="inline-block text-[#A9A9A9] font-medium opacity-0 text-[44px] md:text-[56px]"
                :style="{
                    'will-change': 'transform, opacity, color',
                     animation: `
                        letter-in 0.6s cubic-bezier(0.25, 1, 0.5, 1) forwards ${index * 50}ms,
                        letter-fill-color 0.4s ease forwards ${1100 + index * 50}ms
                     `
                }"
                x-text="char === ' ' ? '\u00A0' : char"
            ></span>
        </template>
    </h1>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('preloader', () => ({
            show: true,
            text: 'Renaud Vmb®'.split(''),
            init() {
                const pageLoaded = new Promise(resolve => {
                    window.addEventListener('load', resolve);
                });

                const minimumTime = new Promise(resolve => {
                    setTimeout(resolve, 1750);
                });

                Promise.all([pageLoaded, minimumTime]).then(() => {
                    this.show = false;
                });

                // Make sure to hide preloader after 2 seconds in case of issues
                setTimeout(() => {
                    this.show = false;
                }, 2000);
            }
        }));
    });
</script>
