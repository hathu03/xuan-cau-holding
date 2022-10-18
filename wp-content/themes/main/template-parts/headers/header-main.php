<div class="typography main-header">
    <div class="main-logo">
        <a href="<?php echo HOME_URL ?>">
            <img width="85px" height="" src="<?php echo THEME_ASSETS . '/images/commons/logo.svg' ?>"
                alt="<?php echo get_bloginfo('name') ?>">
        </a>
    </div>
    <nav class="main-menu">
        <!-- <ul>
            <li class="current-menu-item"><a href="trang-chu">Trang chủ</a></li>
            <li><a href="#gioi-thieu">Giới thiệu</a></li>
            <li><a href="#linh-vuc">Lĩnh vực hoạt động</a></li>
            <li><a href="#du-an">Dự án</a></li>
            <li><a href="#phat-trien-du-an">Phát triển dự án</a></li>
            <li><a href="#tin-tuc">Tin tức</a></li>
            <li><a href="#tuyen-dung">Tuyển dụng</a></li>
        </ul> -->

        <?php wp_nav_menu(
            array(
                'theme_location' => 'main-menu',
                'container' => 'false',
                'menu_id' => 'main_menu',
                'menu_class' => 'main_menu'
            )
        ); ?>
    </nav>
    <div class="search-language">
        <button>
            <img width="20px" height="20px" src="<?php echo THEME_ASSETS . '/images/commons/icon-search.svg' ?>"
                alt="icon+search">
        </button>
        <div class="language" id="main-language">
            <div class="flag">
                <span id="language-view">vi</span>
                <img width="6px" height="6px" src="<?php echo THEME_ASSETS . '/images/commons/icon-down-lang.svg' ?>"
                    alt="icon+down+lang">
            </div>
            <ul>
                <li class="current-lang"><a lang="vi" hreflang="vi" href="#">vi</a></li>
                <li><a lang="en-US" hreflang="en-US" href="#">en</a></li>
            </ul>
        </div>
        <div class="hamburger">
            <img width="20px" height="20px" src="<?php echo THEME_ASSETS . '/images/commons/icon-hamburger.svg' ?>"
                alt="icon+hamburger">
        </div>
    </div>
</div>


<script>
jQuery(document).ready(function($) {

    $('.main-header .main-menu ul li a').click(function(e) {
        e.preventDefault();
        let id_data_scroll = $(this).attr('href');
        console.log(id_data_scroll);
        $('html, body').animate({
            scrollTop: $(id_data_scroll).offset().top
        });
    });



    $('.main-header .search-language .hamburger').click(function(e) {
        e.preventDefault();
        $(".main-header .main-menu").slideToggle("active");
    });

});
</script>