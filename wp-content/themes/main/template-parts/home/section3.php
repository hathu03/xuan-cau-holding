<?php 
$title = get_the_title();
$idPage = get_the_ID();
$thumbnail = get_the_post_thumbnail_url($id) ? get_the_post_thumbnail_url($idPage) : '';
// $excerpt = get_the_excerpt($id);
?>

<?php
$field_of_activity = new WP_Query(
    array(
        'post_type' => 'field_of_activity',
        'post_per_page' => -1,
        'post_status' => 'publish',
    )
    );
//  var_dump($thumbnail)
?>
<div class="typography h-section-3" id="linh-vuc">
    <div class="title-box">
        <div class="tw-title center-m animate__animated animate__fadeInDown animate__delay-2s wow slideInLeft"
            data-wow-duration="2s" data-wow-delay="-1s">
            <p>Xuân Cầu Holding</p>
            <h2>Lĩnh vực hoạt động</h2>
        </div>
    </div>
    <?php //var_dump($field_of_activity) ?>
    <div class="activity-list" id="swiper-activity-list">
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php if ($field_of_activity->have_posts()) : $i=0 ?>
                <?php while ($field_of_activity->have_posts()) : $field_of_activity->the_post()?>
                <?php
                    $i++;
                    $id = get_the_ID();
                    $title = get_the_title($id);
                    // $link = get_term_link($id);
                    $permalink = get_permalink($id);
                    $thumbnail= get_the_post_thumbnail_url($id) ? get_the_post_thumbnail_url($id) : '' ;
                ?>
                <?php //for ($i=0; $i < 10; $i++) { ?>
                <a href="<?= $permalink ?  $permalink : '' ?>" class="swiper-slide">
                    <div class="picture">
                        <img src="<?= $thumbnail ?>" alt="Năng lượng Tái Tạ0">
                    </div>
                    <div class="info">
                        <div class="info-label center-m animate__animated animate__fadeInDown animate__delay-2s wow slideInRight"
                            data-wow-duration="2s" data-wow-delay="-1s">
                            <p><?php echo '0'.($i ) ?>.</p>
                            <h3><?php echo $title ?> <?php //echo $i ?></h3>
                        </div>
                        <img class="icon-plus" width="22px" height="22px"
                            src="<?php echo THEME_ASSETS . '/images/commons/icon-plus.svg' ?>" alt="icon+plus">
                    </div>
                </a>
                <?php // } ?>
                <?php  endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="swiper-control-activity">
            <div class="swiper-button-prev">
                <img width="18px" height="18px" src="<?php echo THEME_ASSETS . '/images/commons/icon-prev.svg' ?>"
                    alt="icon-prev">
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next">
                <img width="18px" height="18px" src="<?php echo THEME_ASSETS . '/images/commons/icon-next.svg' ?>"
                    alt="icon-next">
            </div>
        </div>
    </div>
</div>