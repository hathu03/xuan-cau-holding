<?php
$banner = get_field('banner', 'option');
$slide = $banner['slide'];
?>



<div class="typography h-section-1">
    <div class="swiper-wrapper">
        <div class="swiper h-slide-banner" id="home-slide-banner">
            <div class="swiper-wrapper">

                <?php if (!empty($slide)) : $i = 1?>
                <?php foreach ($slide as $key => $value) : ?>


                <div class="swiper-slide">
                    <div class="picture">
                        <img width="1440px" height="810px" class="swiper-lazy"
                            data-src="<?php echo $value['img']['url'] ? $value['img']['url']  : THEME_ASSETS . '/images/homes/banner-1.jpg' ?>"
                            alt="Banner trang chủ">
                    </div>
                    <div class="text animate__animated animate__fadeInDown animate__delay-2s wow fadeInDown"
                        data-wow-duration="2s" data-wow-delay="0s">
                        <p class="text-large"><?= $value['title'] ?></p>
                        <p class="text-small"><?= $value['sub_title'] ?></p>
                    </div>
                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                </div>


                <?php $i = $i + 1 ?>
                <?php endforeach ?>
                <?php endif ?>
            </div>
            <div class="swiper-pagination tw-swiper-pagination tw-swiper-pagination-large"></div>
        </div>
    </div>
</div>