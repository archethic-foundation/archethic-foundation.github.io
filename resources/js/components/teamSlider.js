if ($('.team-slider').length) {
    $('.team-slider').owlCarousel({
        loop: true,
        nav: true,
        autoplay: true,
        autoplayTimeout: 5000,
        smartSpeed: 450,
        margin: 20,
        dots: false,
        navText: [
            '<i class="bi bi-chevron-left text-primary hero4"></i>',
            '<i class="bi bi-chevron-right text-primary hero4"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            },
            1200: {
                items: 3
            },
            1400: {
                items: 4
            }
        }
    });
}