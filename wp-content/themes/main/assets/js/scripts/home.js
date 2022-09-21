jQuery(document).ready(function($) {
    // SS1
    new Swiper("#banner-ldp .banner-swiper", {
        effect: 'fade',
        loop: true,
        // autoplay: {
        //     delay: 3000
        // },
    });
    // Slide SS2
    new Swiper("#chinh-sach-ban-hang .swiper-sales-policy", {
        loop: true,
        effect: 'fade',
        speed: 2000,
        autoplay: {
            delay: 3000
        },
        spaceBetween: 30,
        navigation: {
            nextEl: "#chinh-sach-ban-hang .tw-swiper-button .button-next",
            prevEl: "#chinh-sach-ban-hang .tw-swiper-button .button-prev",
        },
    });

    // SS4
    const optionSwiper = new Swiper("#ly-do-lua-chon .option-content-slide", {
        effect: 'fade',
        speed: 2000,
        navigation: {
            nextEl: "#ly-do-lua-chon .tw-swiper-button .button-next",
            prevEl: "#ly-do-lua-chon .tw-swiper-button .button-prev",
        },
    });
    optionSwiper.on('slideChange', function() {
        console.log(optionSwiper.activeIndex);
        $('#ly-do-lua-chon .option-context .context-item').eq(optionSwiper.activeIndex).siblings().css('display', 'none')
        $('#ly-do-lua-chon .option-context .context-item').eq(optionSwiper.activeIndex).css('display', 'flex')
    })

    // SS7
    $('[data-lib]').click(function() {
        const dataLib = $(this).attr('data-lib');
        $(this).addClass('is-active')
        $(this).siblings().removeClass('is-active')
        const elLib = $(`#${dataLib}`)
        elLib.siblings().removeClass('is-active')
        elLib.addClass('is-active')
    })
    const libPictureSwiperThumb = new Swiper("#thu-vien .lib-picture-swiper-thumb", {
        slidesPerView: 3,
        spaceBetween: 6,
        mousewheel: true,
        centeredSlides: true,
        loop: true,
        freeMode: true,
        watchSlidesProgress: true,
        breakpoints: {
            577: {
                direction: "vertical",
                spaceBetween: 12,
            },
        }
    });
    new Swiper("#thu-vien .lib-picture-swiper", {
        effect: "fade",
        loop: true,
        navigation: {
            nextEl: "#thu-vien .lib-picture-swiper .button-next",
            prevEl: "#thu-vien .lib-picture-swiper .button-prev",
        },
        thumbs: {
            swiper: libPictureSwiperThumb,
        },
    });

    const libVideoSwiperThumb = new Swiper("#thu-vien .lib-video-swiper-thumb", {
        slidesPerView: 3,
        spaceBetween: 6,
        mousewheel: true,
        centeredSlides: true,
        loop: true,
        freeMode: true,
        watchSlidesProgress: true,
        breakpoints: {
            577: {
                direction: "vertical",
                spaceBetween: 12,
            },
        }
    });
    new Swiper("#thu-vien .lib-video-swiper", {
        effect: "fade",
        loop: true,
        navigation: {
            nextEl: "#thu-vien .lib-video-swiper .button-next",
            prevEl: "#thu-vien .lib-video-swiper .button-prev",
        },
        thumbs: {
            swiper: libVideoSwiperThumb,
        },
    });

    // SS8
    $('[data-agency]').click(function() {
        const dataAgency = $(this).attr('data-agency');
        $(this).addClass('is-active')
        $(this).siblings().removeClass('is-active')
        const elAgency = $(`#${dataAgency}`)
        elAgency.siblings().fadeOut(0)
        elAgency.fadeIn(0)
    })
})