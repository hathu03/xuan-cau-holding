<div class="button_back_top">
    <a href="" class="back_top">
        <img src="<?php echo THEME_ASSETS . '/images/commons/arrow_back_top.svg'; ?>" alt="">
    </a>
</div>


<script>
jQuery(document).ready(function($) {
    $(window).scroll(function() {
        if ($(this).scrollTop()) {
            $('.button_back_top').fadeIn();
        } else {
            $('.button_back_top').fadeOut();
        }
    });
    $('.button_back_top').click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 1000);
        return false;
    });
});
</script>