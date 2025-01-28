// public\js\auth.js
$(document).ready(function () {
    $("#loginForm").submit(function (e) {
        e.preventDefault();

        var username = $("#username").val();
        var password = $("#password").val();

        $.ajax({
            url: "/login",
            method: "POST",
            data: {
                _token: $('input[name="_token"]').val(),
                username: username,
                password: password,
            },
            success: function (response) {
                if (response.success) {
                    window.location.href = response.redirect_url;
                } else {
                    $("#loginError").text(response.message).show();
                }
            },
            error: function (xhr, status, error) {
                // Handle errors here
                $("#loginError")
                    .text("An error occurred. Please try again later.")
                    .show();
            },
        });
    });
});
