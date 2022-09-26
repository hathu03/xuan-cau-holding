<?php
    $url = $args['url'] ?? '#';
    $thumbnail = $args['thumbnail'] ?? NOT_IMAGE;
    $index = $args['index'] ? ($args['index'] > 10 ? $args['index'] : '0' . $args['index']) : '00';
    $title = $args['title'] ?? '';
?>
<a href="<?php echo $url ?>" class="typical-project-item">
    <img width="384px" height="420px" src="<?php echo $thumbnail ?>" alt="<?php echo $title ?>" class="picture">
    <div class="info">
        <div class="info-label">
            <p><?php echo $index ?>.</p>
            <h3><?php echo $title ?></h3>
        </div>
        <img class="icon-plus" width="22px" height="22px" src="<?php echo THEME_ASSETS . '/images/commons/icon-plus.svg' ?>" alt="icon+plus">
    </div>
</a>