<?php
$footer = get_field('footer', 'option');
$label = $footer['label'];
$head_quater = $footer['head_quater'];
$branch = $footer['branch'];
$connect = $footer['connect'];
$recruit = $footer['recruit'];
$request = $recruit['request'];
?>

<div class="typography footer-main">
    <div class="ft">
        <div class="tw-container">
            <div class="tw-wrapper">
                <div class="context">
                    <div class="form-register">
                        <h4 class="title">Đăng ký nhận tin</h4>
                        <?php get_template_part( 'template-parts/forms/form', 'footer' ); ?>
                    </div>
                    <div class="contact">
                        <h4 class="title"><?= $label ?></h4>
                        <div class="info">
                            <div class="contact-item">
                                <p class="label"><?= $head_quater['name'] ?></p>
                                <p class="address"><?= $head_quater['address'] ?></p>
                                <div class="phone-fax">
                                    <p>
                                        <img width="12px" height="12px"
                                            src="<?php echo THEME_ASSETS . '/images/commons/icon-phone-outline.svg' ?>"
                                            alt="icon-phone">
                                        <a href="tel:<?= $head_quater['phone'] ?>"><?= $head_quater['phone'] ?></a>
                                    </p>
                                    <p>
                                        <img width="12px" height="12px"
                                            src="<?php echo THEME_ASSETS . '/images/commons/icon-fax-outline.svg' ?>"
                                            alt="icon-phone">
                                        <a href="tel:<?= $head_quater['fax'] ?>"><?= $head_quater['fax'] ?></a>
                                    </p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <p class="label"><?= $branch['name'] ?></p>
                                <p class="address"><?= $branch['address'] ?></p>
                                <div class="phone-fax">
                                    <p>
                                        <img width="12px" height="12px"
                                            src="<?php echo THEME_ASSETS . '/images/commons/icon-phone-outline.svg' ?>"
                                            alt="icon-phone">
                                        <a href="tel:<?= $branch['phone'] ?>"><?= $branch['phone'] ?></a>
                                    </p>
                                    <p>
                                        <img width="12px" height="12px"
                                            src="<?php echo THEME_ASSETS . '/images/commons/icon-fax-outline.svg' ?>"
                                            alt="icon-phone">
                                        <a href="tel:<?= $branch['fax'] ?>"><?= $branch['fax'] ?></a>
                                    </p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <p class="label"><?= $recruit['name'] ?></p>
                                <ul>

                                    <li><a href="#">Môi trường làm việc</a></li>
                                    <li><a href="#">Vị trí tuyển dụng</a></li>

                                </ul>
                            </div>
                            <div class="contact-item" id="tuyen-dung">
                                <p class="label">Kết nối với chúng tôi</p>
                                <div class="social">
                                    <a href="#" target="_blank">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="#" target="_blank">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="#" target="_blank">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>Designed and Developed by <a href="http://twinger.vn/" target="_blank">Twinger</a></p>
    </div>
</div>
<script>
</script>