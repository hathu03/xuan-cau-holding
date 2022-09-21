/**
 * js all site
 */
"use strict";
(function() {
    const wow = new WOW({
        boxClass: "wow", // animated element css class (default is wow)
        animateClass: "animated", // animation css class (default is animated)
        offset: 0, // distance to the element when triggering the animation (default is 0)
        mobile: false, // trigger animations on mobile devices (default is true)
        live: true, // act on asynchronously loaded content (default is true)
        callback: function(box) {
            // the callback is fired every time an animation is started
            // the argument that is passed in is the DOM node being animated
        },
        scrollContainer: null, // optional scroll container selector, otherwise use window,
        resetAnimation: true, // reset animation on end (default is true)
    });
    wow.init();

    // // SS9
    // // Handle Register Form
    // const btnSubmitRegister = jQuery('#btn-submit-register')
    // const registerForm = jQuery('#register-form')
    // Validator({
    //     form: '#register-form',
    //     formGroupSelector: '.form-group',
    //     errorSelector: '.form-message',
    //     classError: 'invalid',
    //     rules: [
    //         Validator.isRequired('#fullName', 'Họ và tên là bắt buộc'),
    //         Validator.isMinLength('#fullName', 3, 'Họ và tên tối thiểu 2 kí tự'),
    //         Validator.isText('#fullName', 'Họ và tên phải và chữ'),

    //         Validator.isRequired('#email', 'Email là bắt buộc'),
    //         Validator.isEmail('#email', 'Email không hợp lệ'),

    //         Validator.isRequired('#phone', 'Số điện thoại là bắt buộc'),
    //         Validator.isPhone('#phone', 'Số điện thoại không hợp lệ'),

    //         Validator.isRequired('input[name="interestedApartment"]', 'Vui lòng chọn căn hộ quan tâm'),
    //     ],
    //     onSubmit: (data) => {
    //         const token = document.querySelector('#contact_nonce').value
    //         jQuery.ajax({
    //             type: 'POST',
    //             url: obj.AJAX_URL,
    //             data: {
    //                 action: 'formCommonAjax',
    //                 data: data,
    //                 nonce: token,
    //                 postTitle: 'fullName',
    //                 postType: 'register_form'
    //             },
    //             beforeSend: () => {
    //                 btnSubmitRegister.text('Gửi đăng ký...')
    //                 btnSubmitRegister.prop('disabled', true)
    //             },
    //             complete: () => {
    //                 btnSubmitRegister.text('Gửi đăng ký')
    //                 btnSubmitRegister.prop('disabled', false)
    //             },
    //             success: (res) => {
    //                 if(res.success){
    //                     toastr.success(res.data || 'Đăng ký thành công!')
    //                     registerForm.trigger("reset");
    //                 }else{
    //                     toastr.error(res.data || 'Đăng ký thành công!')
    //                 }
    //             },
    //             error: (jqXHR, textStatus, errorThrown) => {
    //                 console.log('The following error occured: ' + jqXHR, textStatus, errorThrown);
    //             }
    //         })
    //     }
    // })


    // jQuery('#hamburger').click(function() {
    //     jQuery('.header-main').toggleClass('is-active')
    //     jQuery('#tw-coating').toggleClass('is-active')
    // })

    // jQuery('#tw-coating').click(function() {
    //     jQuery(this).removeClass('is-active')
    //     jQuery('.header-main').removeClass('is-active')
    // })
})();