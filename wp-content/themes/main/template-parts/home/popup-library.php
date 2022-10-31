<div class="show_popup bgr_popup" id="popup">
    <div class="overview">
        <img class='popup_close' src="<?php echo THEME_ASSETS . '/images/commons/close_popup.svg'; ?>" alt="">
        <div class="slide_image">
            <div class="swiper gallery_slide_js_popup">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?php echo THEME_ASSETS . '/images/homes/banner-4.jpg' ?>" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo THEME_ASSETS . '/images/homes/banner-1.jpg' ?>" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo THEME_ASSETS . '/images/homes/banner-3.jpg' ?>" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo THEME_ASSETS . '/images/homes/banner-2.jpg' ?>" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo THEME_ASSETS . '/images/homes/img-5.png' ?>" alt="">
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>

<script>
jQuery(document).ready(function($) {

    var gallery_slide_js_popup = new Swiper(".gallery_slide_js_popup", {
        navigation: {
            nextEl: ".show_popup .swiper-button-next",
            prevEl: ".show_popup .swiper-button-prev",
        },
        speed: 1000,
    });



    $(".item_image_library_page").click(function(e) {
        // alert('active')
        $("#popup").removeClass("show_popup");
    });


    $(".popup_close").click(function(e) {
        $("#popup").addClass("show_popup");
    });

    // $('.bgr_popup').click(function(e) {
    //     // if (e.target !== this)
    //     //     return;
    //     $("#popup").addClass("show_popup");
    // });
});
</script>