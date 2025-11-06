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

    const elementsToReveal = document.querySelectorAll('h1, h2, h3, h4, h5, h6, section, img, footer');
    elementsToReveal.forEach(element => {
        element.classList.add('reveal-on-scroll');
        observer.observe(element);
    });
});
