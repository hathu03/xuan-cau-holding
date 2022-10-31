<?php

$title_shareholder = get_field('title_shareholder', 'option');
$sub_title = $title_shareholder['sub_title'];
$title = $title_shareholder['title'];
$album_logo = get_field('album_logo', 'option');

?>


<div class="typography h-section-6">
    <div class="tw-container">
        <div class="tw-wrapper">
            <div class="context">
                <div class="tw-title center animate__animated animate__flipInX animate__delay-2s wow flipInX"
                    data-wow-duration="2s" data-wow-delay="0s">
                    <p><?= $sub_title ?></p>
                    <h2><?= $title ?></h2>
                </div>
                <div class="logo-partner">

                    <?php if(!empty($album_logo)) : ?>
                    <?php foreach ($album_logo as $key => $value) : ?>

                    <a href="<?php echo $value['description'] ?>" target="_blank"
                        class="logo-item animate__animated animate__fadeInDown animate__delay-2s wow slideInDown"
                        data-wow-duration="2s" data-wow-delay="0s">
                        <img width="140px" height="140px" src="<?php echo $value['url'] ?>" alt="logo+partner">
                    </a>

                    <?php endforeach ?>
                    <?php endif ?>

                </div>
            </div>
        </div>
    </div>
</div>