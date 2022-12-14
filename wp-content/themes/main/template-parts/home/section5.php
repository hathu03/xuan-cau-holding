<?php
    $featured = new WP_Query(array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 10,
        'orderby' => 'date',
        'order' => 'DESC',
        'post__in' => get_option( 'sticky_posts' ),
        'ignore_sticky_posts' => false,  
    ));
    $latest = new WP_Query(array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 5,
        'orderby' => 'date',
        'order' => 'DESC',
        'ignore_sticky_posts' => true,  
    ));
?>
<div class="typography h-section-5" id="tin-tuc">
    <div class="tw-container">
        <div class="tw-wrapper">
            <div class="context">
                <div class="h-news-header">
                    <div class="tw-title animate__animated animate__rotateIn animate__delay-2s wow rotateIn"
                        data-wow-duration="1s" data-wow-delay="0s">
                        <h2>Tin tức</h2>
                    </div>
                    <a href="#"
                        class="tw-button-primary animate__animated animate__flipInY animate__delay-2s wow flipInY"
                        data-wow-duration="2s" data-wow-delay="0s">
                        <span>Xem tất cả</span>
                    </a>
                </div>
                <div class="h-news-content">
                    <div class="featured-news animate__animated animate__fadeInLeft animate__delay-2s wow slideInLeft"
                        data-wow-duration="2s" data-wow-delay="-1s">
                        <h3 class="label">Tin nổi bật</h3>
                        <div class="list-featured">
                            <?php
                                if($featured -> have_posts()){
                                    get_template_part(
                                        'template-parts/components/news/swiper',
                                        'card',
                                        [
                                            'id' => 'swiper-featured-news',
                                            'featuredPosts' => $featured,
                                        ]
                                    );
                                }
                            ?>
                        </div>
                    </div>
                    <div class="latest-news animate__animated animate__fadeInRight animate__delay-2s wow slideInRight"
                        data-wow-duration="2s" data-wow-delay="-1s">
                        <h3 class="label">Tin mới nhất</h3>
                        <div class="list-latest">
                            <?php
                                if($latest -> have_posts()){
                                    get_template_part('template-parts/components/news/list', 'latest', ['latestPosts' => $latest]);
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="h-news-control">
                    <a href="#" class="tw-button-primary">
                        <span>Xem tất cả</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>