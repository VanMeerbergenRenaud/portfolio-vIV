{{-- Curseur custom --}}
<div
    x-data="refinedCursor()"
    x-init="init()"
    class="hidden lg:block fixed inset-0 pointer-events-none z-[9999] mix-blend-difference"
>
    <div
        class="fixed top-0 left-0 bg-white rounded-full pointer-events-none transition-[width,height] duration-300 ease-out"
        :style="`transform: translate(${x}px, ${y}px);`"
        :class="{
            'w-10 h-10 -mt-4 -ml-4': hovering,
            'w-2 h-2 -mt-1 -ml-1': !hovering
        }"
    >
    </div>
</div>

<script>
    function refinedCursor() {
        return {
            // Cible les éléments qui déclencheront l'effet
            INTERACTIVE_SELECTOR: 'a, button, [role="button"], [type="button"]',

            LERP_FACTOR: 0.15, // Facteur de lissage (plus petit = plus de "retard")
            MAGNETIC_FORCE: 0.1, // Force d'attraction de l'élément (plus grand = plus de mouvement)

            // --- État ---
            x: -100,
            y: -100,
            mouseX: -100,
            mouseY: -100,
            hovering: false,

            // --- Initialisation ---
            init() {
                this.startAnimationLoop();
                this.setupEventListeners();
            },

            // Boucle d'animation principale pour un mouvement fluide
            startAnimationLoop() {
                const animate = () => {
                    this.x += (this.mouseX - this.x) * this.LERP_FACTOR;
                    this.y += (this.mouseY - this.y) * this.LERP_FACTOR;
                    requestAnimationFrame(animate);
                };
                requestAnimationFrame(animate);
            },

            setupEventListeners() {
                // Listener -> position de la souris
                window.addEventListener('mousemove', e => {
                    this.mouseX = e.clientX;
                    this.mouseY = e.clientY;
                });

                // Listeners -> éléments interactifs
                document.querySelectorAll(this.INTERACTIVE_SELECTOR).forEach(el => {
                    // Effet magnétique
                    el.addEventListener('mousemove', e => {
                        const rect = el.getBoundingClientRect();
                        const centerX = rect.left + rect.width / 2;
                        const centerY = rect.top + rect.height / 2;

                        const deltaX = (e.clientX - centerX) * this.MAGNETIC_FORCE;
                        const deltaY = (e.clientY - centerY) * this.MAGNETIC_FORCE;

                        el.style.transform = `translate(${deltaX}px, ${deltaY}px)`;
                    });

                    // État au survol
                    el.addEventListener('mouseenter', () => {
                        this.hovering = true;
                        el.style.transition = 'transform 0.3s cubic-bezier(0.16, 1, 0.3, 1)';
                    });

                    el.addEventListener('mouseleave', () => {
                        this.hovering = false;
                        el.style.transform = 'translate(0, 0)';
                    });
                });
            }
        }
    }
</script>
