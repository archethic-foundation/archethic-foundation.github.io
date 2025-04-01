document.addEventListener('DOMContentLoaded', function () {
    const marquee = document.querySelector('.logo-partners');
    if (!marquee) {
        return;
    }

    let speed = window.innerWidth <= 768 ? 1.25 : 1;

    window.addEventListener('resize', () => {
        speed = window.innerWidth <= 768 ? 1.25 : 1;
    });

    const logos = Array.from(marquee.children);
    logos.forEach((logo) => {
        const clone = logo.cloneNode(true);
        marquee.appendChild(clone);
    });

    let offset = 0;

    function scrollLogos() {
        offset -= speed;
        if (Math.abs(offset) >= marquee.scrollWidth / 2) {
            offset = 0;
        }
        marquee.style.transform = `translateX(${offset}px)`;
        requestAnimationFrame(scrollLogos);
    }

    scrollLogos();
});