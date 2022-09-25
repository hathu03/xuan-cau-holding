<div class="tw-list-news-latest">
    <?php
        $latestPosts = $args['latestPosts'];
        while ($latestPosts->have_posts()) {
            $latestPosts->the_post();
            $id = get_the_ID();
            $title = get_the_title($id);
            $url = get_the_permalink($id);
            $scheduleAt = get_the_time('d/m/Y', $id);
            get_template_part(
                'template-parts/components/news/news',
                'item',
                [
                    'url' => $url,
                    'title' => $title,
                    'scheduleAt' => $scheduleAt,
                ]
            );
        }
    ?>
</div>