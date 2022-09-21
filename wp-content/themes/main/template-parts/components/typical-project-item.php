<?php
    $url = $args['url'] ?? '#';
    $image = $args['image'] ?? NOT_IMAGE;
    $index = $args['index'] ? ($args['index'] > 10 ? $args['index'] : '0' . $args['index']) : '00';
    $title = $args['title'] ?? '';
?>
<a href="<?php echo $url ?>" class="typical-project-item">
    <img width="384px" height="420px" src="<?php echo $image ?>" alt="<?php echo $title ?>" class="picture">
    <div class="info">
        <p><?php echo $index ?>.</p>
        <h3><?php echo $title ?></h3>
        <img width="22px" height="22px" src="<?php echo THEME_ASSETS . '/images/commons/icon-plus.svg' ?>" alt="icon+plus">
    </div>
</a>