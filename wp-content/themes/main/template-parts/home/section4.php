<div class="typography h-section-4">
    <div class="tw-container">
        <div class="tw-wrapper">
            <div class="tw-title center">
                <p>Xuân cầu holdings</p>
                <h2>Dự án tiêu biểu</h2>
            </div>
            <div class="typical-projects">
                <?php
                    for ($i = 0; $i < 6; $i++) {
                        $url = HOME_URL;
                        $image =  THEME_ASSETS . '/images/homes/s4-image.jpg';
                        $title =  'Nhà máy điện mặt trời Dầu Tiếng ' . ($i + 1);
                        get_template_part(
                            'template-parts/components/typical-project',
                            'item',
                            [
                                'url' => $url,
                                'image' => $image,
                                'index' => $i + 1,
                                'title' => $title
                            ]
                        );
                    }
                ?>
            </div>
            <div class="control">
                <a href="#" class="tw-button-primary">Xem thêm</a>
            </div>
        </div>
    </div>
</div>