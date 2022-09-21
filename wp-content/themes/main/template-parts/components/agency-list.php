<?php
    $data = $args['data'] ?? [];
    if(!empty($data) && count($args['data']) > 0) {
?>
<div class="tw-agency-list">
    <?php
        foreach ($data as $key => $item) {
            get_template_part(
                'template-parts/components/agency',
                'item',
                [
                    'name' => $item['name'] ?? null,
                    'phone' => $item['phone'] ?? null,
                    'address' => $item['address'] ?? null
                ]
            );
        }
    ?>
</div>
<?php } else {
    echo '<p>Đang cập nhật...</p>';
} ?>