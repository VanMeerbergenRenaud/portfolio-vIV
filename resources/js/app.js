import hljs from 'highlight.js';

document.addEventListener('livewire:navigated', () => {
    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    document.querySelectorAll('pre code').forEach(hljs.highlightElement);

    const textRevealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                textRevealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: reducedMotion ? 0 : 0.2, rootMargin: '0px 0px -2px 0px' });

    document.querySelectorAll('.smooth-reval-effect, svg, img').forEach(el => {
        el.classList.add('reveal-scroll');
        textRevealObserver.observe(el);
    });


    const galleryImages = document.querySelectorAll('.gallery-zoom-effect');
    if (galleryImages.length && !reducedMotion) {
        let ticking = false;
        const updateZoom = () => {
            const vh = window.innerHeight;
            galleryImages.forEach(img => {
                const { top, bottom, height } = img.getBoundingClientRect();
                if (top < vh && bottom > 0) {
                    const progress = Math.max(0, Math.min(1, (vh - top) / (vh + height)));
                    img.style.transform = `scale(${1.2 - progress * 0.2})`;
                } else if (top >= vh) {
                    img.style.transform = 'scale(1.2)';
                }
            });
            ticking = false;
        };

        window.addEventListener('scroll', () => {
            if (!ticking) {
                requestAnimationFrame(updateZoom);
                ticking = true;
            }
        }, { passive: true });

        updateZoom();
    }

    /* Horizontal scroll cards effect */
    const scrollCards = document.querySelectorAll('[data-scroll-card]');
    if (scrollCards.length && !reducedMotion && window.innerWidth >= 1024) {
        const state = { current: window.scrollY, target: window.scrollY, running: false };
        const offset = window.innerWidth >= 1280 ? 80 : 50;

        const updateCards = () => {
            const vh = window.innerHeight;
            scrollCards.forEach(card => {
                const { top, bottom } = card.getBoundingClientRect();
                if (top < vh * 1.5 && bottom > -vh * 0.5) {
                    const rawProgress = Math.max(0, Math.min(1, (vh * 1.2 - top) / (vh * 0.7)));
                    const progress = rawProgress < 0.5 ? 4 * rawProgress ** 3 : 1 - (-2 * rawProgress + 2) ** 3 / 2;
                    const x = (1 - progress) * offset * (card.dataset.scrollCard === 'right' ? 1 : -1);
                    card.style.transform = `translateX(${x}px)`;
                }
            });
        };

        const animate = () => {
            const diff = state.target - state.current;
            state.current += diff * 0.08;
            updateCards();
            state.running = Math.abs(diff) > 0.5;
            if (state.running) requestAnimationFrame(animate);
        };

        let ticking = false;
        window.addEventListener('scroll', () => {
            state.target = window.scrollY;
            if (!ticking) {
                requestAnimationFrame(() => {
                    if (!state.running) {
                        state.running = true;
                        animate();
                    }
                    ticking = false;
                });
                ticking = true;
            }
        }, { passive: true });

        updateCards();
    }
});
