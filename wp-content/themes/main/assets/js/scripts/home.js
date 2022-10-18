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
        slidesPerView: 1,
        loop: true,
        pagination: {
            el: "#swiper-activity-list .swiper-pagination",
            type: "fraction",
        },
        navigation: {
            nextEl: "#swiper-activity-list .swiper-button-next",
            prevEl: "#swiper-activity-list .swiper-button-prev",
        },
        breakpoints: {
            1280: {
                slidesPerView: 5,
            },
            992: {
                slidesPerView: 4,
            },
            576: {
                slidesPerView: 3,
            }
        }
    });

    // SS5 - Featured news
    new Swiper("#swiper-featured-news .swiper", {
        slidesPerView: 1,
        spaceBetween: 24,
        pagination: {
            el: "#swiper-featured-news .swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            576.1: {
                slidesPerView: 2,
            }
        }
    });



    //library
    new WOW().init();

})