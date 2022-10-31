<?php
$introduce = get_field('introduce', 'option');
$title = $introduce['title'];
$sub_title = $introduce['sub_title'];
$excerpt = $introduce['excerpt'];
$thumbnail = $introduce['thumbnail'];
?>

<div class="typography h-section-2" id="gioi-thieu">
    <img width="1440px" height="676px" class="s2-bg"
        src="<?php echo $introduce['thumbnail']['url'] ? $introduce['thumbnail']['url'] : THEME_ASSETS . '/images/homes/s2-image.jpg' ?>"
        alt="">
    <div class="tw-container">
        <div class="tw-wrapper">
            <div class="context">
                <div class="left animate__animated animate__fadeInDown animate__delay-2s wow slideInLeft"
                    data-wow-duration="2s" data-wow-delay="-1s">
                    <div class="tw-title">
                        <p><?= $sub_title ?></p>
                        <h2><?= $title ?></h2>
                    </div>
                </div>
                <div class="right animate__animated animate__fadeInDown animate__delay-2s wow slideInRight"
                    data-wow-duration="2s" data-wow-delay="0s">
                    <p><?= $excerpt ?></p>
                    <br>
                    <a href="#" class="tw-see-more-inline">
                        <img width="22px" height="22px"
                            src="<?php echo THEME_ASSETS . '/images/commons/icon-plus.svg' ?>" alt="icon+plus">
                        <span>Xem thêm</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>