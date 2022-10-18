<div class="typography h-section-4" id="du-an">
    <div class="tw-container">
        <div class="tw-wrapper">
            <div class="tw-title center animate__animated animate__flipInX animate__delay-2s wow flipInX"
                data-wow-duration="2s" data-wow-delay="0.3s">
                <p>Xuân cầu holdings</p>
                <h2>Dự án tiêu biểu</h2>
            </div>
            <div class="typical-projects center animate__animated animate__fadeInUp animate__delay-2s wow slideInDown"
                data-wow-duration="2s" data-wow-delay="-1s">
                <?php
                    for ($i = 0; $i < 6; $i++) {
                        $url = HOME_URL;
                        $thumbnail =  THEME_ASSETS . '/images/homes/s4-image.jpg';
                        $title =  'Nhà máy điện mặt trời Dầu Tiếng ' . ($i + 1);
                        get_template_part(
                            'template-parts/components/typical-project',
                            'item',
                            [
                                'url' => $url,
                                'thumbnail' => $thumbnail,
                                'index' => $i + 1,
                                'title' => $title
                            ]
                        );
                    }
                ?>
            </div>
            <div class="control">
                <a href="#" class="tw-button-primary animate__animated animate__flipInY animate__delay-2s wow flipInY"
                    data-wow-duration="2s" data-wow-delay="0s">
                    <span>Xem thêm</span>
                </a>
            </div>
        </div>
    </div>
</div>