/*---------------------- JS  ----------------------*/

/* Reveal content on scroll */
document.addEventListener('livewire:navigated', () => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1
    });

    // Exclure les images avec gallery-zoom-effect du reveal
    const elementsToReveal = document.querySelectorAll('h1, h2, h3, h4, h5, h6, section, img:not(.gallery-zoom-effect), footer');
    elementsToReveal.forEach(element => {
        element.classList.add('reveal-on-scroll');
        observer.observe(element);
    });

    /* Zoom out effect on scroll for gallery images - Bidirectionnel */
    const galleryImages = document.querySelectorAll('.gallery-zoom-effect');

    if (galleryImages.length > 0) {
        const updateZoomEffect = () => {
            galleryImages.forEach(img => {
                const rect = img.getBoundingClientRect();
                const windowHeight = window.innerHeight;

                // L'image est visible dans le viewport
                if (rect.top < windowHeight && rect.bottom > 0) {
                    // Calculer la position de l'image dans le viewport
                    // 0 = en bas de l'écran (juste entrée), 1 = en haut de l'écran (sortie par le haut)
                    const scrollProgress = Math.max(0, Math.min(1,
                        (windowHeight - rect.top) / (windowHeight + rect.height)
                    ));

                    // Interpoler le scale entre 1.2 (en bas) et 1 (en haut)
                    // Plus l'image monte, plus elle se dézoom
                    const scale = 1.2 - (scrollProgress * 0.2);

                    img.style.transform = `scale(${scale})`;
                } else if (rect.top >= windowHeight) {
                    // L'image est en dessous du viewport (pas encore visible)
                    img.style.transform = 'scale(1.2)';
                }
            });
        };

        // Throttle pour optimiser les performances
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
        updateZoomEffect(); // Init au chargement
    }
});
