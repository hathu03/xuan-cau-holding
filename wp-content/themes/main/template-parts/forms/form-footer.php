<div class="form-ft">
    <form class="form-ft-register" id="form-ft-register">
        <div class="form-group">
            <div class="form-input">
                <label for="fullName" class="form-label">Họ và tên <sup>*</sup>:</label>
                <input id="fullName" name="fullName" type="text">
                <span class="form-message">Vui lòng điền đầy đủ thông tin</span>
            </div>
            <div class="form-input">
                <label for="email" class="form-label">Email <sup>*</sup>:</label>
                <input id="email" name="email" type="text">
                <span class="form-message">Vui lòng điền đầy đủ thông tin</span>
            </div>
            <div class="form-input">
                <label for="phone" class="form-label">Số điện thoại <sup>*</sup>:</label>
                <input id="phone" name="phone" type="text">
                <span class="form-message">Vui lòng điền đầy đủ thông tin</span>
            </div>
        </div>
        <button type="submit" class="tw-button-primary" id="btn-submit-form-ft">Đăng ký</button>
    </form>
</div>
<script src="<?php echo THEME_ASSETS . '/js/compressor/form-footer.min.js' ?>"></script>