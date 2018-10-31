(function () {
    if (gosheng_google_reCaptcha_site_key) {
        let body = document.querySelector("body");
        grecaptcha.ready(function () {
            switch (body.classList.contains("home")) {
                case true:
                    var action_type = "homepage";
                    break;
                default:
                    var action_type = "other";
                    break;
            }
            grecaptcha.execute(gosheng_google_reCaptcha_site_key, {action: action_type})
                .then(function (token) {
                    let url = gosheng_wp_root_directory + "wp-admin/admin-ajax.php";
                    let data = {
                        action: "GoSheng_recaptcha",
                        token: token,
                    };
                    $.ajax({
                        type: "post",
                        url: url,
                        data: data,
                        dataType: "text",
                        success: function (data) {
                            GoSheng_reCaptcha_score(data);
                        },
                        error: function (data) {
                            fundebug.notify("reCAPTCHA提醒：失败。");
                        }
                    })
                });
        });

        function GoSheng_reCaptcha_score(data) {
            let results = JSON.parse(data);
            if (results.success === true) {
                let num = results.score;
                switch (num) {
                    case 0.1:
                    case 0.2:
                    case 0.3:
                    case 0.4:
                    case 0.5:
                        GoSheng_reCaptcha_disabled();
                        layer.open({
                            content: "reCAPTCHA提醒：您的访问异常，系统已经记录您的信息。",
                            skin: "msg",
                            time: 5,
                        });
                        fundebug.notify("reCAPTCHA提醒：异常访问");
                        break;
                    case 0.6:
                    case 0.7:
                    case 0.8:
                    case 0.9:
                        GoSheng_reCaptcha_pass();
                        break;
                    default:
                        layer.open({
                            content: "建站不易，请手下留情。",
                        });
                        break;
                }
            } else {
                layer.open({
                    content: "页面加载出错，请刷新本页面。",
                    time: 8,
                });
            }
        }

        function GoSheng_reCaptcha_pass() {
            let reCaptcha_check = document.querySelector("#reCaptcha_check");
            if (reCaptcha_check) {
                let reCaptcha_check_hidden = reCaptcha_check.querySelector("#reCaptcha_check_hidden");
                let reCaptcha_pass = document.querySelector("#reCaptcha_pass");
                let captcha_text = document.querySelector("#captcha_text");
                let captcha_checkbox = document.querySelector("#captcha_checkbox");
                reCaptcha_check.classList.add("d-none");
                reCaptcha_check.removeChild(reCaptcha_check_hidden);
                reCaptcha_pass.classList.remove("d-none");
                captcha_text.parentNode.removeChild(captcha_text);
                captcha_checkbox.parentNode.removeChild(captcha_checkbox);
            }
        }

        function GoSheng_reCaptcha_disabled() {
            let reCaptcha_check = document.querySelector("#reCaptcha_check");
            if (reCaptcha_check) {
                let reCaptcha_check_hidden = reCaptcha_check.querySelector("#reCaptcha_check_hidden");
                let captcha_text = document.querySelector("#captcha_text");
                let captcha_checkbox = document.querySelector("#captcha_checkbox");
                reCaptcha_check.classList.add("d-none");
                reCaptcha_check.removeChild(reCaptcha_check_hidden);
                captcha_text.classList.remove("d-none");
                captcha_checkbox.classList.remove("d-none");
            }
        }
    }
})();