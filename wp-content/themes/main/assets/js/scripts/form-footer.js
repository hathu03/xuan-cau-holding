jQuery(document).ready(function($) {
    const btnSubmitRegister = jQuery('#btn-submit-form-ft')
    const registerForm = jQuery('#form-ft-register')
    Validator({
        form: '#form-ft-register',
        formGroupSelector: '.form-input',
        errorSelector: '.form-message',
        classError: 'invalid',
        rules: [
            Validator.isRequired('#fullName', 'Họ và tên là bắt buộc'),
            Validator.isMinLength('#fullName', 3, 'Họ và tên tối thiểu 2 kí tự'),
            Validator.isText('#fullName', 'Họ và tên phải là chữ'),

            Validator.isRequired('#email', 'Email là bắt buộc'),
            Validator.isEmail('#email', 'Email không hợp lệ'),

            Validator.isRequired('#phone', 'Số điện thoại là bắt buộc'),
            Validator.isPhone('#phone', 'Số điện thoại không hợp lệ'),

            Validator.isRequired('#phone', 'Nội dung là bắt buộc'),
            // Validator.isContent('#content', 'Nội dung không hợp lệ'),
        ],
        onSubmit: (data) => {
            console.log("🚀 ~ file: form-footer.js ~ line 24 ~ data", data)
        }
    })
})