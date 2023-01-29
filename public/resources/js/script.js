$(function () {
    'use strict';

    /**
     * @author Shahzad Ahmed <shaz.noorisys@gmail.com>
     * @date: 2021-12-01 13:55
     * 
     */
    $("#form_login").on('submit', function (e) {
        e.preventDefault();
        let form = $(this).get(0);
        let emailPattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
        let email = $("#email").val();
        let err_email = "Enter Valid Email Address";
        let password = $("#password").val();
        let err_password = "Enter Valid Password";

        if (email.length === 0 || !emailPattern.test(email)) {
            $(".err_email").text(err_email);
        }
        else if (password.length === 0) {
            $(".err_email").text('');
            $(".err_password").text(err_password);
        }
        else {
            $(".err_email, .err_password").text('');
            form.submit();
        }
    })
    // End :: login validation




});