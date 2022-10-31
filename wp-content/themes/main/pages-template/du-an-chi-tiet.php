<?php
// Template Name: Chi tiết dự án
get_header();
$title = get_the_title();

$thong_tin_tong_quan = get_field('thong_tin_tong_quan', 'option');
$thumbnail = $thong_tin_tong_quan['thumbnail'];
$thong_tin = $thong_tin_tong_quan['thong_tin'];
$investor = $thong_tin['investor'];
$location = $thong_tin['location'];
$partner = $thong_tin['partner'];
$area = $thong_tin['area'];
$wattage = $thong_tin['wattage'];
$investment = $thong_tin['investment'];
$start = $thong_tin['start'];
$finish = $thong_tin['finish'];

?>


<?php 
$title = get_the_title();
$idPage = get_the_ID();
$thumbnail = get_the_post_thumbnail_url($id) ? get_the_post_thumbnail_url($idPage) : '';
// $excerpt = get_the_excerpt($id);
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


<?php get_template_part('template-parts/components/banner'); ?>

<section class="dp_section2">
    <div class="tw-container">
        <div class="tw-wrapper">
            <div class="content_detail_project">
                <div class="info_generation">
                    <div class="minh_hoa">
                        <img src="<?php echo THEME_ASSETS . '/images/homes/info.png' ?>" alt="">
                    </div>
                    <div class="_introduce">
                        <div class="tw-title">
                            <p><?= $thong_tin['sub_title'] ?></p>
                            <h2><?= $thong_tin['title'] ?></h2>
                        </div>
                        <ul>
                            <li>
                                <span><?= $investor['label'] ?></span>
                                <p><?= $investor['content'] ?></p>
                            </li>
                            <li>
                                <span><?= $location['label'] ?></span>
                                <p><?= $location['content'] ?></p>
                            </li>
                            <li>
                                <span><?= $partner['label'] ?></span>
                                <p><?= $partner['content'] ?></p>
                            </li>
                        </ul>
                        <div class="dif_intro">
                            <div class="item">
                                <p><?= $area['sub_text'] ?></p>
                                <h2><?= $area['text'] ?></h2>
                            </div>
                            <div class="item">
                                <p><?= $wattage['sub_text'] ?></p>
                                <h2><?= $wattage['text'] ?></h2>
                            </div>
                            <div class="item">
                                <p><?= $investment['sub_text'] ?></p>
                                <h2><?= $investment['text'] ?></h2>
                            </div>
                            <div class="item">
                                <p><?= $start['sub_text'] ?></p>
                                <h2><?= $start['text'] ?></h2>
                                <p class="final"><?= $thong_tin['finish'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <p>
                    Nhà máy điện mặt trời Dầu Tiếng 1 nằm trong cụm Nhà máy điện mặt trời Dầu Tiếng 1-2-3 với tổng công
                    suất 600MWDC, là cụm nhà máy điện mặt trời lớn nhất Đông Nam Á khi COD năm 2019. Cụm nhà máy đã đưa
                    Tây Ninh trở thành một trong những “thủ phủ” về điện mặt trời của cả nước.
                </p>
                <p>
                    Nhà máy điện mặt trời Dầu Tiếng 1 đóng góp hơn 280 triệu kwh/năm, góp phần bổ sung nguồn năng lượng
                    quý giá, xanh - sạch, bảo đảm an ninh năng lượng cho quốc gia và phục vụ phát triển kinh tế xã hội
                    của địa phương trong giai đoạn công nghiệp hóa, hiện đại hóa.
                </p>
                <div class="gallery">
                    <div class="picture_gallery">
                        <img src="<?php echo THEME_ASSETS . '/images/homes/img_gallery1.png' ?>" alt="">
                    </div>
                    <div class="picture_gallery">
                        <img src="<?php echo THEME_ASSETS . '/images/homes/img_gallery2.png' ?>" alt="">
                    </div>
                    <div class="picture_gallery">
                        <img src="<?php echo THEME_ASSETS . '/images/homes/img_gallery3.png' ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>