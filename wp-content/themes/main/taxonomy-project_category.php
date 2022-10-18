<?php

get_header();
$title = get_the_title();
$current_cat = get_queried_object();
$current_term_id = $current_cat->term_id;
$catSlug = $current_cat->slug;
$catName = $current_cat->name;


$tax_pr = array(
    'taxonomy' => 'project_category',
    'hide_empty' => false,
    'field' => 'slug',
    'terms' => $catSlug,
);


$project_terms = get_terms([
    'taxonomy' => 'project_category',
    'hide_empty' => false,
]);
?>


<?php get_template_part('template-parts/components/banner'); ?>



<section class="p_section2">
    <div class="tw-container">
        <div class="tw-wrapper">
            <div class="tab_project">

                <?php
                    foreach ($project_terms as $terms) :
                        $term_id = $terms->term_id;
                        $term_name = $terms->name;
                        $term_slug = $terms->slug;
                        $term_link = get_term_link($term_id);
                ?>

                <a href="<?php echo $term_link ?>"
                    class="item_tab <?php echo $term_name === $catName ? "active" : "" ?>"><?php echo $terms->name ?></a>
                <!-- <a href="#bat_dong_san" class="item_tab">Bất động sản</a>
                <a href="#co_so_ha_tang" class="item_tab">Cơ sở hạ tầng & Logistics</a>
                <a href="#vat_lieu_xay_dung" class="item_tab">Vật liệu xây dựng</a>
                <a href="#thuong_mai_dien_tu" class="item_tab">Thương mại điện tử</a> -->

                <?php endforeach ?>
            </div>
            <div class="content_project active" id="nang_luong_tai_tao">
                <?php  
                    
                        $project = new WP_Query(

                            array(
                                'post_type' => 'post',
                                'posts_per_page' => -1,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'category',
                                        'field' => 'slug',
                                        'terms' => $catSlug
                                    )
                                )
                            )
                            
                        )
                    ?>
                <?php if ($project->have_posts()) : $i=0 ?>
                <?php while ($project->have_posts()) : $project->the_post(); ?>


                <?php 
                        $i++;
                        $project_id = get_the_ID(); 
                        $project_title = get_the_title($id);
                        $permalink = get_permalink($id);
                    ?>


                <a href="<?= $permalink ?  $permalink : '' ?>" class="item_project">
                    <img src="<?php echo THEME_ASSETS . '/images/homes/project_img1.png'; ?>" alt="">
                    <div class="_title_component_def">
                        <p class="number"><?php echo '0'.($i ) ?>.</p>
                        <p class="title_component"><?= $project_title ?></p>
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="11" cy="11" r="11" fill="#BB1A21" />
                            <path d="M11 7V15" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                            <path d="M15 11L7 11" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                        </svg>
                    </div>
                </a>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<script>
// jQuery(document).ready(function($) {
//     $(".content_project").hide();
//     $(".content_project.active").show();
//     $(".tab_project .item_tab").click(function() {
//         $(".tab_project .item_tab").removeClass('active')
//         $(this).addClass('active');
//         let id_tab_content = $(this).attr('href');
//         $('.content_project').hide();
//         $(id_tab_content).fadeIn();
//         return false;
//     });
// });
</script>




<?php get_footer() ?>