<?php

get_header();

get_template_part( 'template-parts/home/section1' );
get_template_part( 'template-parts/home/section2' );
get_template_part( 'template-parts/home/section3' );
get_template_part( 'template-parts/home/section4' );
get_template_part( 'template-parts/home/section5' );
get_template_part( 'template-parts/home/section6' );
get_template_part( 'template-parts/home/section7' );
get_template_part( 'template-parts/home/section8' );
get_template_part( 'template-parts/home/section9' );
get_template_part( 'template-parts/home/floating' );
get_template_part( 'template-parts/home/back_top' );
get_template_part( 'template-parts/home/popup-library' );
?>
<script src="<?php echo THEME_ASSETS . '/js/compressor/home.min.js' ?>"></script>
<?php
get_footer();