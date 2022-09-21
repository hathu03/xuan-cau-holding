<?php
    $name = $args['name'] ?? null;
    $phone = $args['phone'] ?? null;
    $address = $args['address'] ?? null;
    if(!empty($name)) {
?>
<div class="tw-agency-item">
    <div class="agency-content">
        <h5><?php echo $name ?></h5>
        <?php
            if(!empty($phone)){
        ?>
            <p>
                <img src="<?php echo THEME_ASSETS . '/images/commons/phone.png' ?>" alt="phone+icon">
                <span><?php echo $phone ?></span>
            </p>
        <?php
            }
        ?>
        <?php
            if(!empty($address)){
        ?>
            <p>
                <img src="<?php echo THEME_ASSETS . '/images/commons/house.png' ?>" alt="phone+house">
                <span><?php echo $address ?></span>
            </p>
        <?php
            }
        ?>
    </div>
</div>
<?php } ?>