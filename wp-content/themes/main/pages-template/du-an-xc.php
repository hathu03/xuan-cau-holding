<?php
// Template Name: Dự án
get_header();
$title = get_the_title();
?>
<?php 
$project_terms = get_terms([
    'taxonomy' => 'project_category',
    'hide_empty' => false,
]);

// $prj_total = new WP_Query(
//     array(
//         'post_type' => 'project',
//         'posts_per_page' => -1,
//         'post_status' => 'publish',
//         'tax_query' => array(
//             array(
//                 'taxonomy' => 'project_category',
//                 'field' => 'slug',
//                 'terms' => $catSlug,
//             ),
//         )

//     )
// )
?>

<?php
$detail_project = new WP_Query(
    array(
        'post_type' => 'detail_project',
        'post_per_page' => -1,
        'post_status' => 'publish',
    )
    );
?>


<section class="p_section1">
    <div class="background_picture">
        <img width="1440px" height="520px" class="background_field swiper-lazy"
            src="<?php echo THEME_ASSETS . '/images/homes/banner_activity.png' ?>" alt="">
        <div class="text_activity">
            <p class="text_little">Trang chủ / Dự án</p>
            <p class="text_big">Dự án</p>
        </div>
    </div>
</section>

<section class="p_section2">
    <div class="tw-container">
        <div class="tw-wrapper">
            <div class="tab_project">
                <?php
                foreach ($project_terms as $term) :
                    $term_id = $term->term_id;
                    $term_name = $term->name;
                    $term_slug = $term->slug;
                    $term_link = get_term_link($term_id);
                ?>
                <a href="<?php echo $term_slug ?>" class="item_tab active"><?php echo $term_name ?></a>

                <?php endforeach ?>
                <!-- <a href="#bat_dong_san" class="item_tab">Bất động sản</a>
                <a href="#co_so_ha_tang" class="item_tab">Cơ sở hạ tầng & Logistics</a>
                <a href="#vat_lieu_xay_dung" class="item_tab">Vật liệu xây dựng</a>
                <a href="#thuong_mai_dien_tu" class="item_tab">Thương mại điện tử</a> -->
            </div>
            <div class="content_project active" id="bat_dong_san">
                <?php 
                
                $tax_qr = array(
                    'taxonomy' => 'project_category',
                    'field' => 'slug',
                    'terms' =>  $term_slug,
                )


                $prj_total = new WP_Query(
                    array(
                        'post_type' => 'project',
                        'posts_per_page' => -1,
                        'tax_query' => $tax_qr,
                    )
                )
                ?>
                <?php 
                $term = get_terms('project_category', ['child_of' => $term_id, 'parent' => $term_id]);
                ?>
                <div class="item_project">
                    <img src="<?php echo THEME_ASSETS . '/images/homes/project_img1.png'; ?>" alt="">
                    <div class="_title_component_def">
                        <p class="number">01.</p>
                        <p class="title_component">Nhà máy điện mặt trời <br> dầu tiếng 1</p>
                        <a href="">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="11" fill="#BB1A21" />
                                <path d="M11 7V15" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                                <path d="M15 11L7 11" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="item_project">
                    <img src="<?php echo THEME_ASSETS . '/images/homes/project_img2.png'; ?>" alt="">
                    <div class="_title_component_def">
                        <p class="number">02.</p>
                        <p class="title_component">Nhà máy điện mặt trời <br> dầu tiếng 3</p>
                        <a href="">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="11" fill="#BB1A21" />
                                <path d="M11 7V15" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                                <path d="M15 11L7 11" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="item_project">
                    <img src="<?php echo THEME_ASSETS . '/images/homes/project_img3.png'; ?>" alt="">
                    <div class="_title_component_def">
                        <p class="number">03.</p>
                        <p class="title_component">Nhà máy điện gió <br> số 7 (GĐ 1)</p>
                        <a href="">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="11" fill="#BB1A21" />
                                <path d="M11 7V15" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                                <path d="M15 11L7 11" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="item_project">
                    <img src="<?php echo THEME_ASSETS . '/images/homes/project_img4.png'; ?>" alt="">
                    <div class="_title_component_def">
                        <p class="number">04.</p>
                        <p class="title_component">Nhà máy điện gió số 7 <br> (GĐ 2)</p>
                        <a href="">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="11" fill="#BB1A21" />
                                <path d="M11 7V15" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                                <path d="M15 11L7 11" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="item_project">
                    <img src="<?php echo THEME_ASSETS . '/images/homes/project_img5.png'; ?>" alt="">
                    <div class="_title_component_def">
                        <p class="number">05.</p>
                        <p class="title_component">Nhà máy điện gió <br> nhơn hội</p>
                        <a href="">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="11" fill="#BB1A21" />
                                <path d="M11 7V15" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                                <path d="M15 11L7 11" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="item_project">
                    <img src="<?php echo THEME_ASSETS . '/images/homes/project_img6.png'; ?>" alt="">
                    <div class="_title_component_def">
                        <p class="number">06.</p>
                        <p class="title_component">Nhà máy điện mặt trời <br> dầu tiếng 5.1 & 5.2</p>
                        <a href="">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="11" fill="#BB1A21" />
                                <path d="M11 7V15" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                                <path d="M15 11L7 11" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="content_project" id="co_so_ha_tang">
                <div class="item_project">
                    <img src="<?php echo THEME_ASSETS . '/images/homes/project_img1.png'; ?>" alt="">
                    <div class="_title_component_def">
                        <p class="number">01.</p>
                        <p class="title_component">Nhà máy điện mặt trời <br> dầu tiếng 1</p>
                        <a href="">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="11" fill="#BB1A21" />
                                <path d="M11 7V15" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                                <path d="M15 11L7 11" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="item_project">
                    <img src="<?php echo THEME_ASSETS . '/images/homes/project_img2.png'; ?>" alt="">
                    <div class="_title_component_def">
                        <p class="number">02.</p>
                        <p class="title_component">Nhà máy điện mặt trời <br> dầu tiếng 3</p>
                        <a href="">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="11" fill="#BB1A21" />
                                <path d="M11 7V15" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                                <path d="M15 11L7 11" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="item_project">
                    <img src="<?php echo THEME_ASSETS . '/images/homes/project_img3.png'; ?>" alt="">
                    <div class="_title_component_def">
                        <p class="number">03.</p>
                        <p class="title_component">Nhà máy điện gió <br> số 7 (GĐ 1)</p>
                        <a href="">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="11" fill="#BB1A21" />
                                <path d="M11 7V15" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                                <path d="M15 11L7 11" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="item_project">
                    <img src="<?php echo THEME_ASSETS . '/images/homes/project_img4.png'; ?>" alt="">
                    <div class="_title_component_def">
                        <p class="number">04.</p>
                        <p class="title_component">Nhà máy điện gió số 7 <br> (GĐ 2)</p>
                        <a href="">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="11" fill="#BB1A21" />
                                <path d="M11 7V15" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                                <path d="M15 11L7 11" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="item_project">
                    <img src="<?php echo THEME_ASSETS . '/images/homes/project_img5.png'; ?>" alt="">
                    <div class="_title_component_def">
                        <p class="number">05.</p>
                        <p class="title_component">Nhà máy điện gió <br> nhơn hội</p>
                        <a href="">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="11" fill="#BB1A21" />
                                <path d="M11 7V15" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                                <path d="M15 11L7 11" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="item_project">
                    <img src="<?php echo THEME_ASSETS . '/images/homes/project_img6.png'; ?>" alt="">
                    <div class="_title_component_def">
                        <p class="number">06.</p>
                        <p class="title_component">Nhà máy điện mặt trời <br> dầu tiếng 5.1 & 5.2</p>
                        <a href="">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="11" fill="#BB1A21" />
                                <path d="M11 7V15" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                                <path d="M15 11L7 11" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="content_project" id="vat_lieu_xay_dung">
                <div class="item_project">
                    <img src="<?php echo THEME_ASSETS . '/images/homes/project_img1.png'; ?>" alt="">
                    <div class="_title_component_def">
                        <p class="number">01.</p>
                        <p class="title_component">Nhà máy điện mặt trời <br> dầu tiếng 1</p>
                        <a href="">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="11" fill="#BB1A21" />
                                <path d="M11 7V15" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                                <path d="M15 11L7 11" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="item_project">
                    <img src="<?php echo THEME_ASSETS . '/images/homes/project_img2.png'; ?>" alt="">
                    <div class="_title_component_def">
                        <p class="number">02.</p>
                        <p class="title_component">Nhà máy điện mặt trời <br> dầu tiếng 3</p>
                        <a href="">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="11" fill="#BB1A21" />
                                <path d="M11 7V15" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                                <path d="M15 11L7 11" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="item_project">
                    <img src="<?php echo THEME_ASSETS . '/images/homes/project_img3.png'; ?>" alt="">
                    <div class="_title_component_def">
                        <p class="number">03.</p>
                        <p class="title_component">Nhà máy điện gió <br> số 7 (GĐ 1)</p>
                        <a href="">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="11" fill="#BB1A21" />
                                <path d="M11 7V15" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                                <path d="M15 11L7 11" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="item_project">
                    <img src="<?php echo THEME_ASSETS . '/images/homes/project_img4.png'; ?>" alt="">
                    <div class="_title_component_def">
                        <p class="number">04.</p>
                        <p class="title_component">Nhà máy điện gió số 7 <br> (GĐ 2)</p>
                        <a href="">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="11" fill="#BB1A21" />
                                <path d="M11 7V15" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                                <path d="M15 11L7 11" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="item_project">
                    <img src="<?php echo THEME_ASSETS . '/images/homes/project_img5.png'; ?>" alt="">
                    <div class="_title_component_def">
                        <p class="number">05.</p>
                        <p class="title_component">Nhà máy điện gió <br> nhơn hội</p>
                        <a href="">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="11" fill="#BB1A21" />
                                <path d="M11 7V15" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                                <path d="M15 11L7 11" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="item_project">
                    <img src="<?php echo THEME_ASSETS . '/images/homes/project_img6.png'; ?>" alt="">
                    <div class="_title_component_def">
                        <p class="number">06.</p>
                        <p class="title_component">Nhà máy điện mặt trời <br> dầu tiếng 5.1 & 5.2</p>
                        <a href="">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="11" fill="#BB1A21" />
                                <path d="M11 7V15" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                                <path d="M15 11L7 11" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="content_project" id="thuong_mai_dien_tu">
                <div class="item_project">
                    <img src="<?php echo THEME_ASSETS . '/images/homes/project_img1.png'; ?>" alt="">
                    <div class="_title_component_def">
                        <p class="number">01.</p>
                        <p class="title_component">Nhà máy điện mặt trời <br> dầu tiếng 1</p>
                        <a href="">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="11" fill="#BB1A21" />
                                <path d="M11 7V15" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                                <path d="M15 11L7 11" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="item_project">
                    <img src="<?php echo THEME_ASSETS . '/images/homes/project_img2.png'; ?>" alt="">
                    <div class="_title_component_def">
                        <p class="number">02.</p>
                        <p class="title_component">Nhà máy điện mặt trời <br> dầu tiếng 3</p>
                        <a href="">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="11" fill="#BB1A21" />
                                <path d="M11 7V15" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                                <path d="M15 11L7 11" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="item_project">
                    <img src="<?php echo THEME_ASSETS . '/images/homes/project_img3.png'; ?>" alt="">
                    <div class="_title_component_def">
                        <p class="number">03.</p>
                        <p class="title_component">Nhà máy điện gió <br> số 7 (GĐ 1)</p>
                        <a href="">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="11" fill="#BB1A21" />
                                <path d="M11 7V15" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                                <path d="M15 11L7 11" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="item_project">
                    <img src="<?php echo THEME_ASSETS . '/images/homes/project_img4.png'; ?>" alt="">
                    <div class="_title_component_def">
                        <p class="number">04.</p>
                        <p class="title_component">Nhà máy điện gió số 7 <br> (GĐ 2)</p>
                        <a href="">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="11" fill="#BB1A21" />
                                <path d="M11 7V15" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                                <path d="M15 11L7 11" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="item_project">
                    <img src="<?php echo THEME_ASSETS . '/images/homes/project_img5.png'; ?>" alt="">
                    <div class="_title_component_def">
                        <p class="number">05.</p>
                        <p class="title_component">Nhà máy điện gió <br> nhơn hội</p>
                        <a href="">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="11" fill="#BB1A21" />
                                <path d="M11 7V15" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                                <path d="M15 11L7 11" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="item_project">
                    <img src="<?php echo THEME_ASSETS . '/images/homes/project_img6.png'; ?>" alt="">
                    <div class="_title_component_def">
                        <p class="number">06.</p>
                        <p class="title_component">Nhà máy điện mặt trời <br> dầu tiếng 5.1 & 5.2</p>
                        <a href="">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="11" fill="#BB1A21" />
                                <path d="M11 7V15" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                                <path d="M15 11L7 11" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
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

<?php
    get_footer()
?>