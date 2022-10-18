<?php
    $date = new DateTime();
    $url = $args['url'] ?? '#';
    $thumbnail = $args['thumbnail'];
    $title = $args['title'] ?? 'Title';
    $scheduleAt = $args['scheduleAt'] ?? $date->format('d/m/Y');
    $className = $thumbnail ? ' is-thumbnail' : ' no-thumbnail';
?>
<a href="<?php echo $url ?>" class="tw-news-item<?php echo $className ?>">
    <?php
        if(!empty($thumbnail)) {
            echo '
            <div class="thumbnail">
                <div class="image">
                    <img src="'.$thumbnail.'" alt="'.$title.'">
                </div>
            </div>';
        }
    ?>
    <h4 class="title"><?php echo $title ?></h4>
    <p class="publish-time">
        <img width="14px" height="14px" src="<?php echo THEME_ASSETS . '/images/commons/icon-clock.svg' ?>"
            alt="icon+clock">
        <span><?php echo $scheduleAt ?></span>
    </p>
</a>