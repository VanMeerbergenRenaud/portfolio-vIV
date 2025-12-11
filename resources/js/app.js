/*---------------------- JS  ----------------------*/

/* Reveal content on scroll */
document.addEventListener('livewire:navigated', () => {
    // Vérifier les préférences de mouvement réduit
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: prefersReducedMotion ? 0 : 0.1
    });

    // Exclure les images avec gallery-zoom-effect du reveal
    const elementsToReveal = document.querySelectorAll('h1, h2, h3, h4, h5, h6, img:not(.gallery-zoom-effect, .no-reveal), footer');
    elementsToReveal.forEach(element => {
        element.classList.add('reveal-on-scroll');
        observer.observe(element);
    });

    /* Zoom out effect on scroll for gallery images - Bidirectionnel */
    const galleryImages = document.querySelectorAll('.gallery-zoom-effect');

    if (galleryImages.length > 0 && !prefersReducedMotion) {
        const updateZoomEffect = () => {
            galleryImages.forEach(img => {
                const rect = img.getBoundingClientRect();
                const windowHeight = window.innerHeight;

                if (rect.top < windowHeight && rect.bottom > 0) {
                    const scrollProgress = Math.max(0, Math.min(1,
                        (windowHeight - rect.top) / (windowHeight + rect.height)
                    ));

                    const scale = 1.2 - (scrollProgress * 0.2);

                    img.style.transform = `scale(${scale})`;
                } else if (rect.top >= windowHeight) {
                    img.style.transform = 'scale(1.2)';
                }
            });
        };

        let ticking = false;
        const onScroll = () => {
            if (!ticking) {
                window.requestAnimationFrame(() => {
                    updateZoomEffect();
                    ticking = false;
                });
                ticking = true;
            }
        };

        window.addEventListener('scroll', onScroll, { passive: true });
        updateZoomEffect();
    }

    /* Horizontal scroll effect for cards - Professional smooth animation */
    const scrollCards = document.querySelectorAll('[data-scroll-card]');

    if (scrollCards.length > 0 && !prefersReducedMotion && window.innerWidth >= 1024) {
        const state = {
            currentY: window.scrollY,
            targetY: window.scrollY,
            running: false,
            offset: window.innerWidth >= 1280 ? 80 : 50,
            ease: 0.08
        };

        const easeInOutCubic = (t) => {
            return t < 0.5 ? 4 * t * t * t : 1 - Math.pow(-2 * t + 2, 3) / 2;
        };

        const updateCardPositions = () => {
            const h = window.innerHeight;

            scrollCards.forEach(card => {
                const { top, bottom } = card.getBoundingClientRect();

                if (top < h * 1.5 && bottom > -h * 0.5) {
                    const scrollStart = h * 1.2;
                    const scrollEnd = h * 0.5;
                    const rawProgress = Math.max(0, Math.min(1, (scrollStart - top) / (scrollStart - scrollEnd)));
                    const progress = easeInOutCubic(rawProgress);
                    const x = (1 - progress) * state.offset;
                    const dir = card.dataset.scrollCard === 'right' ? x : -x;

                    card.style.transform = `translateX(${dir}px)`;
                    card.style.transition = 'transform 0.05s linear';
                }
            });
        };

        const animate = () => {
            const diff = state.targetY - state.currentY;
            state.currentY += diff * state.ease;

            updateCardPositions();

            if (Math.abs(diff) > 0.5) {
                requestAnimationFrame(animate);
            } else {
                state.running = false;
            }
        };

        let scrollTicking = false;
        const onCardScroll = () => {
            state.targetY = window.scrollY;

            if (!scrollTicking) {
                window.requestAnimationFrame(() => {
                    if (!state.running) {
                        state.running = true;
                        animate();
                    }
                    scrollTicking = false;
                });
                scrollTicking = true;
            }
        };

        window.addEventListener('scroll', onCardScroll, { passive: true });

        let resizeTimeout;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                if (window.innerWidth >= 1280) {
                    state.offset = 80;
                } else if (window.innerWidth >= 1024) {
                    state.offset = 50;
                }
                updateCardPositions();
            }, 150);
        });

        updateCardPositions();
    }
});
