jQuery(document).ready(function($) {
    // SS1
    new Swiper("#home-slide-banner", {
        lazy: true,
        effect: 'fade',
        pagination: {
            el: "#home-slide-banner .swiper-pagination",
            clickable: true,
        },
    });
})