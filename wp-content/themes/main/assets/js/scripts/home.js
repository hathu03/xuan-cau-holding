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

    // SS3 - swiper-activity-list
    new Swiper("#swiper-activity-list .swiper", {
        slidesPerView: 5,
        spaceBetween: 0,
        loop: true,
        pagination: {
            el: "#swiper-activity-list .swiper-pagination",
            type: "fraction",
        },
        navigation: {
            nextEl: "#swiper-activity-list .swiper-button-next",
            prevEl: "#swiper-activity-list .swiper-button-prev",
        },
    });

    // SS5 - Featured news
    new Swiper("#swiper-featured-news .swiper", {
        slidesPerView: 2,
        spaceBetween: 24,
        pagination: {
            el: "#swiper-featured-news .swiper-pagination",
            clickable: true,
        },
    });
})