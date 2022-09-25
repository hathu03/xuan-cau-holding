
<div class="tw-swiper-cart-news" id="swiper-featured-news">
    <div class="swiper">
        <div class="swiper-wrapper">
            <?php
                $featuredPosts = $args['featuredPosts'];
                while ($featuredPosts->have_posts()) {
                    $featuredPosts->the_post();
                    $id = get_the_ID();
                    $title = get_the_title($id);
                    $url = get_the_permalink($id);
                    $thumbnail = get_the_post_thumbnail_url($id, 'post-thumbnail');
                    $scheduleAt = get_the_time('d/m/Y', $id);
                    echo '<div class="swiper-slide">';
                    get_template_part(
                        'template-parts/components/news/news',
                        'item',
                        [
                            'url' => $url,
                            'thumbnail' => !empty($thumbnail) ? $thumbnail : NOT_IMAGE,
                            'title' => $title,
                            'scheduleAt' => $scheduleAt,
                        ]
                    );
                    echo '</div>';
                }
            ?>
        </div>
    </div>    
    <div class="swiper-pagination tw-swiper-pagination"></div>
</div>