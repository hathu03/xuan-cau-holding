<?php 
$information = get_field('information', 'option');
$hot_line = $information['hot_line'];
// $mail = $information['mail'];
// $address = $information['address'];
?>



<div class="container_common">
    <div class="content_common">
        <div class="floating_common">
            <a href="tel:<?= $hotline ?>" class="float">
                <img src="<?php echo THEME_ASSETS . '/images/commons/phone_floating.png' ?>">
            </a>
            <a href="<?= $mail ?>" target="_blank" class="float">
                <img src="<?php echo THEME_ASSETS . '/images/commons/mail_floating.png'; ?>" alt="">
            </a>

            <a href="<?= $address ?>" target="_blank" class="float">
                <img src="<?php echo THEME_ASSETS . '/images/commons/map_floating.png'; ?>" alt="">
            </a>
        </div>
    </div>
</div>



<!-- 
<script>
jQuery(document).ready(function($) {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.floating_common').fadeIn();
        } else {
            $('.floating_common').fadeOut();
        }
    });
    $('.floating_common').click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
});
</script> -->