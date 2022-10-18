<?php
// Template Name: Lĩnh vực hoạt động
get_header();
$title = get_the_title();
$idPage = get_the_ID();
$thumbnail = get_the_post_thumbnail_url($id) ? get_the_post_thumbnail_url($idPage) : '';
$excerpt = get_the_excerpt($id);
?>

<?php
$field_of_activity = new WP_Query(
    array(
        'post_type' => 'field_of_activity',
        'post_per_page' => -1,
        'post_status' => 'publish',
    )
    );
//  var_dump($thumbnail)
?>


<?php get_template_part('template-parts/components/banner'); ?>

<section class="a_section2">
    <div class="tw-container">
        <div class="tw-wrapper">
            <?php if ($field_of_activity->have_posts()) : $i=0 ?>
            <?php while ($field_of_activity->have_posts()) : $field_of_activity->the_post()?>
            <?php
                $i++;
                $id = get_the_ID();
                $title = get_the_title($id);
                // $link = get_term_link($id);
                $permalink = get_permalink($id);
                $thumbnail= get_the_post_thumbnail_url($id) ? get_the_post_thumbnail_url($id) : '' ;
                $excerpt = get_the_excerpt($id);
            ?>
            <div class="wrap_act">
                <a href="<?= $permalink ?  $permalink : '' ?>" class="illustration">
                    <img src="<?= $thumbnail ?>" alt="">
                </a>
                <div class="subtitle">
                    <a href="<?= $permalink ?  $permalink : '' ?>" class="tw-title">
                        <p>Lĩnh vực hoạt động</p>
                        <h2><?php echo $title ?></h2>
                    </a>
                    <p class="excerpt">
                        Với nỗ lực tận dụng nguồn tài nguyên vô tận từ thiên nhiên,
                        đưa năng lượng mặt trời, năng lượng gió trở thành nguồn
                        cấp điện đáng kể tại Việt Nam, Xuân Cầu Holdings chính thức
                        trở thành một trong những nhà phát triển năng lượng tái tạo
                        hàng đầu tại Việt Nam thông qua các dự án điện mặt trời tại
                        Tây Ninh, điện gió tại Sóc Trăng,...
                    </p>
                    <a href="<?= $permalink ?  $permalink : '' ?>" class="read_more_def">
                        <svg width="22px" height="22px" viewBox="0 0 22 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="11" cy="11" r="11" fill="#BB1A21" />
                            <path d="M11 7V15" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                            <path d="M15 11L7 11" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                        </svg>
                        Xem chi tiết
                    </a>
                </div>
            </div>
            <?php  endwhile; ?>
            <?php endif; ?>
            <!-- <div class="wrap_act">
                <a href="" class="illustration">
                    <img src="<?php echo THEME_ASSETS . '/images/homes/img-2.png' ?>" alt="">
                </a>
                <div class="subtitle">
                    <a href="" class="tw-title">
                        <p>Lĩnh vực hoạt động</p>
                        <h2>Bất động sản</h2>
                    </a>
                    <p class="excerpt">
                        Năm 2005, Xuân Cầu Holdings tham gia lĩnh vực bất động sản
                        và phát triển thành công Thương hiệu Khu đô thị Xanh Villas mở đầu cho
                        chiến lược phát triển “xanh bền vững”, tạo đà để Xuân Cầu Holdings tự tin
                        triển khai các dự án bất động sản khác trên khắp cả nước.
                    </p>
                    <a href="" class="read_more_def">
                        <svg width="22px" height="22px" viewBox="0 0 22 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="11" cy="11" r="11" fill="#BB1A21" />
                            <path d="M11 7V15" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                            <path d="M15 11L7 11" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                        </svg>
                        Xem chi tiết
                    </a>
                </div>
            </div>
            <div class="wrap_act">
                <a href="" class="illustration">
                    <img src="<?php echo THEME_ASSETS . '/images/homes/img-3.png' ?>" alt="">
                </a>
                <div class="subtitle">
                    <a href="" class="tw-title">
                        <p>Lĩnh vực hoạt động</p>
                        <h2>Cơ sở hạ tầng & logistic</h2>
                    </a>
                    <p class="excerpt">
                        Xuân Cầu Holdings tiến bước vững mạnh trong lĩnh vực cơ sở hạ tầng
                        & Logistics với Dự án Khu phi thuế quan – Logistics và
                        Công nghiệp Lạch Huyện được Ban Quản lý Khu kinh tế Hải Phòng
                        (HEZA) trao giấy chứng nhận đăng ký đầu tư vào ngày 07/12/2021.
                    </p>
                    <a href="" class="read_more_def">
                        <svg width="22px" height="22px" viewBox="0 0 22 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="11" cy="11" r="11" fill="#BB1A21" />
                            <path d="M11 7V15" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                            <path d="M15 11L7 11" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                        </svg>
                        Xem chi tiết
                    </a>
                </div>
            </div>
            <div class="wrap_act">
                <a href="" class="illustration">
                    <img src="<?php echo THEME_ASSETS . '/images/homes/img-4.png' ?>" alt="">
                </a>
                <div class="subtitle">
                    <a href="" class="tw-title">
                        <p>Lĩnh vực hoạt động</p>
                        <h2>Vật liệu xây dựng</h2>
                    </a>
                    <p class="excerpt">
                        Năm 2016, Xuân Cầu Holdings chính thức tham gia vào thị trường
                        sản xuất vật liệu xây dựng trở thành cổ đông chiến lược của
                        Tổng công ty vật liệu xây dựng số 1- CTCP (FiCO), doanh nghiệp
                        hàng đầu trong ngành vật liệu xây dựng tại Việt Nam.
                    </p>
                    <a href="" class="read_more_def">
                        <svg width="22px" height="22px" viewBox="0 0 22 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="11" cy="11" r="11" fill="#BB1A21" />
                            <path d="M11 7V15" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                            <path d="M15 11L7 11" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                        </svg>
                        Xem chi tiết
                    </a>
                </div>
            </div>
            <div class="wrap_act">
                <a href="" class="illustration">
                    <img src="<?php echo THEME_ASSETS . '/images/homes/img-5.png' ?>" alt="">
                </a>
                <div class="subtitle">
                    <a href="" class="tw-title">
                        <p>Lĩnh vực hoạt động</p>
                        <h2>Thương mại dịch vụ</h2>
                    </a>
                    <p class="excerpt">
                        Xuân Cầu Holdings tự hào là đơn vị tiên phong đưa dòng xe máy
                        Piaggio, Vespa - thương hiệu Ý vào Việt Nam, nhanh chóng chiếm được
                        lòng tin của người tiêu dùng và chiếm lĩnh thị trường.
                    </p>
                    <a href="" class="read_more_def">
                        <svg width="22px" height="22px" viewBox="0 0 22 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="11" cy="11" r="11" fill="#BB1A21" />
                            <path d="M11 7V15" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                            <path d="M15 11L7 11" stroke="white" stroke-width="1.2" stroke-linecap="round" />
                        </svg>
                        Xem chi tiết
                    </a>
                </div>
            </div> -->
        </div>
    </div>
</section>
<?php
    get_footer()
?>