<div class="typography h-section-3">
    <div class="title-box">
        <div class="tw-title center-m">
            <p>Xuân Cầu Holding</p>
            <h2>Lĩnh vực hoạt động</h2>
        </div>
    </div>
    <div class="activity-list" id="swiper-activity-list">
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php for ($i=0; $i < 10; $i++) { ?>
                    <a href="#" class="swiper-slide">
                        <div class="picture">
                            <img src="<?php echo THEME_ASSETS . '/images/homes/s3-img-1.jpg' ?>" alt="Năng lượng Tái Tạ0">
                        </div>
                        <div class="info">
                            <div class="info-label">
                                <p><?php echo $i + 1 >= 10 ? $i + 1 : '0'.($i + 1) ?>.</php>
                                <h3>Năng lượng Tái Tạo <?php echo $i ?></h3>
                            </div>
                            <img class="icon-plus" width="22px" height="22px" src="<?php echo THEME_ASSETS . '/images/commons/icon-plus.svg' ?>" alt="icon+plus">
                        </div>
                    </a>
                <?php } ?>
            </div>
        </div>
        <div class="swiper-control-activity">
            <div class="swiper-button-prev">
                <img width="18px" height="18px" src="<?php echo THEME_ASSETS . '/images/commons/icon-prev.svg' ?>" alt="icon-prev">
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next">
                <img width="18px" height="18px" src="<?php echo THEME_ASSETS . '/images/commons/icon-next.svg' ?>" alt="icon-next">
            </div>
        </div>
    </div>
</div>