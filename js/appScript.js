$(document).ready(function () {
    var silder = $(".owl-carousel");
    silder.owlCarousel({
        loop:true,
        autoplay: true,
        autoplayTimeout: 2500,
        autoplayHoverPause: false,
        items: 1,
        center: true,
        nav: false,
        margin: 40,
        dots: true,
        responsive: {
            0: {
                items: 1,
            },
            575: { items: 1 },
            768: { items: 2 },
            991: { items: 3 },
            1200: { items: 4 }
        }
    });
});